<?php get_header(); ?>
<?php if (have_posts()): 
                                    
                while ( have_posts() ) { the_post(); ?>

<section>
       <div id="parallax-panel-wallpaper">
    <div id="parallax-image-wallpaper" data-parallax data-speed="0.50" data-direction="up" style="background-image:url('/wp-content/themes/mysite/images/wallpaper.jpg');"></div>
  </div>
   </section>
   
   <main>
       <div class="container pt-2 position bg-primary">
        <div class="row">
           <div class="col-lg-9 col-md-9 col-sm-12 col-12 mt-2">
                            <img src="<?php the_post_thumbnail_url(); ?>" style="width:100%;" class="rounded img-fluid image scale-on-hover mb-2">
           </div>
           <div class="col-lg-3 col-md-3 col-sm-12 col-12 mt-2">
               <a href="<?php $zip = get_post_custom_values('ZIP URI'); echo $zip[0] ?>" class="btn btn-success d-block w-100 ubuntu">Download</a> <br>
               <p class="text-center mb-3 share-text text-light">Share</p>
<!-- <?php $zip = get_post_custom_values('Video URI'); echo $zip[0] ?> -->
                <div class="wrapper-icon">
                  <a href="#"><i class="fa fa-3x fa-facebook-square"></i></a>
                  <a href="#"><i class="fa fa-3x fa-twitter-square"></i></a>
                  <a href="#"><i class="fa fa-3x fa-pinterest-square"></i></a>
                  <a href="#"><i class="fa fa-3x fa-snapchat-square"></i></a>
                  <a href="#" id="instagram"><i class="fa fa-3x fa-instagram"></i></a>
                  <a href="#"><i class="fas fa-2x ml-1 fa-link"></i></a>
                </div>
                <p class="text-center my-3 share-text text-light">Tags</p>
                
                <!-- <div class="sub_title-tags d-flex flex-wrap ubuntu">
                    <a href="#"><i class="fas fa-tags"></i> Nature</a>
                    <a href="#"><i class="fas fa-tags"></i> Cars</a>
                    <a href="#"><i class="fas fa-tags"></i> Nature</a>
                    <a href="#"><i class="fas fa-tags"></i> Cars</a>
                    <a href="#"><i class="fas fa-tags"></i> Nature</a>
                    <a href="#"><i class="fas fa-tags"></i> Cars</a>
                    <a href="#"><i class="fas fa-tags"></i> Nature</a>
                    <a href="#"><i class="fas fa-tags"></i> Cars</a>
                    <a href="#"><i class="fas fa-tags"></i> Nature</a>
                </div> -->
                
                <div class="ad my-3">
                  <a href="#">
                      <img src="images/Let-Us-Place-Your-Ad.jpg" class="mx-auto d-block img-fluid rounded" alt="">
                  </a>
               </div>
               
           </div>
       </div>
       <!-- <div class="col-lg-3 col-md-3 col-sm-3 col-12">
                      <div class="d-flex align-items-center justify-content-center category-text">
                         <p class="text-light">Category</p>
                       </div>
                                     
                       <ul class="category mb-3 b-description_readmore-wallpaper js-description_readmore_wallpaper">
                            <li>
                              <a href="#" class="active">All <span class="px-1">25</span></a>
                            </li>
                            <li>
                              <a href="#">Nature <span class="px-1">10</span></a>
                            </li>
       
                            <li>
                              <a href="#">Music <span class="px-1">8</span></a>
                            </li>
                            <li>
                              <a href="#">3D <span class="px-1">7</span></a>
                            </li>
                             <li>
                              <a href="#">Nature <span class="px-1">10</span></a>
                            </li>
       
                            <li>
                              <a href="#">Music <span class="px-1">8</span></a>
                            </li>
                            <li>
                              <a href="#">3D <span class="px-1">7</span></a>
                            </li>
                            <li>
                              <a href="#">Nature <span class="px-1">10</span></a>
                            </li>
       
                            <li>
                              <a href="#">Music <span class="px-1">8</span></a>
                            </li>
                            <li>
                              <a href="#">3D <span class="px-1">7</span></a>
                            </li>
                            <li>
                              <a href="#">Nature <span class="px-1">10</span></a>
                            </li>
       
                            <li>
                              <a href="#">Music <span class="px-1">8</span></a>
                            </li>
                            <li>
                              <a href="#">3D <span class="px-1">7</span></a>
                            </li>
                            <li>
                              <a href="#">Nature <span class="px-1">10</span></a>
                            </li>
       
                            <li>
                              <a href="#">Music <span class="px-1">8</span></a>
                            </li>
                            <li>
                              <a href="#">3D <span class="px-1">7</span></a>
                            </li>
                            <li>
                              <a href="#">Nature <span class="px-1">10</span></a>
                            </li>
       
                            <li>
                              <a href="#">Music <span class="px-1">8</span></a>
                            </li>
                            <li>
                              <a href="#">3D <span class="px-1">7</span></a>
                            </li>
                            <li>
                              <a href="#">Nature <span class="px-1">10</span></a>
                            </li>
                            <li>
                              <a href="#">Music <span class="px-1">8</span></a>
                            </li>
                            <li>
                              <a href="#">3D <span class="px-1">7</span></a>
                            </li>
                            <li>
                              <a href="#">Nature <span class="px-1">10</span></a>
                            </li>
       
                            <li>
                              <a href="#">Music <span class="px-1">8</span></a>
                            </li>
                            <li>
                              <a href="#">3D <span class="px-1">7</span></a>
                            </li>
                            <li>
                              <a href="#">Nature <span class="px-1">10</span></a>
                            </li>
       
                            <li>
                              <a href="#">Music <span class="px-1">8</span></a>
                            </li>
                            <li>
                              <a href="#">3D <span class="px-1">7</span></a>
                            </li>
                            <li>
                              <a href="#">Nature <span class="px-1">10</span></a>
                            </li>
                            <li>
                              <a href="#">Music <span class="px-1">8</span></a>
                            </li>
                            <li>
                              <a href="#">3D <span class="px-1">7</span></a>
                            </li>
                            <li>
                              <a href="#">Nature <span class="px-1">10</span></a>
                            </li>
       
                            <li>
                              <a href="#">Music <span class="px-1">8</span></a>
                            </li>
                            <li>
                              <a href="#">3D <span class="px-1">7</span></a>
                            </li>
                            <li>
                              <a href="#">Nature <span class="px-1">10</span></a>
                            </li>
       
                            <li>
                              <a href="#">Music <span class="px-1">8</span></a>
                            </li>
                            <li>
                              <a href="#">3D <span class="px-1">7</span></a>
                            </li>
                            <li>
                              <a href="#">Nature <span class="px-1">10</span></a>
                            </li>
       
                            <li>
                              <a href="#">Music <span class="px-1">8</span></a>
                            </li>
                            <li>
                              <a href="#">3D <span class="px-1">7</span></a>
                            </li>
                      </ul>   
                      
                         
                    <div class="ad my-3">
                      <a href="#">
                          <img src="images/Let-Us-Place-Your-Ad.jpg" class="mx-auto d-block img-fluid rounded" alt="">
                      </a>
                   </div>
                   
                         
                   </div> -->
        <!-- HR -->
      <div class="row">
         <hr class="footer-hr ">
      </div>
   </div>
   </main>
<?php } endif; ?>
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