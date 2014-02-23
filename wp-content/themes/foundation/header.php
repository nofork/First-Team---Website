<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
   <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
   <html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes() ?>>
	<head profile="http://gmpg.org/xfn/11">
	<title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen,projection" />
<!--[if lt IE 9]>
<link rel="stylesheet" href="/css/ie.css">
<![endif]-->

<!--IE Fix for HTML5 Tags-->
<!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->


<?php wp_head(); ?>
  </head>
  <body>
        <div class="row">
    <div class="large-4 columns">
      <h1><img src="<?php bloginfo('template_directory'); ?>/images/logo.jpg" /></h1>
    </div>
   <div class="large-8 columns ">
    <br/>
    <div style="float:right">

    <a href="http://www.facebook.com/zurb" class="medium fc-webicon twitter">Follow us on Twitter</a>

    <a href="http://www.facebook.com/zurb" class="medium fc-webicon linkedin">Join our Linkedin network</a>
     </div>
    </div>

   </div>
  


 
  <div class="row">
  	<div class="large-12 columns">
 
  	
  	
  	<nav class="top-bar" data-topbar>

  <ul class="title-area">
    <li class="name">
      <h1><a href="/">Home</a></h1>
    </li>
    <li class="toggle-topbar menu-icon"><a href="#">Menu</a></li>
  </ul>
	  	<section class="top-bar-section">
  
    
           <?php 
   
           
           wp_nav_menu( array( 'theme_location' => 'header-menu') ); ?>  
    
    </section>
	</nav>
  	 	

  	</div>
  </div>
  
  <div class="row">
  <br/>
  <div class="large-12 columns">
    <ul class="breadcrumbs">
	<?php if(function_exists('bcn_display_list'))
	{
		bcn_display_list();
	}?>
</ul>
  </div>
  </div>
  
  <!-- End Header and Nav -->
