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
        <div class="col-lg-4 col-md-12"><?php dynamic_sidebar('footer-1');?></div>    
        <div class="col-lg-4 col-md-12"><?php dynamic_sidebar('footer-2');?></div>    
        <div class="col-lg-4 col-md-12"><?php dynamic_sidebar('footer-3');?></div>    
        </div>    
        </div>
        </div>
        
        <div class="site-info">
        	<div class="container">
                        <div class="site-infowrap">
        	<div class="row align-items-center">
        		<div class="col-lg-6">
                                Copyright&copy; 2019 |  Disability Law Center , All Right Reserved.	
        		</div>

                        <div class="col-lg-6"><div class="footerlogoes"><img src="<?php echo get_template_directory_uri();?>/images/footer-logoes.png" alt=""></div></div>

        	</div>
</div>
        	</div>
        
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
