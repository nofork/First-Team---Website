<?php
/*
Template Name: Homepage
*/
?>

<?php get_header(); ?>

<!--Start ORBIT slider -->
<div class="row">
    <div class="large-12 columns">
<?php if( have_rows('slideshow_images') ): ?>
 
    <ul class="example-orbit" data-orbit data-options="animation_speed:1500; pause_on_hover: false">
 
    <?php while( have_rows('slideshow_images') ): the_row(); ?>
 
        <li>
	<img src="<?php the_sub_field('Image_slideshow'); ?>" alt="" />


        
        </li>
        
              
    <?php endwhile; ?>
 
    </ul>
 
<?php endif; ?>
    </div>
</div>
 

 
  <div class="row">
    <div class="large-12 columns">
    <hr/>
     </div>
  </div>
  
  <div class="row">
    
      
      <?php if( have_rows('three_blocks_home') ): ?>
 
   
 
    <?php while( have_rows('three_blocks_home') ): the_row(); ?>
 
        <div class="large-4 columns">
			<img src="<?php the_sub_field('threeb_image'); ?>" alt="" />
			<h3><?php the_sub_field('threeb_heading'); ?></h3>
			<p><?php the_sub_field('threeb_content'); ?></p>


        
        </div>
        
              
    <?php endwhile; ?>
 
    </ul>
 
<?php endif; ?>
      
      
      
        
    </div>    

 <?php include('includes/newsletter.php'); ?>
 
<?php get_footer(); ?>