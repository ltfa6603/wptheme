<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wptheme
 */

// if ( ! is_active_sidebar( 'sidebar-1' ) ) {
// 	return;
// }
?>

<aside id="secondary" class="widget-area">
	<?php //dynamic_sidebar( 'sidebar-1' ); ?>


		<div class="mb-5 sidebar-form">
			
<div class="footer_form">
<h3 class="form_title">Quick Quote</h3>
<?php echo do_shortcode('[contact-form-7 id="200" title="Book an Appointment"]');?>
</div>

		</div>


</aside><!-- #secondary -->


