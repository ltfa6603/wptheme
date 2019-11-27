<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
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
		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );

			the_post_navigation();

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
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
