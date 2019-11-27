<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wptheme
 */

?>

<section class="content_section client_testimonial">
<h3 class="text-center semibold page-title">Testimonials</h3>    
<div class="container">
        <?php echo do_shortcode('[testimonial_rotator id=203]');?>
</div>
</section>


	</div><!-- #content -->

<footer id="colophon" class="site-footer">
		
        <div class="footer-top">
        <div class="container">
        <div class="row">
        <div class="col-lg-3 col-md-6"><?php dynamic_sidebar('footer-1');?></div>    
        <div class="col-lg-2 col-md-6"><?php dynamic_sidebar('footer-2');?></div>    
        <div class="col-lg-3 col-md-6"><?php dynamic_sidebar('footer-3');?></div>    
        <div class="col-lg-4 col-md-6"><?php dynamic_sidebar('footer-4');?></div>    
        </div>    
        </div>
        </div>
        
        <div class="site-info">
        	<div class="container">
        	<div class="row">
        		<div class="col-lg-12">
        			Copyright &copy; <?php echo date(Y);?> | All rights reserved.  <br><a href="https://www.verveinnovation.com.au/website-design/" target="_blank">Website Design</a>, <a href="https://www.verveinnovation.com.au/seo-services/" target="_blank">SEO Services</a> by Verve Innovation - <a href="https://www.verveinnovation.com.au/" target="_blank">SEO Company Melbourne</a>	
        		</div>

        	</div>
        	</div>
        
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
