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
              <?php if( have_posts() ) : ?>
                <?php while ( have_posts() ) : the_post();
              ?>
    
               <?php get_template_part('template-parts/content'); ?>
                
              <?php endwhile; ?>
            <?php endif; ?>
              



               <!-- Pagination -->

                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <?php project_pagination(); ?>
                    
                </div>

                <!-- Pagination End -->
                
         


            </div>
        <!-- Card Col -->


        </div>
        <?php get_sidebar(); ?>
        <!-- Sidebar here!!!-->

       <!--  <div class="col-lg-3 col-md-3 col-sm-3 col-12 p-3">
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
             </div> -->
        
        
        <!-- Main Row -->
    
      </div>
      <!-- Main Container -->

      <!-- HR -->
      <div class="row">
         <hr class="footer-hr ">
      </div>

    </div>

  </main>
<?php get_footer(); ?>