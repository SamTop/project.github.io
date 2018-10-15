<?php get_header(); ?>

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
	
				<?php 
					global $wp;
              		$hurl = home_url( $wp->request );
             		$modurl = explode("http://project.loc/year/", $hurl);
             		$year = $modurl[1];
             		$args = array( 'post_type' => 'post', 'meta_key' => 'Year', 'meta_value' => $year );
             		$movies = new WP_Query( $args );
             		if ( $movies->have_posts() ) {
                  	while ( $movies->have_posts() ) {
                    $movies->the_post(); ?>
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

                <?php
                  }
                }
				?>

				
				<div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <?php project_pagination(); ?>
                </div>
				</div>
			</div>
			<?php get_sidebar(); ?>
		</div>
		<div class="row">
        	<hr class="footer-hr ">
    	</div>
	</div>
</main>

<?php get_footer(); ?>