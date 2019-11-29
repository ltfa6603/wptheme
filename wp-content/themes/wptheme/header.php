<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wptheme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700&display=swap" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'wptheme' ); ?></a>

<header id="masthead" class="site-header">
<?php if ( is_active_sidebar( 'header-left' ) || is_active_sidebar( 'header-right' ) ) : ?>
	<div class="top_strip">
		<div class="container">
	<div class="row align-items-center">
		<div class="col-lg-4"><?php dynamic_sidebar( 'header-left' ); ?></div>
		<div class="col-lg-8"><?php dynamic_sidebar( 'header-right' ); ?></div>
	</div>
					 		

					 </div>
					 </div>
					 <?php endif; ?>
		<div class="site-branding">
			<div class="container">
				<div class="row align-items-center">


			<div class="col-lg-3">
			<div class="logo">
			<?php the_custom_logo(); ?>
			</div>
			</div>

		   <div class="col-lg-9">
			   <div class="header_topright">
<nav id="site-navigation" class="main-navigation">
	<?php
		wp_nav_menu( array(
			'theme_location' => 'menu-1',
			'menu_id'        => 'primary-menu',
		) );
	?>


</nav><!-- #site-navigation -->

<?php get_search_form();?>
					
			               </div>

			</div>

</div>
			</div>

		</div><!-- .site-branding -->

	</header><!-- #masthead -->
	<div id="content" class="site-content">
