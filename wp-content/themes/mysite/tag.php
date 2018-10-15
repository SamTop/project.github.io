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
              
                <!-- <?php the_post_thumbnail(); ?> -->
                <?php global $wp;
                      $hurl = home_url( $wp->request );
                      $modurl = explode("http://project.loc/tag/", $hurl);
                      $realtag = $modurl[1];
                      $args = array(
                      'tag' => "$realtag",
                      'post_type'  => array( 'wall' )
                      );
                      $args_watch = array(
                      'tag' => "$realtag",
                      'post_type'  => 'post'
                      );

                      $wallpaper = new WP_Query( $args );
                      $watch = new WP_Query( $args_watch );
                      // The Loop
                      if ( $wallpaper->have_posts() ) { 
                        echo '<div class="card-columns mx-3">';
                        while ( $wallpaper->have_posts() ) {
                          $wallpaper->the_post();
                          // do something?>
                          <div class="card card-pin item">
                                <a href="<?php the_permalink(); ?>">
                                  <?php the_post_thumbnail(); ?>
                                  <div class="overlay"></div>
                                </a>
                          </div>
                          
            
                    <?php
                        }
                        echo "</div>";

                      } else if ( $watch->have_posts() ) {
                          while ( $watch->have_posts() ) {
                            $watch->the_post();
                            // do something
                            ?>
                          <div id="post-<?php the_ID(); ?>" <?php post_class('col-xl-4 col-lg-6 col-md-6 col-sm-6 col-6 pb-3'); ?> >
                            <div class="column">
                              <!-- Post-->
                              <div class="post-module">
                                <!-- Thumbnail-->
                                <div class="thumbnail">
                                 <div class="views">
                                    <p><i class="far fa-eye"></i> 6,812 </p>
                                  </div>
                                  
                                  
                                  
                                  <a href="<?php the_permalink(); ?>">
                                     <?php the_post_thumbnail()?>
                                     <img src="<?php $src = get_post_custom_values('Image URI'); echo "$src[0]"?>" alt=""> 

                                  </a>
                                </div>
                                <!-- Post Content-->
                                <div class="post-content">
                                  <h1 class="title"><?php the_title(); ?></h1>
                                  <div class="post-meta">
                                    <a href="<?php the_permalink(); ?>" class="btn w-100">Watch</a>

                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>                            


                          <?php }
                        }
                    
                      // Restore original Post Data
                    wp_reset_postdata();
                    ?>
                

            <!-- Here -->
            <!-- <?php
            // WP_Query arguments
              $args = array ( 'post_type'  => array( 'wall' ) );
            
              // The Query
              $wallpaper = new WP_Query( $args );
            
              // The Loop
              if ( $wallpaper->have_posts() ) {
                while ( $wallpaper->have_posts() ) {
                  $wallpaper->the_post();
                  // do something?>
                  <div class="card card-pin item">
                        <a href="<?php the_permalink(); ?>">
                          <?php the_post_thumbnail(); ?>
                          <div class="overlay"></div>
                        </a>
                  </div>
            
                      <?php
                }
              }
            
              // Restore original Post Data
              wp_reset_postdata();
            ?> -->





              <!-- <?php if ( have_posts() ): ?>                        
               <?php while ( have_posts() ): the_post(); ?>
                 
                   <div class="card card-pin item">
                          <a href="<?php the_permalink(); ?>">
                             <?php the_post_thumbnail(); ?>
                            <div class="overlay"></div>
                          </a>
                      </div>
                <?php endwhile; ?>
              <?php endif; ?> -->
         

               
               <!-- <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <?php project_pagination(); ?>
                    
                </div> -->
            </div>
        <!-- Card Col -->
        

        </div>
        <!-- Sidebar here!!!-->
        <!-- <?php ; ?> -->
        <!-- Main Row -->
        <!-- <div class="col-lg-3 col-md-3 col-sm-3 col-12">
                      <div class="d-flex align-items-center justify-content-center category-text">
                         <p class="text-light">Category</p>
                       </div>
                                     
                       <div class="wallpaper-category">
                            <?php
            // WP_Query arguments
              $args = array ( 'post_type'  => array( 'wall' ) );
        
              // The Query
              
              // The Wallpaper Sidebar 
                $tagslist = array ();
                $wallpaper = new WP_Query( $args );
                if ( $wallpaper->have_posts() ) {
                  while ( $wallpaper->have_posts() ) {
                    $wallpaper->the_post();
                    // do something
                    $tags = get_the_tags();
                    
                    if ($tags) {
                      foreach($tags as $tag) {
                        if (in_array("$tag->name", $tagslist)) {
                          continue;
                        }
                        echo "<a href='http://project.loc/tag/".$tag->name."' class='wallpaper-item'><div class='wallpaper-div'>";
                        echo $tag->name;
                        echo "</div></a>";
                        $tagslist[] = $tag->name;                     
                      }
                    }
                  }
                }
              
        
              // Restore original Post Data
              wp_reset_postdata();
            
            ?>
                      </div>  
                      
                         
                   <div class="ad my-3">
                     <a href="#">
                         <img src="images/Let-Us-Place-Your-Ad.jpg" class="mx-auto d-block img-fluid rounded" alt="">
                     </a
                   </div> -->
                   
                         
                   </div>
    
      </div>
      <!-- Main Container -->


      <!-- HR -->
      <!-- <div class="row">
         <hr class="footer-hr ">
      </div> -->
<!--       <div class="col-lg-12 col-md-12 col-sm-12 col-12">
              <?php project_pagination(); ?>
              
          </div> -->
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
    </script> -->