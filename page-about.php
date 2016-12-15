<?php
/**
 *Template Name: About Page
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

get_header(); ?>
<section class="wrapper position flexbox">
  <?php
  //Set current page category
  $category = get_category(get_query_var('cat'), false);
  $cat_id = $category->cat_ID;
  // Query for all of the posts that have same category as the current page
  $args = array(
    // Arguments for your query.
    'category_name' => 'About'
  );
//adds single content that does not loop
  $board = false;
  $officers= false;
  $rochester= false;
  // Custom query.
  $query = new WP_Query($args);
  // Check that we have query results.
  if ( $query->have_posts() ) {
    // Start looping over the query results.
    while ($query->have_posts()) {
      $query->the_post();
      if (has_tag('about-us-post')) {
        echo '<div class= "about-us-post">';
        echo the_content();
        echo '</div>';
      }
    else if (has_tag('board-members')){
      if (!$board){
        echo '<h2>Board of Directors</h2>';
        $board = true;
      }
        echo '<div class="board-content">';
        echo the_content();
        echo '</div>';
      } else if (has_tag('board-rochester')){
        if (!$rochester){
          echo '<h2>Rochester Advisory Board</h2>';
          $rochester = true;
        }
      echo '<div class="board-content">';
      echo the_content();
      echo '</div>';
    }else if (has_tag('board-officers')){
      if (!$officers){
        echo '<h2>Officers</h2>';
        $officers = true;
      }
    echo '<div class="board-content">';
    echo the_content();
    echo '</div>';
  }
  }//end while
}//end if






      wp_reset_postdata();
      ?>
    </section>
    <?php get_footer(); ?>
