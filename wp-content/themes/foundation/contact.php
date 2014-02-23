<?php
/*
Template Name: Contact
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
 
 </div>
 
 </div>
 
 
  <div class="row">
    <div class="large-9 columns">
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
         
                 
    <?php the_content(); ?>
     
    <p><?php the_time('F j, Y'); ?> at <?php the_time('g:i a'); ?> | <?php the_category(', '); ?> | <?php comments_number('No comment', '1 comment', '% comments'); ?></p>
     
    <?php endwhile; else: ?>
     
    <h2>Woops...</h2>
     
    <p>Sorry, no posts we're found.</p>
     
    <?php endif; ?>
    </div>
    <div class="large-3 columns">
    
    <?php if( get_field( "sidebar-testimonial" ) ): ?>
	  <a href=" <?php the_field( "testimonial_link" ); ?>" target="_blank"><img src="<?php the_field('sidebar-testimonial'); ?>" alt="" /></a>
	  <br/><br/>
<?php endif;?>
	  <?php if( get_field( "sidebar_image" ) ): ?>
	  <a href=" <?php the_field( "image_link" ); ?>"><img src="<?php the_field('sidebar_image'); ?>" alt="" /></a>
<?php endif;?>
<br/><br/>
	<p>6 Park Brook Road,<br/>
	Macclesfield,<br/>
	Cheshire,SK11 8QH.<br/>
	T:01625 434803</p>


    
   <?php  dynamic_sidebar( 'right_sidebar' ); ?>
    </div>

 
 
 
 
 <?php include('includes/newsletter.php'); ?>
  
 
<?php get_footer(); ?>