<!-- Footer -->
  
  <footer class="row">
    <div class="large-12 columns">
      <hr />
      <div class="row">
        <div class="large-6 columns">
          <p>&copy; Copyright no one at all. Go to town.</p>
        </div>
       
         
           <?php wp_nav_menu( array( 'theme_location' => 'footer-menu', 'container_class' => 'large-6 columns', 'items_wrap' => '<ul id="%1$s" class="inline-list right">%3$s</ul>' ) ); ?>             
          <div class="large-6 columns">

        </div>
      </div>
    </div> 
  </footer>
   <?php wp_footer(); ?>
    <script>
      $(document).foundation();
    </script>
   
  </body>
</html>
