<?php
/**
 * The template for displaying all pages.
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

get_header();

?>
<?php
// Query for all of the posts that have a tag of logo
 $args = array(
 // Arguments for your query.
 has_tag('half-post')
 );

// Custom query.

 $query = new WP_Query( "cat=37" );
 // Check that we have query results.
	 if ( $query->have_posts() ) {
		 // Start looping over the query results.
		 while ( $query->have_posts() ) {
			 $query->the_post();
			 echo '<a href="'.home_url().'" >';
			 $img = strip_tags(the_content());
			 echo '</a>';
			 }
		 }

 // Restore original post data.
 wp_reset_postdata();
?>
<?php

get_footer();
