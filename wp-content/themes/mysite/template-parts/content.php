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