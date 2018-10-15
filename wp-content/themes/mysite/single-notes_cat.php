<?php get_header(); ?>

 <section>
       <div id="parallax-panel-notes">
		<div id="parallax-image-music" data-parallax data-speed="0.50" data-direction="up" style="background-image: url('/wp-content/themes/mysite/images/wallpaper.jpg'); transform: translate3d(0px, -67px, 0px);"></div>
	</div>
 </section>

<?php
            // WP_Query arguments


              // Getting playlists
              $arguments = array( 'post_type'  => array( 'notes_cat' ), 'name' => get_the_title() );
              $notes_c = new WP_Query($arguments);
              if ( $notes_c->have_posts() ) {
              while ( $notes_c->have_posts() ) {
                  $notes_c->the_post();
                  $play = array();
                  $list_arr = get_post_custom_values('Playlists');
                  $lists = $list_arr[0];
                  $notes = explode('; ', $lists );
                 } // end while
              } // endif
              wp_reset_postdata();
            ?>
			
 <main>
     <div class="container pt-3 position bg-primary">
         <div class="text d-flex justify-content-center align-items-center category-text">
           <p class="text-light"><?php  the_title(); ?></p>
         </div>

         <div class="row">
        <?php
            foreach($notes as $lists) 
            {
            	$args = array( 'post_type'  => array( 'note' ), 'meta_key' => 'Note Category'  ,'meta_value' => get_the_title() );
            	$notes = new WP_Query($args);
            	if ( $notes->have_posts() ) {
              while ( $notes->have_posts() ) {
                  $notes->the_post(); ?>
                  <!-- One Note Start -->
		          <div class="col-md-6 col-sm-12 col-12 my-2">
		            <div class="d-flex bg-note py-1 pl-1 rounded align-items-center">
		               <img src="<?php the_post_thumbnail_url(); ?>" alt="" class="rounded-circle w-25 bg-light">
		               <div class="name-note flex-grow-1 mx-4 text-light">
		               <h5><?php the_title(); ?></h5>
		               <div class="notes-content d-flex flex-wrap ubuntu">
		                    <a href="#"><i class="fas fa-music"></i> <?php $instrument = get_post_custom_values('Name of Instrument'); echo $instrument[0]; ?></a>
		               </div>
		               <a href="#" class="btn btn-success btn-block mt-4 ubuntu">Download Note</a>
		              </div>
		            </div>
		          </div>
          <!-- One Note End -->


        <?php         } // end while
              } // endif
           	}
        ?> 

          <!-- Row End -->
        </div>
        
            <!-- HR -->
              <div class="row">
                 <hr class="footer-hr ">
              </div>
              
        </div>
    </main>  