<div class="col-lg-3 col-md-3 col-sm-3 col-12 p-3">
          <?php dynamic_sidebar('sidebar-1'); ?>            
          <!-- <div class="d-flex align-items-center justify-content-center category-text">
             <p class="text-light">Recently Added</p>
          </div>
                                       
                                       
           <div class="row">
               <div class="col-12">
                   <ul class="category mb-3">
                    <li>
                      <a href="#">Name <span class="px-1">Movie</span></a>
                    </li>
                    <li>
                      <a href="#">Name <span class="px-1">2 Ep</span></a>
                    </li>
                    <li>
                      <a href="#">Name <span class="px-1">Movie</span></a>
                    </li>
                    <li>
                      <a href="#">Name <span class="px-1">12 Ep</span></a>
                    </li>
                    <li>
                      <a href="#">Name <span class="px-1">Movie</span></a>
                    </li>
                    <li>
                      <a href="#">Name <span class="px-1">25 Ep</span></a>
                    </li>
                 
                   </ul>
               </div>
            </div> -->
                     
                     
                     <!-- <div class="d-flex align-items-center justify-content-center category-text">
                              <p class="text-light">Popular</p>
                            </div>
                                       
                                       
                            <div class="row">
                                <div class="col-12">
                                    <ul class="category mb-2 b-description_readmore b-description_readmore-popular js-description_readmore_popular">
                                         <li>
                      <a href="#">Name</a>
                                         </li>
                                         <li>
                      <a href="#">Name</a>
                                         </li>
                                         <li>
                      <a href="#">Name</a>
                                         </li>
                                         <li>
                      <a href="#">Name</a>
                                         </li>
                                         <li>
                      <a href="#">Name</a>
                                         </li>
                                         <li>
                      <a href="#">Name</a>
                                         </li>
                        <li>
                      <a href="#">Name</a>
                                         </li>
                                         <li>
                      <a href="#">Name</a>
                                         </li>
                        <li>
                      <a href="#">Name</a>
                                         </li>
                                         <li>
                      <a href="#">Name</a>
                                         </li>
                         
                                    </ul>
                                </div>
                        
                        
                         </div>
                      
                      
                     
                               <div class="d-flex align-items-center justify-content-center category-text">
                                  <p class="text-light">Genre</p>
                                </div>
                     
                                 <div class="row">
                                <div class="col-12">
                                    <ul class="category category-video mb-3 d-flex flex-wrap justify-content-between">
                                         <li>
                      <a href="#">Comedy</a>
                                         </li>
                                         <li>
                      <a href="#">Adventure</a>
                                         </li>
                                         <li>
                      <a href="#">Love</a>
                                         </li>
                                         <li>
                      <a href="#">Comedy</a>
                                         </li>
                                         <li>
                      <a href="#">Adventure</a>
                                         </li>
                                         <li>
                      <a href="#">Comedy</a>
                                         </li>
                                         <li>
                      <a href="#">Adventure</a>
                                         </li>
                                         <li>
                      <a href="#">Love</a>
                                         </li>
                                         <li>
                      <a href="#">Comedy</a>
                                         </li>
                                         <li>
                      <a href="#">Adventure</a>
                                         </li>
                                    </ul>
                                </div>
                             </div>
                                                                        
                                          
                         <div class="d-flex align-items-center justify-content-center category-text">
                            <p class="text-light">Year</p>
                         </div>
                     
                             <div class="row">
                                <div class="col-12">
                                    <ul class="category category-video mb-3 d-flex flex-wrap justify-content-between">
                                         <li>
                      <a href="#">2018</a>
                                         </li>
                                         <li>
                      <a href="#">2017</a>
                                         </li>
                                         <li>
                      <a href="#">2016</a>
                                         </li>
                                         <li>
                      <a href="#">2015</a>
                                         </li>
                                         <li>
                      <a href="#">2014</a>
                                         </li>
                                         <li>
                      <a href="#">2013</a>
                                         </li>
                                         <li>
                      <a href="#">2012</a>
                                         </li>
                                         <li>
                      <a href="#">2011</a>
                                         </li>
                                         <li>
                      <a href="#">2010</a>
                                         </li>
                                         <li>
                      <a href="#">2009</a>
                                         </li>
                                    </ul>
                                </div>
                             </div> -->
                                       
                                       
       
                                        
                                        
       <!--  <div class="d-flex align-items-center justify-content-center category-text">
                                           <p class="text-light">From Instagram</p>
                                        </div>
                                                                         
                                         SnapWidget
                                        <iframe src="https://snapwidget.com/embed/568364" class="snapwidget-widget" allowtransparency="true" frameborder="0" scrolling="no" style="border:none; overflow:hidden; width:100%; height:250px; border-radius: 4px !important;"></iframe> 
                                        
                                         <a href="#" target="_blank" class="btn btn-success w-100 text-center ubuntu mt-1">Follow Me</a>  -->            
        <div class="d-flex align-items-center justify-content-center category-text">
          <p class="text-light">Genre</p>
        </div>
        <div class="row">
          <div class="col-12">
            <ul class="category category-video mb-3 d-flex flex-wrap justify-content-between">
              <?php

        $args = array ( 'post_type'  => array( 'post' ) );

        // The Query

        // The Wallpaper Sidebar 
        $tagslist = array ();
        $watch = new WP_Query( $args );
        if ( $watch->have_posts() ) {
          while ( $watch->have_posts() ) {
            $watch->the_post();
            // do something
            $tags = get_the_tags();
            
            if ($tags) {
              foreach($tags as $tag) {
                if (in_array("$tag->name", $tagslist)) {
                  continue;
                }
                echo "<li><a href='http://project.loc/tag/".$tag->name."'>";
                echo $tag->name;
                echo "</a></li>";
                $tagslist[] = $tag->name;                     
              }
            }
          }         
        }
?>
            </ul>
          </div>
        </div>

     <!-- year -->

        <div class="d-flex align-items-center justify-content-center category-text">
       <p class="text-light">Year</p>
    </div>

        <div class="row">
           <div class="col-12">
               <ul class="category category-video mb-3 d-flex flex-wrap justify-content-between">
                    <?php $curr_year = date('Y');
                      for ($i=0; $i < 10; $i++) {  ?>
                        <li>
                          <a href="http://project.loc/year/<?php echo $curr_year; ?>"><?php echo $curr_year; ?></a>
                        </li>
                    <?php
                      $curr_year -= 1;
                      }
                    ?>
                    <!-- <li>
                      <a href="#">2017</a>
                    </li>
                    <li>
                      <a href="#">2016</a>
                    </li>
                    <li>
                      <a href="#">2015</a>
                    </li>
                    <li>
                      <a href="#">2014</a>
                    </li>
                    <li>
                      <a href="#">2013</a>
                    </li>
                    <li>
                      <a href="#">2012</a>
                    </li>
                    <li>
                      <a href="#">2011</a>
                    </li>
                    <li>
                      <a href="#">2010</a>
                    </li>
                    <li>
                      <a href="#">2009</a>
                    </li> -->
               </ul>
           </div>
        </div>


        <!-- /year -->
</div>