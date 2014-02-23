<?php
/*
Template Name: Blog
*/
?>

<?php get_header(); ?>

<?php
 if ( has_post_thumbnail() ) {
 ?>
 <div class="row">
 <div class="large-12 columns">
 <?php
	the_post_thumbnail();
	?>
	<br/><br/>
 </div>
 
 </div>	
	<?php
} 
?>
 

 
  <div class="row">
    <div class="large-12 columns">
    <hr/>
     </div>
  </div>
  
  <div class="row">
    <div class="large-9 columns blogrow">
    <?php
  $args = array( 'posts_per_page' => 5 );

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
	
</div><!--caption1-->
    
    
    
     <div class="large-3 columns">

   <?php  dynamic_sidebar( 'right_sidebar' ); ?>
    </div>

</div> 
    
        
   </div>    

 <?php include('includes/newsletter.php'); ?>
 
<?php get_footer(); ?>