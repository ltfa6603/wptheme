<?php
/**
 * Template Name: Front-page
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>


<div class="home_slider">
<?php echo do_shortcode('[metaslider id="35"]'); ?>    

<div class="banner_overlay">
<div class="banner_content">
<div class="banner_form">
<?php echo do_shortcode('[contact-form-7 id="34" title="Book an Appointment"]');?>
</div>
</div>
</div>
   
</div>

<div class="infostrip">
    Melbourne's Cleaning and Restoration Services - 8 Malibu Circuit, Carrum Downs VIC 3201
</div>


<div class="content_section logostrip">
    <div class="container">
        <div class="d-flex justify-content-center logoes">
            <span><img src="<?php echo get_template_directory_uri();?>/images/logo1.jpg" alt=""></span>
            <span><img src="<?php echo get_template_directory_uri();?>/images/logo2.jpg" alt=""></span>
            <span><img src="<?php echo get_template_directory_uri();?>/images/logo3.jpg" alt=""></span>
            <span><img src="<?php echo get_template_directory_uri();?>/images/logo4.jpg" alt=""></span>
            <span><img src="<?php echo get_template_directory_uri();?>/images/logo5.jpg" alt=""></span>
            <span><img src="<?php echo get_template_directory_uri();?>/images/logo6.jpg" alt=""></span>
        </div>
    </div>
</div>

<div class="content_section weltxt">
<div class="container">
    <div class="row">
           <div class="col-lg-6">
            <div class="imgwrap"><?php echo get_the_post_thumbnail(get_the_ID());?></div>
        </div>

        <div class="col-lg-6">
            <div class="weltxtwrap">
                <h2 class="page-title semibold"><?php the_title();?></h2>
                
                <?php echo apply_filters('the_content', get_post_field('post_content',get_the_ID())); ?>

            </div>
        </div>
     
    </div>
</div>
</div>


<div class="services homeservie">    
    
<div class="container">
   
<h2 class="text-center mb-5 page-title light">OUR SERVICES</h2>

<div class="row">
  
<?php
  $args = array(
  'posts_per_page' => -1,
    'post_type' => 'service-post',
    'post_status' => 'publish',
  'orderby'       => 'date',
    'order'         => 'DESC'

);
$ourteam = get_posts($args);
foreach( $ourteam as $team ) {

 ?>  

<div class="col-lg-4 mb-4">
<div class="iconwrap">
<div class="sicon"><a href="<?php echo get_permalink($team->ID); ?>"><?php echo get_the_post_thumbnail($team->ID); ?></a></div>
<h4 class="icon_title"><a href="<?php echo get_permalink($team->ID); ?>"><?php echo get_the_title($team->ID); ?></a></h4>  
<div class="icon_content"><?php echo apply_filters('the_content',get_post_field('post_excerpt',$team->ID));?></div>    
<div class="servicebtns"><a href="<?php echo get_permalink($team->ID); ?>" class="sbtns">More</a></div> 
</div> 
</div> 

<?php } ?>  


<div class="col-lg-4 mb-4">
    <div class="d-flex justify-content-center align-items-center morebtnbox">
    <a href="#" class="btn btn-lg morebnts">More Services</a></div>
</div>
</div>
</div>    
</div>



<div class="content_section our_gallery">
    <div class="container">
        <h3 class="text-center uppercase medium page-title">Our Gallery</h3>
        <h5 class="text-center mb-5 gray_clr normal">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium 
doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore </h5>


<?php dynamic_sidebar('footer-gallery');?>


    </div>
</div>



<script type="text/javascript">
jQuery(document).ready(function(){
/*    jQuery('#services').owlCarousel({
    loop:true,
    autoplay:false,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:4
        }
    }
})*/
});


</script>



<?php
get_footer();
