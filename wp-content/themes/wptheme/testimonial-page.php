<?php
/**
 * Template Name: Testimonial-Page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package wptheme
 */

get_header();
?>

<div class="inner_banner">
	<div class="container">
		<h1 class="light page-title"><?php echo the_title();?></h1>
	</div>
</div>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
<div class="container">
	<div class="row">
		<div class="col-md-8">
		
<div class="testimonials pb-0 pt-0" style="box-shadow: inherit;">    

<div class="testimonial">
<?php
  $args = array(
  'posts_per_page' => 6,
    'post_type' => 'testimonial',
    'post_status' => 'publish',
  'orderby'       => 'menu_order',
    'order'         => 'ASC'

);
$ourteam = get_posts($args);
foreach( $ourteam as $team ) {

 ?>  
<div class="testimonial_list">
    <div class="iconwrap pl-0 pr-0">
<h4 class="icon_title">
<div class="test_rating">
<?php  
$allrating = get_post_meta($team->ID,'wpcf-testimonial-rating',true); 

$ratings = 1; 

while($ratings <= $allrating) {
    $rest = $allrating - $ratings;
    if($ratings)
    {
    ?>
    <i class="fa fa-star"></i>
    <?php } else{ ?>
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
    <?php }

     $ratings++;
} 


?>


        
    </div>
<?php echo get_the_title($team->ID ); ?></h4>    
<div class="icon_content"><?php echo apply_filters('the_content',get_post_field('post_content',$team->ID));?></div>     
     
</div> 
</div> 
<?php } ?>  
   

</div>


</div>

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
