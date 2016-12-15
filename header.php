<?php
/**
* The header for our theme.
*
* This is the template that displays all of the <head> section and everything up until <div id="content">
*
* @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
*
* @package Teen_Empowerment
*/

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans|Oswald" rel="stylesheet">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'teen-empowerment' ); ?></a>

		<header id="masthead" class="site-header" role="banner">
			<div class="site-branding">
				<div class="hero-banner">
					<div class="overflow-banner">
						<?php
						//getting featured image and setting it as hero image
						$thumb_id = get_post_thumbnail_id();
						$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
						$thumb_url = $thumb_url_array[0];
						if (has_post_thumbnail()) {
							echo the_post_thumbnail('full');
						}
						wp_reset_postdata();
						?>
					</div>
					<div class="hero-navigation">

						<nav class="top-menu">

							 <?php
							// Query for all of the posts that have a tag of logo
								$args = array(
								// Arguments for your query.
								'tag' => 'logo'
								);

							// Custom query.
								$query = new WP_Query( $args );
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
							<a href=""><span class="hamburger">&#9776;</span></a>
							<?php
							$MainMenu = array(
								'menu'=> 'Main Menu',
								'container'       => false,
								'container_class' => false,
								'menu_class' => false,
							);
							wp_nav_menu($MainMenu);
							?>
						</nav>
						<?php if( is_front_page() ):?>
							<div class="home-header-text">
								<div class="home-title">
									<h1>CENTER OF TEEN EMPOWERMENT</h1>
									<h3>EMPOWERING YOUTH-LED SOCIAL CHANGE</h3>
								</div>
							<?php else:
								echo "<div class='main-title'><h2>".get_the_title()."</h2>";
							?>
							<?php endif; ?>
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
					</div> <!-- hero navigation -->

				</div> <!-- hero-banner -->
			</div><!-- .site-branding -->


		</header><!-- #masthead -->

		<div id="content" class="site-content">
