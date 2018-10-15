<?php get_header(); ?>

<section>
    <div id="parallax-panel">
		<div id="parallax-image" data-parallax data-speed="0.50" data-direction="up" style="background-image:url('/wp-content/themes/mysite/images/wallpaper.jpg');"></div>
    </div>
</section>


<main>
	<div class="container position bg-primary">
		<br>
		<div class="text d-flex justify-content-center align-items-center category-text">
           <p class="text-light">Search results for: <?php the_search_query(); ?></p>
         </div>
				<div class="row">
					<?php if( have_posts() ) : ?>
                		<?php while ( have_posts() ) : the_post(); ?>
	    					<?php if (get_post_type() == 'post'): ?>
	    						<div id="post-<?php the_ID(); ?>" <?php post_class('col-xl-3 col-lg-6 col-md-6 col-sm-6 col-6 pb-3'); ?> >
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
							<?php continue; ?>
	    					<?php endif ?>
	               			<?php if (get_post_type() == 'mus_cat'): ?>
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
					        <?php continue; ?>
	               			<?php endif ?>
	               			<?php if (get_post_type() == 'mus'): ?>
	               				<div class="col-lg-4 col-md-4 col-sm-12 col-12 mt-3">
	               					<div class="row ">
					                    <div class="col-md-12 col-sm-12 col-12">
					                      <p class="music-name"><?php the_title(); ?></p>
					                    </div>
					                    <div class="col-md-8 col-sm-8 col-8 pr-0">
					                          <audio preload="auto" controls>
					                                <source src="<?php $mp3 = get_post_custom_values('Music URI'); echo $mp3[0] ?>">
					                          </audio>
					                    </div>
					                    <div class="col-md-2 col-sm-2 col-2 px-0">
					                      <a href="#" class="music-lyrics ubuntu" data-toggle="modal" data-target="#exampleModalCenter"><span>lyrics</span></a>
					                    </div>
					                    <div class="col-md-2 col-sm-2 col-2 pl-0">
					                      <a href="#" class="download-music"><i class="far fa-arrow-alt-circle-down"></i></a>
					                    </div>
					                    <hr class="hr">
				                    </div>
	               				</div>
	               			<?php continue; ?>
	               			<?php endif ?>
	               			<?php if (get_post_type() == 'notes_cat'): ?>
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
				            <?php continue; ?>
	               			<?php endif ?>
	               			<?php if (get_post_type() == 'note'): ?>
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
						    <?php continue; ?>
	               			<?php endif ?>
	               			<div class="col-lg-9 col-md-9 col-sm-9 col-12 px-3 pt-3">
					          <div class="row">
					             <div class="card-columns mx-3">
									<?php if (get_post_type() == 'wall'): ?>
										<div class="card card-pin item">
					                        <a href="<?php the_permalink(); ?>">
					                          <?php the_post_thumbnail(); ?>
					                          <div class="overlay"></div>
					                        </a>
					                    </div>
									<?php endif ?>
					             </div>
					          </div>
					    	</div>
              			<?php endwhile; ?>
           			 <?php endif; ?>
				</div>
			
		<div class="row">
			<hr class="footer-hr ">
		</div>
	</div>
</main>





<?php get_footer(); ?>