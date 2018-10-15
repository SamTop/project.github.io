<?php get_header(); ?>
  <!-- Main Photo -->

   <section>
    <div id="parallax-panel">
		<div id="parallax-image-music" data-parallax data-speed="0.50" data-direction="up" style="background-image: url('/wp-content/themes/mysite/images/wallpaper.jpg'); transform: translate3d(0px, -10px, 0px);"></div>
    </div>
   </section>

	<main>
      <div class="container pt-3 position bg-primary">
         <div class="text d-flex justify-content-center align-items-center category-text">
           <p class="text-light">Category</p>
         </div>
         
         <section>
          <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12 px-4">
          <div class="row">

			<?php
            // WP_Query arguments
              $args = array ( 'post_type'  => array( 'mus_cat' ) );
            
              // The Query
              $wallpaper = new WP_Query( $args );
            
              // The Loop
              if ( $wallpaper->have_posts() ) {
                while ( $wallpaper->have_posts() ) {
                  $wallpaper->the_post();
                  // do something?>
                  <!-- Card Start -->
              <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6 pb-3">
                <div class="column">
                  <!-- Post-->
                  <div class="post-module">
                    <!-- Thumbnail-->
                    <div class="thumbnail">
                      <a href="<?php the_permalink(); ?>">
                        <?php the_post_thumbnail(); ?>
                      </a>
                    </div>
                    <!-- Post Content-->
                    <div class="post-content">
                      <h1 class="title"><?php the_title(); ?></h1>
                      <div class="post-meta">
                        <a href="<?php the_permalink(); ?>" class="btn w-100">Listen Now</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Card End -->
            
                      <?php
                }
              }
            
              // Restore original Post Data
              wp_reset_postdata();
            ?>
              
              
              <!-- Pagination -->

                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <?php project_pagination(); ?>
                </div>

                <!-- Pagination End -->

            </div>
        <!-- Card Col -->

        </div>
              
  </div>
  </section>
          
          <!-- HR -->
          <div class="row">
             <hr class="footer-hr ">
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
      };
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
    </script> -->