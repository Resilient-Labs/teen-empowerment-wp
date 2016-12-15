<?php
/**
* The template for displaying all single posts.
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
*
* @package Teen_Empowerment
*/


get_header(); ?>
<section class="wrapper flexbox">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="blog-insert-content">
				<?php
				while ( have_posts() ) : the_post();
				//shows content withoutout images
				echo remove_img_from_content();
			endwhile;//end while loop
			//restore original post
			wp_reset_postdata();
			//get_template_part( 'template-parts/content', get_post_format() );

			//the_post_navigation();
			?>
		</div>
		<div class="blog-insert-images">
			<?php
			while ( have_posts() ) : the_post();
			$szPostContent = $post->post_content;
			$szSearchPattern = '~<img [^\>]*\ />~';

			// Run preg_match_all to grab all the images and save the results in $aPics
			preg_match_all( $szSearchPattern, $szPostContent, $aPics );

			// Check to see if we have at least 1 image
			$iNumberOfPics = count($aPics[0]);

			if ( $iNumberOfPics > 0 ) {
				// Now here you would do whatever you need to do with the images
				// For this example the images are just displayed
				for ( $i=0; $i < $iNumberOfPics ; $i++ ) {
					echo $aPics[0][$i];
				};
			};
		endwhile;//end while loop
		//restore original post
		wp_reset_postdata();
		?>
	</div>

</main><!-- #main -->
</div><!-- #primary -->
</section>
<?php
get_footer();
?>
