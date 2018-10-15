<?php get_header(); ?>

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
         <!-- <section class="gallery-block grid-gallery"> -->
          <section>
          <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12 px-4">
          <div class="row">
				



			<?php
            // WP_Query arguments
              $args = array ( 'post_type'  => array( 'notes_cat' ) );
            
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
                        <a href="<?php the_permalink(); ?>" class="btn w-100">Go to Notes</a>
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