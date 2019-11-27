<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package european_prestige
 */

get_header();
?>

<div class="inner_banner" style="background-image: url(<?php echo get_template_directory_uri();?>/images/service-bg.jpg)">
	<div class="container">
		<h1 class="light page-title"><?php echo the_title();?></h1>
	</div>
</div>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
<div class="container">
	<div class="row">
	<div class="col-lg-8">
		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );

			//the_post_navigation();

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				//comments_template();
			endif;

		endwhile; // End of the loop.
		?>

</div>

<div class="col-md-4">
			<div class="sidebarform">
			<?php get_sidebar();?>
			</div>

		</div>

</div>

</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
//get_sidebar();
get_footer();
