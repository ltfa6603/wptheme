<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package wptheme
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
<div class="container">
	<div class="row">
	<div class="col-lg-8">
		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
				the_archive_title( '<h1 class="page-title">', '</h1>' );
				the_archive_description( '<div class="archive-description">', '</div>' );
				?>
			</header><!-- .page-header -->

			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_type() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>
		</div>

<div class="col-lg-4">
	<aside id="secondary" class="widget-area">
	<?php //dynamic_sidebar( 'sidebar-1' ); ?>


		<div class="mb-5 sidebar-form">
			
<div class="footer_form">
<h3 class="form_title">Quick Quote</h3>
<?php echo do_shortcode('[contact-form-7 id="200" title="Book an Appointment"]');?>
</div>

		</div>


</aside><!-- #secondary -->
</div>
</div>

</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
//get_sidebar();
get_footer();
