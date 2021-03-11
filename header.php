<?php
/**
 * The header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> <?php understrap_body_attributes(); ?>>
<?php do_action( 'wp_body_open' ); ?>
<div class="site" id="page">
	<!-- ******************* Top Navbar Area ******************* -->
	<div class="top-nav ">
			<div class="contact-info">
				<a href=""><i class="fa fa-map"></i>Sofia, Address 16</a>
				<a href="tel: +359 888 888 888"><i class="fa fa-phone"></i>+359 888 888 888</a>
			</div>
		</div>

	<!-- ******************* The Navbar Area ******************* -->
	<div id="wrapper-navbar">
		

		<a class="skip-link sr-only sr-only-focusable" href="#content"><?php esc_html_e( 'Skip to content', 'understrap' ); ?></a>
		
		<nav id="main-nav" class="navbar navbar-expand-lg" aria-labelledby="main-nav-label">
		<!-- Your site title as branding in the menu -->
			<?php if ( ! has_custom_logo() ) { ?>

				<?php if ( is_front_page() && is_home() ) : ?>
				
					<h1 class="navbar-brand mb-0"><a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" itemprop="url"><?php bloginfo( 'name' ); ?></a></h1>
				
				<?php else : ?>
				
					<a class="navbar-brand" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" itemprop="url"><?php bloginfo( 'name' ); ?></a>
				
				<?php endif; ?>
				
				<?php
				} else {
				the_custom_logo();
				}
				?>
		<!-- end custom logo -->
			
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'understrap' ); ?>">
					<span class="navbar-toggler-icon">
						<div class="bar"></div>
						<div class="bar"></div>
						<div class="bar"></div>
					</span>
				</button>

				<!-- The WordPress Menu goes here -->
				<?php
				wp_nav_menu(
					array(
						'theme_location'  => 'primary',
						'container_class' => 'collapse navbar-collapse',
						'container_id'    => 'navbarNavDropdown',
						'menu_class'      => 'navbar-nav ml-auto',
						'fallback_cb'     => '',
						'menu_id'         => 'main-menu',
						'depth'           => 2,
						'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
					)
				);
				?>
			

			<div class="widget-area">
					<div class="sarch-container">
						<?php dynamic_sidebar("statichero"); ?>
					</div>
			</div>
		</nav><!-- .site-navigation -->

	</div><!-- #wrapper-navbar end -->
