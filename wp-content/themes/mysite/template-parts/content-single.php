<div class="col-lg-9 col-md-9 col-sm-9 col-12 px-2 pt-3">
  <div class="video-block">
     <div class="video-block-name">
         <p>Name of This Movie</p>
     </div>
     <!-- Iframe Just Link Code -->
    <!--  <iframe src="https://www.youtube.com/embed/yCOPJi0Urq4" scrolling="no" frameborder="0" width="100%" height="430" allowfullscreen="true" webkitallowfullscreen="true" mozallowfullscreen="true"></iframe> -->
    <iframe width="100%" height="430" src="<?php $a = get_post_custom_values('Video URI'); echo "$a[0]"?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
     
     <div class="server-tabs">
         <nav class="mb-2">
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
             <p class="server-text">Server</p>
              <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#streamango" role="tab" aria-controls="home" aria-selected="true">Streamango</a>
              <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#rapidvideo" role="tab" aria-controls="nav-profile" aria-selected="false">RapidVideo</a>
              <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#mycloud" role="tab" aria-controls="nav-contact" aria-selected="false">MyCloud</a>
            </div>
          </nav>
          <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active mx-2 flex-wrap pb-2" id="streamango" role="tabpanel" aria-labelledby="nav-home-tab">
                
            </div> 
            <div class="tab-pane fade mx-2 flex-wrap pb-2" id="rapidvideo" role="tabpanel" aria-labelledby="rapidvideo">
               
            </div>
            <div class="tab-pane fade mx-2 flex-wrap pb-2" id="mycloud" role="tabpanel" aria-labelledby="nav-contact-tab">
               
            </div>
          </div>  
     </div>
  </div>
    <?php

    /*echo get_the_tag_list(
        '<ul class="my-tags-list"><li>',
        '</li><li>',
        '</li></ul>'        
    );*/

?>
  <!-- Disqus -->
</div>
 <!-- <?php get_sidebar(); ?> -->
 <div class="col-lg-3 col-md-3 col-sm-3 col-12 px-2 pt-3">
                   <div class="video-block">
                      <div class="video-block-name">
                           <p>Name of This Movie</p>
                       </div>
                       <img src="images/685154.png" class="mx-auto d-block img-fluid" alt="">
                       
                       <div class="video-block-name">
                           <table class="table">
                              <tbody>
                                <tr>
                                  <th class="ubuntu"><span th-all>Genre:</span></th>
                                  <td>
                                      <div class="sub_title d-flex flex-wrap ubuntu">
                                        <a href="#"><i class="fas fa-tags"></i> Love</a>
                                        <a href="#"><i class="fas fa-tags"></i> Comedy</a>
                                      </div>
                                  </td>    
                                </tr>
                                
                                <tr>
                                  <th class="ubuntu">Type:</th>
                                  <td class="ubuntu">Tv Series</td>
                                </tr>
                                
                                <tr>
                                  <th class="ubuntu">Status:</th>
                                  <td class="ubuntu">Completed</td>
                                </tr>
                                
                                <tr>
                                  <th class="ubuntu">Episodes:</th>
                                  <td class="ubuntu">4</td>
                                </tr>
                                
                                <tr>
                                  <th class="ubuntu">Year:</th>
                                  <td class="ubuntu">2018</td>
                                </tr>
                                
                                <tr>
                                  <th class="ubuntu">Creator:</th>
                                  <td class="ubuntu">Disney</td>
                                </tr>
                                
                                <tr>
                                  <th class="ubuntu">Views:</th>
                                  <td class="ubuntu"><i class="far fa-eye"></i> 6,812</td>
                                </tr>
                              </tbody>
                            </table>
                            
                               <div class="b-description_readmore js-description_readmore mt-3 ubuntu">
                                    From the largest elephant to the smallest shrew, the city of Zootopia is a mammal metropolis where various animals live and thrive. When Judy Hopps (Ginnifer Goodwin) becomes the first rabbit to join the police force, she quickly learns how tough it is to enforce the law. Determined to prove herself, Judy jumps at the opportunity to solve a mysterious case. Unfortunately, that means working with Nick Wilde (Jason Bateman), a wily fox who makes her job even harder. 
                                </div>
                       </div>
                   </div>
                   
                   <div class="ad my-3">
                      <a href="#">
                          <img src="images/Let-Us-Place-Your-Ad.jpg" class="mx-auto d-block img-fluid rounded" alt="">
                      </a>
                   </div>
                   
               </div>

<?php get_footer(); ?>





<!-- <div id="post-<?php thr_ID(); ?>" <?php post_class('col-xl-4 col-lg-6 col-md-6 col-sm-6 col-6 pb-3'); ?> >
  <div class="column">
    Post
    <div class="post-module">
      Thumbnail
      <div class="thumbnail">
       <div class="views">
          <p><i class="far fa-eye"></i> 6,812</p>
        </div>
        
        <div class="date">
          <?php the_category(); ?> 
        </div>
        
        <a href="index-content.html">
           <?php the_post_thumbnail()?>
        </a>
      </div>
      Post Content
      <div class="post-content">
        <h1 class="title"><?php the_title(); ?></h1>
        <div class="post-meta">
          <a href="index-content.html" class="btn w-100">Watch</a>
        </div>
      </div>
    </div>
  </div>
</div> -->