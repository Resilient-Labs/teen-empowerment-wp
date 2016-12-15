<?php
/**
 *Template Name: Blog Page
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
<section class="wrapper flexbox position">
<?php
//Set current page category
$category = get_category(get_query_var('cat'), false);
$cat_id = $category->cat_ID;
// Query for all of the posts that have same category as the current page
 $args = array(
 // Arguments for your query.
 'category_name' => 'Blog'
 );

// Custom query.
     $query = new WP_Query($args);
     // Check that we have query results.
       if ( $query->have_posts() ) {
         // Start looping over the query results.
         while ($query->have_posts()) {
           $query->the_post();
             if (has_tag('blog-post')) {
               echo '<article class ="blog-post">';
               echo '<div class= "blog-image">';
               $thumb_id = get_post_thumbnail_id();
               $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
               $thumb_url = $thumb_url_array[0];
               if (has_post_thumbnail()) {
                 echo the_post_thumbnail('full');
               }
               echo '</div>';
               echo '<div class= "blog-content">';
               echo substr(get_the_content(), 0, 100);
               echo '<p><a href ="'.get_post_permalink().'">Learn More </a></p>';
               echo '</div>';
               echo '</article>';




             }

           }
         }


     // Restore original post data.
     wp_reset_postdata();
    ?>
    </section>
<?php get_footer(); ?>
