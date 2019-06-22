<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package antiquewatchco
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<meta author="Emmanuel Porfirio | Omnigecko Solutions">
	<link rel="stylesheet" href="https://use.typekit.net/xou8ckw.css">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="page" class="site">
	<span id="menu-icon">
		<img src='<?php echo get_template_directory_uri()."/img/menu-greenx512.png" ?>' alt="Menu Icon Image" />
	</span>
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'antiquewatchco' ); ?></a>
	<header id="masthead" class="site-header">
		<div class="site-branding">
			<?php the_custom_logo(); ?>
			<div class='header-text'>
				<h3>Antique watch repair sales, and restoration for over 35 years.</h3>
				<img src="<?php echo get_template_directory_uri().'/img/header-x882x42.png'; ?>" width="100%" height="auto"/>
				<p>
					The Antique Watch Company specializes in the restoration of "Can't be fixed" and complicated antique pocket
					watches and vintage wrist watches including Hamilton, Elgin, Illinois, Omega, Longines, Patek philippe, Rolex,
					and Vagheron Constantin, just to name a few. All work is guaranteed, and estimates are given free of charge.
				</p>
			</div>
		</div><!-- .site-branding -->
		<nav id="site-navigation" class="main-navigation">
			<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
			) );
			?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
	<div id="content" class="site-content">
