<?php
/*
Template Name: Category
*/
?>
<?php get_header(); ?>
 
 

 
 
  <div class="row">
    <div class="large-9 columns">
       <?php
  $args = array( 'posts_per_page' => 25 );

$myposts = get_posts( $args );
foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
	<h3>
		<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
	</h3>
	<p class="author">Posted by: <?php the_author(); ?> | <?php the_date(); ?></p>
	<div>
	<div class="exceprt">
	<p>
	<?php  echo get_the_post_thumbnail($current_id,  array(338,224)); ?>
	
	<?php $excerpt = get_the_excerpt();
	echo($excerpt);
	 ?>
	</p>
	</div>
	</div>
	<?php
	$current_id = get_the_ID();
	
?>
 <hr/>
<?php endforeach; 
wp_reset_postdata();?>
	
    </div>
    <div class="large-3 columns">

    
   <?php  dynamic_sidebar( 'right_sidebar' ); ?>
    </div>

 
 
 
 
 <?php include('includes/newsletter.php'); ?>
  
 
<?php get_footer(); ?>