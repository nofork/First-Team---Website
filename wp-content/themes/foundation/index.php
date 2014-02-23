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
 
 </div>
 
 </div>
 
 
  <div class="row">
    <div class="large-8 columns">
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
         
    <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
                 
    <?php the_content(); ?>
     
    <p><?php the_time('F j, Y'); ?> at <?php the_time('g:i a'); ?> | <?php the_category(', '); ?> | <?php comments_number('No comment', '1 comment', '% comments'); ?></p>
     
    <?php endwhile; else: ?>
     
    <h2>Woops...</h2>
     
    <p>Sorry, no posts we're found.</p>
     
    <?php endif; ?>
    </div>
    <div class="large-4 columns">
    
    <?php if( get_field( "sidebar-testimonial" ) ): ?>
	  <a href=" <?php the_field( "testimonial_link" ); ?>"><img src="<?php the_field('sidebar-testimonial'); ?>" alt="" /></a>
	  <br/><br/>
<?php endif;?>
	  <?php if( get_field( "sidebar_image" ) ): ?>
	  <a href=" <?php the_field( "image_link" ); ?>"><img src="<?php the_field('sidebar_image'); ?>" alt="" /></a>
<?php endif;?>



    
   <?php  dynamic_sidebar( 'right_sidebar' ); ?>
    </div>

 
 
 
 
 <?php include('includes/newsletter.php'); ?>
  
 
<?php get_footer(); ?>