<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Teen_Empowerment
 */

?>

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info container">
		<nav>
			<?php
			$SecondaryMenu = array(
				'menu'=> 'Main Menu',
				'container'       => false,
				'container_class' => false,
				'menu_class' => false,
			);
			wp_nav_menu($SecondaryMenu);
			?>
			</nav>
			<div class="footer-title">
				<h3>CENTER OF TEEN EMPOWERMENT</h3>
				<h5>
				<?php
				$locations = array(
					'menu'=> 'locations',
					'container'       => false,
					'container_class' => false,
					'menu_class' => false,
				);
				wp_nav_menu($locations);
				?></h5>
		</div>
		<div class="social-media">
        <div class="social-media-content">
            <p>&copy;2016 Center of Teen Empowerment</p>
							<?php
							$SocialMedia = array(
								'menu'=> 'Social Media',
								'container'       => false,
								'container_class' => false,
								'menu_class' => false,
							);
							wp_nav_menu($SocialMedia);
							?>
        </div>


</div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
