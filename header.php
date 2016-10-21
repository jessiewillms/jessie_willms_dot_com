<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package jessie_willms_dot_com
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link href="https://fonts.googleapis.com/css?family=Lato:300,300i,700,700i" rel="stylesheet">
<script src="https://use.fontawesome.com/9194124587.js"></script>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'jessie_willms_dot_com' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<nav id="site-navigation" class="container--header max-width main-navigation" role="navigation">
			
			<div class="grid__third wrapper__logo-wrap">
				<?php 
					$attachment_id = get_field('site_logo','option');
					$size = "full";
					$image = wp_get_attachment_image_src( $attachment_id, $size );
				?>
				
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php echo $attachment_id; ?>" alt="Logo for JessieWill.com" class="image__logo"></a>
			</div>

			<div class="grid__two-third">
				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'jessie_willms_dot_com' ); ?></button>
				<?php
					wp_nav_menu( array(
						'theme_location' => 'primary',
						'menu_class'     => 'simple-nav',
					 ) );
				?>
				
			</div>

		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">