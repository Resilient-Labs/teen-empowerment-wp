<?php
/**
*Template Name: Home Page
*
* This is the template that displays all pages by default.
* Please note that this is the WordPress construct of pages
* and that other 'pages' on your WordPress site may use a
* different template.
*
* @link https://codex.wordpress.org/Template_Hierarchy
*
* @package Teen_Empowerment
*/

// ini_set('display_errors', 1);

get_header(); ?>
<section class="wrapper flexbox">

  <?php
  //Set current page category
  $category = get_category(get_query_var('cat'), false);
  $cat_id = $category->cat_ID;
  // Query for all of the posts that have same category as the current page
  $args = array(
    // Arguments for your query.
    'category_name' => 'Home'
  );
  // adds single text not looped
  $featured = false;
  $news = false;
  $facebook = false;
  $eventsContainer = false;
  //
  $maxevents = 3;
  // Custom query.
  $query = new WP_Query($args);
  // Check that we have query results.
  if ( $query->have_posts() ) {
    // Start looping over the query results.
    while ($query->have_posts()) {
      $query->the_post();
      if (has_tag('image-content-post')) {
        echo '<div class= "image-content-post flexbox">';
        echo '<div class="image"><img src="'.grab_images().'"/></div>';
        echo '<div class= "content">';
        echo '<h2>'.get_the_title().'</h2>';
        echo '<p>'.remove_img_from_content( get_the_content() ).'</p>';
        echo '</div>';
        echo '</div>';
      } else if (has_tag('image-hover')) {

        if (!$featured)
        {
          echo '<h2>Featured Stories</h2>';
          $featured = true;
        }

        echo '<div class= "image-hover">';
        $thumb_id = get_post_thumbnail_id();
        $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
        $thumb_url = $thumb_url_array[0];
        if (has_post_thumbnail()) {
          echo the_post_thumbnail('full');
        }
        echo '<div class= "overlay">';
        echo the_content();
        echo '</div>';
        echo '</div>';
      } else if (has_tag('events-post')){
        if (!$news)
        {
          echo '<h2>News & Events</h2>';
          $news = true;
        }
        if (!$eventsContainer) {
        echo '<div class="events-container">';
        $eventsContainer = true;
      }
        if ($maxevents > 0) {
          echo '<div class= "events-content">';
          echo content(37);
          echo '</div>';
          echo '</div>';
          $maxevents--;
        } // end if
        if ($maxevents == 0) {
        echo '</div>';
        $eventsContainer = true;
      }
      } // end conditionals
    } // endwhile
    if (!$facebook)
    {
      echo do_shortcode('[custom-facebook-feed]');
      $facebook = true;
    }
  } // end if







  // Restore original post data.
  wp_reset_postdata();
  ?>
</section>
<?php get_footer(); ?>
