<?php get_header(); ?>
  <!-- Main Photo -->

   <section>
    <div id="parallax-panel">
		<div id="parallax-image" data-parallax data-speed="0.50" data-direction="up" style="background-image:url('/wp-content/themes/mysite/images/wallpaper.jpg');"></div>
    </div>
   </section>


  <main>
    <div class="container position bg-primary">
      <div class="row">
        <div class="col-lg-9 col-md-9 col-sm-9 col-12 px-3 pt-3">
          <div class="row">
          	 <div class="card-columns mx-3">

			
            <!-- Here -->
              <?php if ( have_posts() ): ?>                        
               <?php while ( have_posts() ): the_post(); ?>
                 
                   <div class="card card-pin item">
                          <a href="<?php the_permalink(); ?>">
                             <?php the_post_thumbnail(); ?>
                            <div class="overlay"></div>
                          </a>
                      </div>
                <?php endwhile; ?>
              <?php endif; ?>
         

			         </div>
               <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <?php project_pagination(); ?>
                    
                </div>
            </div>
        <!-- Card Col -->
        

        </div>
        <!-- Sidebar here!!!-->
        <!-- <?php get_sidebar(); ?> -->
        <!-- Main Row -->
    
      </div>
      <!-- Main Container -->

      <!-- HR -->
      <div class="row">
         <hr class="footer-hr ">
      </div>
      <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <?php project_pagination(); ?>
                    
                </div>
    </div>

  </main>
<?php get_footer(); ?>



<!-- <script>
    jQuery.noConflict();
    jQuery('[data-parallax]').jQueryParallax();
  </script>

    <script>
      jQueryfunction() {
      jQuery('audio').audioPlayer();
      });
    </script>

    PopUp Notification
    <script type="text/javascript">
          var delay_popup = 10000;
          var msg_pop = document.getElementById('msg_pop'); setTimeout("document.getElementById('msg_pop').style.display='block';document.getElementById('msg_pop').className += 'fadeIn';", delay_popup);
    </script>
    
    Tabs
    
    <script type="text/javascript">
    jQuery(document).ready(function() {
      'use strict';
      jQuery(window).on('ariaTabs.initialised', function(event, element) {
        console.log(element + 'init');
      });
      jQuery('.tab-group').ariaTabs({
        contentRole: ['document', 'application', 'document'],
      });
      jQuery(window).on('ariaTabs.select', function(event, element, index) {
        console.log(index);
      });
      jQuery(window).on('ariaTabs.deselect', function(event, element, index) {
        console.log(index);
      });
    });
  </script>
  
  Description
  
  <script type="text/javascript">
    jQuery(function() {
      jQuery('.js-description_readmore').moreLines({
        linecount: 3, 
        baseclass: 'b-description',
        basejsclass: 'js-description',
        classspecific: '_readmore',    
        buttontxtmore: "Read More",               
        buttontxtless: "Less",
        animationspeed: 250 
      });
    });
  </script>
  More Wallpaper
  <script type="text/javascript">
    jQuery(function() {
      jQuery('.js-description_readmore_wallpaper').moreLines({
        linecount: 34, 
        baseclass: 'b-description',
        basejsclass: 'js-description',
        classspecific: '_readmore',    
        buttontxtmore: "More Category",               
        buttontxtless: "Less",
        animationspeed: 250 
      });
    });
  </script>
  
  More Popular
  <script type="text/javascript">
    jQuery(function() {
      jQuery('.js-description_readmore_popular').moreLines({
        linecount: 8, 
        baseclass: 'b-description',
        basejsclass: 'js-description',
        classspecific: '_readmore',    
        buttontxtmore: "More Popular",               
        buttontxtless: "Less",
        animationspeed: 250 
      });
    });
  </script>
  
  
  
    <script>
      jQuery(function() {
        jQuery(".parallux").parallux(
          {
            fullHeight: false,
            onMobile: 'fixed'
          }
        );
      });
    </script>
 -->