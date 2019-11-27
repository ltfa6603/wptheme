<?php
/**
 * Template Name: Service-Page
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>

<div class="inner_banner">
	<div class="container">
		<h1 class="light page-title"><?php echo the_title();?></h1>
	</div>
</div>

<div class="services" style="background: #f4f4f4">    
    
<div class="container">

<div id="" class="row">
  
<?php
  $args = array(
  'posts_per_page' => -1,
    'post_type' => 'service-post',
    'post_status' => 'publish',
  'orderby'       => 'menu_order',
    'order'         => 'ASC'

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

</div>
</div>    
</div>


<?php
//get_sidebar();
get_footer();
