<?php
/**
 *Template Name: Contact Page
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
    <section class="wrapper flexbox">
      <?php
      //Set current page category
      $category = get_category(get_query_var('cat'), false);
      $cat_id = $category->cat_ID;
      // Query for all of the posts that have same category as the current page
       $args = array(
       // Arguments for your query.
       'category_name' => 'Contact'
       );

      // Custom query.
           $query = new WP_Query($args);
           // Check that we have query results.
             if ( $query->have_posts() ) {
               // Start looping over the query results.
               while ($query->have_posts()) {
                 $query->the_post();
                   if (has_tag('contact-post')) {
                     echo '<div class= "contact-content">';
                     echo the_content();
                     echo '</div>';
                   }
                 }
               }

           // Restore original post data.
           wp_reset_postdata();
          ?>
        </section>
  <?php get_footer(); ?>
