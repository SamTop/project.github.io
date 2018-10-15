<?php get_header(); ?>

<section>
       <div id="parallax-panel">
    <div id="parallax-image" data-parallax data-speed="0.50" data-direction="up" style="background-image:url('/wp-content/themes/mysite/images/wallpaper.jpg');"></div>
  </div>
   </section>


<main>
       <div class="container position bg-primary">
           <div class="row">
              
               <div class="col-lg-9 col-md-9 col-sm-9 col-12 px-2 pt-3">
                   <div class="video-block">
                       <div class="video-block-name">
                           <p><?php the_title(); ?></p>
                       </div>
                       <!-- <img src="<?php $img = get_post_custom_values('Image URI'); echo "$img[0]" ?>" alt=""> -->
                       <!-- Iframe Just Link Code -->
                       <iframe src="<?php $a = get_post_custom_values('Video URI'); echo "$a[0]"?>" scrolling="no" frameborder="0" width="100%" height="430" allowfullscreen="true" webkitallowfullscreen="true" mozallowfullscreen="true"></iframe>
                       
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
                                  <a href="#">015</a>    
                                  <a href="#">014</a>
                                  <a href="#">013</a>
                                  <a href="#">012</a>
                                  <a href="#">011</a>    
                                  <a href="#">010</a>
                                  <a href="#">009</a>
                                  <a href="#">008</a>
                                  <a href="#">007</a>    
                                  <a href="#">006</a>
                                  <a href="#">005</a>
                                  <a href="#">004</a>
                                  <a href="#">003</a>    
                                  <a href="#">002</a>
                                  <a href="#">001</a>
                              </div>
                              <div class="tab-pane fade mx-2 flex-wrap pb-2" id="rapidvideo" role="tabpanel" aria-labelledby="rapidvideo">
                                  <a href="#">006</a>
                                  <a href="#">005</a>
                                  <a href="#">004</a>
                                  <a href="#">003</a>    
                                  <a href="#">002</a>
                                  <a href="#">001</a>
                              </div>
                              <div class="tab-pane fade mx-2 flex-wrap pb-2" id="mycloud" role="tabpanel" aria-labelledby="nav-contact-tab">
                                  <a href="#">010</a>
                                  <a href="#">009</a>
                                  <a href="#">008</a>
                                  <a href="#">007</a>    
                                  <a href="#">006</a>
                                  <a href="#">005</a>
                                  <a href="#">004</a>
                                  <a href="#">003</a>    
                                  <a href="#">002</a>
                                  <a href="#">001</a>
                              </div>
                            </div>
                            
                       </div>
                   </div>
                   
                   
                       
                        <script>

                        /**
                        *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
                        *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/

                        var disqus_config = function () {
                        this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
                        this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
                        };

                        (function() { // DON'T EDIT BELOW THIS LINE
                        var d = document, s = d.createElement('script');
                        s.src = 'https://commentani.disqus.com/embed.js';
                        s.setAttribute('data-timestamp', +new Date());
                        (d.head || d.body).appendChild(s);
                        })();
                        </script>
               </div>
               
               
               <div class="col-lg-3 col-md-3 col-sm-3 col-12 px-2 pt-3">
                   <div class="video-block">
                      <div class="video-block-name">
                           <p><?php the_title(); ?></p>
                       </div>
                       <img src="<?php $img = get_post_custom_values('Image URI'); echo "$img[0]" ?>" class="mx-auto d-block img-fluid" alt="">
                       
                       <div class="video-block-name">
                           <table class="table">
                              <tbody>
                                <tr>
                                  <th class="ubuntu"><span th-all>Genre:</span></th>
                                  <td>
                                      <div class="sub_title d-flex flex-wrap ubuntu">
                                        <?php 
                                          $post_tags = get_the_tags();
 
                                          
                                              foreach( $post_tags as $tag ) {
                                              echo '<a href="http://project.loc/tag/'.$tag->name.'/"><i class="fas fa-tags"></i>'.$tag->name.'</a>';
                                              }
                                            
                                        ?>
                                        <!-- <a href="#"><i class="fas fa-tags"></i> Love</a>
                                        <a href="#"><i class="fas fa-tags"></i> Comedy</a> -->
                                      </div>
                                  </td>    
                                </tr>
                                
                                <tr>
                                  <th class="ubuntu">Type:</th>
                                  <td class="ubuntu"><?php $type = get_post_custom_values('Type'); echo "$type[0]"?></td>
                                </tr>
                                
                                <tr>
                                  <th class="ubuntu">Status:</th>
                                  <td class="ubuntu"><?php $stat = get_post_custom_values('Status'); echo "$stat[0]"?></td>
                                </tr>
                                
                                <tr>
                                  <th class="ubuntu">Episodes:</th>
                                  <td class="ubuntu"><?php $epis = get_post_custom_values('Episodes'); echo "$epis[0]"?></td>
                                </tr>
                                
                                <tr>
                                  <th class="ubuntu">Year:</th>
                                  <td class="ubuntu"><?php $year = get_post_custom_values('Year'); echo "$year[0]"?></td>
                                </tr>
                                
                                <tr>
                                  <th class="ubuntu">Creator:</th>
                                  <td class="ubuntu"><?php $create = get_post_custom_values('Creator'); echo "$create[0]"?></td>
                                </tr>
                                
                                <tr>
                                  <th class="ubuntu">Views:</th>
                                  <td class="ubuntu"><i class="far fa-eye"></i> 6,812</td>
                                </tr>
                              </tbody>
                            </table>
                            
                                <div class="b-description_readmore js-description_readmore mt-3 ubuntu">
                                    <?php $descr = get_post_custom_values('Description'); echo "$descr[0]";?>
                                </div>
                                
                       </div>
                   </div>
                   
                   <div class="ad my-3">
                      <a href="#">
                          <img src="images/Let-Us-Place-Your-Ad.jpg" class="mx-auto d-block img-fluid rounded" alt="">
                      </a>
                   </div>
                   
               </div>
               
           </div>
           
           <!-- HR -->
              <div class="row">
                 <hr class="footer-hr ">
              </div>
              
       </div>
   </main>

<?php get_footer(); ?>