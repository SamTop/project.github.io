<!--Footer-->
        <footer>
            <div class="container footer-position ">
              <div class="row p-5 footer-image">
                <hr>
                <div class="col-md-12 d-flex align-items-center justify-content-center ">
                  <h2 class="hot"><?php echo get_theme_mod('foot')?></h2>
                </div>
                <div class="col-md-12 d-flex flex-wrap align-items-center justify-content-center">
                  <?php 
                    $tags = get_tags(array(
                    'hide_empty' => false
                    ));
                    if (count($tags) > 20) {
                      $rand = array_rand($tags, 20);

                      foreach($rand as $tag) {
                        echo '<a href="http://project.loc/tag/'.$tags[$tag]->name.'/" class="hot-tag">'.$tags[$tag]->name.'</a>';
                      } 
                    } else {
                      foreach($tags as $tag) {
                        echo '<a href="http://project.loc/tag/'.$tag->name.'/" class="hot-tag">'.$tag->name.'</a>';
                      }
                    }
                  ?>


                  <!-- <a href="#" class="hot-tag">Nature</a>
                  <a href="#" class="hot-tag">Space</a>
                  <a href="#" class="hot-tag">3D</a>
                  <a href="#" class="hot-tag">Space</a>
                  <a href="#" class="hot-tag">3D</a>
                  <a href="#" class="hot-tag">Lorem ipsum.</a>
                  <a href="#" class="hot-tag">Justify</a>
                  <a href="#" class="hot-tag">Nature</a>
                  <a href="#" class="hot-tag">Space</a>
                  <a href="#" class="hot-tag">3D</a>
                  <a href="#" class="hot-tag">3D</a>
                  <a href="#" class="hot-tag">Lorem ipsum.</a>
                  <a href="#" class="hot-tag">Justify</a>
                  <a href="#" class="hot-tag">Nature</a>
                  <a href="#" class="hot-tag">Space</a>
                  <a href="#" class="hot-tag">Lorem ipsum.</a>
                  <a href="#" class="hot-tag">Justify</a>
                  <a href="#" class="hot-tag">Nature</a>
                  <a href="#" class="hot-tag">Space</a>
                  <a href="#" class="hot-tag">3D</a>
                  <a href="#" class="hot-tag">Lorem ipsum.</a> -->

                </div>
              </div>

                <div class="footer-copyright bg-primary">
                  <p><?php echo "© ". date('Y'). " " .get_theme_mod('copy'); ?></p>
                </div>
            </div>
        </footer>
  <!-- Footer End -->

<!-- Modal -->
        <div id="msg_pop">   
            <a href="#" class="close-button" onclick="document.getElementById('msg_pop').style.display='none'; return false;">
               <i class="fas fa-times-circle fa-1x"></i> 
            </a>
            <h6 class="h6-pop py-2">Follow me on Instagram</h6>
            <a href="#" class="px-2 rounded">
                <img src="/wp-content/themes/mysite/images/InstaFollowers_hero_ART.png" width="300" height="120" alt="">
            </a>
           <div class="py-2">
                <a href="#" class="follow-pop btn btn-success">Join to Creative Command</a>
           </div>  
        </div>





  <!-- <script type="text/javascript">
    $(function() {
        $(".parallux").parallux(
          {
            fullHeight: false,
            onMobile: 'fixed'
          }
        );
      });
  </script> -->
  <!-- Description -->
  <!-- <script src="assets/js/description.js"></script>
    <script type="text/javascript">
      
    </script>
     -->  <!-- More Wallpaper -->
  <!-- <script type="text/javascript">
    $(function() {
      $('.js-description_readmore_wallpaper').moreLines({
        linecount: 34, 
        baseclass: 'b-description',
        basejsclass: 'js-description',
        classspecific: '_readmore',    
        buttontxtmore: "More Category",               
        buttontxtless: "Less",
        animationspeed: 250 
      });
    });
  </script> -->
  
  <!-- More Popular -->
 <!--  <script type="text/javascript">
   $(function() {
     $('.js-description_readmore_popular').moreLines({
       linecount: 8, 
       baseclass: 'b-description',
       basejsclass: 'js-description',
       classspecific: '_readmore',    
       buttontxtmore: "More Popular",               
       buttontxtless: "Less",
       animationspeed: 250 
     });
   });
 </script> -->
  
  <!--  -->
  
  <script>
              (function($){
                $(function() {
                   $('audio').audioPlayer();
                 });
              });
      
    </script>
    
<script>
    jQuery.noConflict();
    jQuery('[data-parallax]').jQueryParallax();
  </script>

    <script>
      jQuery(function()  {
      jQuery('audio').audioPlayer();
      });
    </script>

    <!-- PopUp Notification -->
    <script type="text/javascript">
          var delay_popup = 10000;
          var msg_pop = document.getElementById('msg_pop'); setTimeout("document.getElementById('msg_pop').style.display='block';document.getElementById('msg_pop').className += 'fadeIn';", delay_popup);
    </script>
    
    <!-- Tabs -->
    
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
  
  <!-- Description -->
  
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
  <!-- More Wallpaper -->
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
  
  <!-- More Popular -->
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
  
  <!--  -->
  
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
    <script>
      ( function ( $ ) {
        $("ul.menu li:last-child a").attr("data-toggle", "modal");
        $("ul.menu li:last-child a").attr("data-target", ".bd-example-modal-lg");
        
      } ( jQuery ) );
    </script>

</body>
<?php wp_footer(); ?>
</html>