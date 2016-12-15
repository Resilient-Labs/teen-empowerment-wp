<?php
/**
 *Template Name: Consulting Page
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
    'category_name' => 'Consulting'
  );
  // Custom query.
  $query = new WP_Query($args);
  // Check that we have query results.
  if ( $query->have_posts() ) {
    // Start looping over the query results.
    while ($query->have_posts()) {
      $query->the_post();
      if (has_tag('consulting-post')) {
        echo '<article class= "consulting-post">';
        echo '<h2>'.get_the_title().'</h2>';
        echo '<div class="consulting-content">';
        echo the_content();
        echo '</div>';
        echo '</article>';
      }
    }
  }






      wp_reset_postdata();
      ?>
    </section>
    <?php get_footer(); ?>
