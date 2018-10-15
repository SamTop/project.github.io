<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <meta name="keywords" content="  "><!-- Ключевые Слова Сайта -->
    <meta name="revisit-after" content="2 days">
    <meta name="google-site-verification" content=""/>
    <meta name="robots" content="index, follow" />
    <meta name="googlebot" content="index, follow" />
    <meta name="google" content="sitelinkssearchbox" />
    <meta name="google" content="translate" /> 
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Jua|Righteous" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu:700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
    <!-- <script src="assets/js/jquery-3.3.1.min.js"></script> -->
    <?php wp_enqueue_script("jquery"); 
    wp_enqueue_script('audioplayer', get_template_directory_uri() . '/assets/js/audioplayer.js');?>



<?php wp_head(); ?>
</head>
<body <?php body_class();?>>

	<!-- Menu -->
      <header>
              <!-- Large modal -->

              <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content p-1">
                    <!-- <div class="input-group m-0">
                      <input type="text" class="form-control border border-primary ubuntu" placeholder="Search..." aria-label="Search..." aria-describedby="basic-addon2">
                      <div class="input-group-append">
                        <a class="btn-search btn-primary" href="#"><i class="material-icons">search</i></a>
                      </div>
                    </div> -->
                    <?php get_search_form(); ?>
                  </div>
                </div>
              </div>

       <div class="container-fluid fixed-top bg-menu">
           <div class="container">

               <div class="row">

                   <div class="col-lg-6 col-md-6 col-sm-6 col-12 d-flex justify-content-center align-items-right align-items-sm-center">
                       <a href="index.html" class="logo"><?php the_custom_logo();?></a>
                   </div><link href="https://fonts.googleapis.com/css?family=Baloo" rel="stylesheet">

                   <div class="col-lg-6 col-md-6 col-sm-6 col-12 d-flex justify-content-center align-items-center">
                          <?php
                            /*wp_nav_menu(
                              array(
                                'theme_location' => 'primary',
                                'items_wrap' => '<ul id="%1$s" class="%2$s"></ul>',
                                'menu_class' => 'menu',
                                'menu_id' => '',
                                'depth' => 1
                              ));*/
                              wp_nav_menu(
                              array(
                                'theme_location' => 'primary',
                                'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                                'menu_class' => 'menu',
                                'menu_id' => '',
                                'depth' => 1,
                                'menu' => 'My menu'
                              ));
                          ?>
                         <!--  <ul class="menu">
                           <li><a href="index.html">
                                 <i class="fas fa-play-circle fa-lg"></i>
                                 <p>Watch</p>
                             </a></li>
                             <li><a href="wallpaper.html">
                                 <i class="far fa-image fa-lg"></i>
                                 <p>Wallpaper</p>
                             </a></li>
                             <li><a href="music.html" class="music-link">
                                 <i class="fas fa-headphones fa-lg"></i>
                                 <p>Music</p>
                             </a></li>
                             <li><a href="notes.html" class="notes-link">
                                 <i class="fab fa-itunes-note fa-lg"></i>
                                 <p>Notes</p>
                             </a></li>
                             <li><a href="#" class="search-link"  data-toggle="modal" data-target=".bd-example-modal-lg">
                                 <i class="material-icons">search</i>
                                 <p>Search</p>
                             </a>
                             </li>
                         </ul>   -->
                   </div>
               </div>
           </div>
       </div>
   </header>