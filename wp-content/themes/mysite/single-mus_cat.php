<?php get_header(); ?>

<section>
    <div id="parallax-panel">
		<div id="parallax-image-music" data-parallax data-speed="0.50" data-direction="up" style="background-image: url('/wp-content/themes/mysite/images/wallpaper.jpg'); transform: translate3d(0px, -67px, 0px);"></div>
	</div>
</section>


<section>
	<div class="container pt-3 position bg-primary ">
		<div class="row">
			<div class="col-lg-3 col-md-3 col-sm-12 col-12"></div>
			<div class="col-lg-6 col-md-6 col-sm-12 col-12">
				<div class="text d-flex justify-content-center align-items-center category-text">
				<p class="text-light">Name</p>
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-12 col-12"></div>
		</div>
	</div>


<div class="container">
      <div class="row">

          <!-- List1 -->
   			
          <?php
            // WP_Query arguments

              // Getting category name
              global $wp;
              $hurl = home_url( $wp->request );
              $modurl = explode("http://project.loc/mus_cat/", $hurl);
              $category = $modurl[1];

              // Getting playlists
              $arguments = array( 'post_type'  => array( 'mus_cat' ), 'name' => $category);
              $mus_c = new WP_Query($arguments);
              if ( $mus_c->have_posts() ) {
              while ( $mus_c->have_posts() ) {
                  $mus_c->the_post();
                  $play = array();
                  $list_arr = get_post_custom_values('Playlists');
                  $lists = $list_arr[0];
                  $playlists = explode('; ', $lists );
                 } // end while
              } // endif
              wp_reset_postdata();
            ?>
          <!-- Category Name -->

          <!-- Category Name End -->
   				
              
            <?php
              foreach($playlists as $lists) 
              {
                $args = array( 'post_type'  => array( 'mus' ), 'category_name' => $category, 'meta_key' => 'Playlist', 'meta_value' => $lists);
                $music_1 = new WP_Query($args);

              // The Loop
              if ( $music_1->have_posts() ) { ?>
                <div class="col-lg-4 col-md-4 col-sm-12 col-12 mt-3">
                    <div class="clip-text text-center mb-3 ubuntu">
                     <p><?php echo $lists; ?></p>
                    </div>
                <?php while ( $music_1->have_posts() ) {
                  $music_1->the_post();
                  // do something?>
                  
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
                      <a href="<?php the_permalink(); ?>" class="music-lyrics ubuntu" ><span>lyrics</span></a><!-- data-toggle="modal" data-target="#exampleModalCenter" -->
                    </div>
                    <div class="col-md-2 col-sm-2 col-2 pl-0">
                      <a href="#" class="download-music"><i class="far fa-arrow-alt-circle-down"></i></a>
                    </div>
                    <hr class="hr">
                    </div>
            <?php
                } ?>
                </div>
             <?php }
            
              // Restore original Post Data
              wp_reset_postdata();
            }
            ?> 
            <!-- Lyrics Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header bg-primary text-light">
        <h5 class="modal-title righteous" id="exampleModalLongTitle">Name of Music</h5>
        <button type="button" class="close text-light" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body text-center ubuntu">
      <!-- Here will be Reklam Adsense Google -->
       <pre class="ubuntu">
          <?php  
          $lyr = get_post_custom_values('Lyrics');
          echo $lyr[0];
          ?>
       </pre>
       
       <a href="#" class="btn btn-primary mb-3">Copy Text <i class="fas fa-1x ml-1 fa-link"></i></a>
       
       <a href="#">
           <img src="images/place-your-ad-here.jpg" class="thubnail rounded img-fluid" alt="">
       </a>
      </div>
      <div class="modal-footer bg-primary">
        <!-- Here will be Reklam Adsense Google -->
            <div class="col-12">
                <div class="sub_title-tags d-flex flex-wrap ubuntu justify-content-center">
                    <a href="#"><i class="fas fa-tags"></i> Nature</a>
                    <a href="#"><i class="fas fa-tags"></i> Cars</a>
                    <a href="#"><i class="fas fa-tags"></i> Nature</a>
                    <a href="#"><i class="fas fa-tags"></i> Cars</a>
                    <a href="#"><i class="fas fa-tags"></i> Nature</a>
                </div>
               
            </div>
      </div>
    </div>
  </div>
</div>
                      <!-- Category Name End -->
          
              
           <!--  <?php
             
               $args = array ( 'post_type'  => array( 'mus' ), 'category_name' => $category, 'meta_key' => 'Playlist', 'meta_value' =>  $playlists[1]);
               $music_2 = new WP_Query($args);
           
             // The Loop
             if ( $music_2->have_posts() ) { ?>
             <div class="col-lg-4 col-md-4 col-sm-12 col-12 mt-3">
                     <div class="clip-text text-center mb-3 ubuntu">
             <p><?php echo $playlists[1]; ?></p>
                     </div>
           
               <?php while ( $music_2->have_posts() ) {
                 $music_2->the_post();
                 // do something?>
                   
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
               
                
           <?php
               } ?>
               </div>
            <?php } 
           
             // Restore original Post Data
             wp_reset_postdata();
           ?>
           
           
           <?php
           
               $others = array_slice($playlists, 2);
               $args = array ( 'post_type'  => array( 'mus' ), 'category_name' => $category, 'meta_key' => 'Playlist', 'meta_value' => 'List 3');
               var_dump($others);
               $music_3 = new WP_Query($args);
           
             // The Loop
             if ( $music_3->have_posts() ) { ?>
               <div class="col-lg-4 col-md-4 col-sm-12 col-12 mt-3">
                     <div class="clip-text text-center mb-3 ubuntu">
             <p>Others</p>
                     </div>
              <?php
                 // do something?>
                   
                 <div class="row ">
                   <?php foreach ($others as $key) { 
                       $args = array ( 'post_type'  => array( 'mus' ), 'category_name' => $category, 'meta_key' => 'Playlist', 'meta_value' => $key);
                       $music_3 = new WP_Query($args);
                       while ( $music_3->have_posts() ) {
                       $music_3->the_post();
                 // do something
                     ?>
                   <div class="col-md-12 col-sm-12 col-12">
                     <p class="music-name"><?php the_title(); var_dump($others);?></p>
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
                   <?php
                     } }
               ?>
                 </div>
               
                
           
               </div>
            <?php }
           
             // Restore original Post Data
             wp_reset_postdata();
           ?>  -->
            
         <!-- Musics One Start -->    
          <!-- <div class="row ">
            <div class="col-md-12 col-sm-12 col-12">
              <p class="music-name">Song Name</p>
            </div>
            <div class="col-md-8 col-sm-8 col-8 pr-0">
                  <audio preload="auto" controls>
                        <source src="/wp-content/themes/mysite/files/player/example.mp3">
                  </audio>
            </div>
            <div class="col-md-2 col-sm-2 col-2 px-0">
              <a href="#" class="music-lyrics ubuntu" data-toggle="modal" data-target="#exampleModalCenter"><span>lyrics</span></a>
            </div>
            <div class="col-md-2 col-sm-2 col-2 pl-0">
              <a href="#" class="download-music"><i class="far fa-arrow-alt-circle-down"></i></a>
            </div>
            <hr class="hr">
          </div> -->
        <!-- Music One End -->        
   			

        <!-- List1 End -->

        
            </div>             
   		</div>
</section>





<?php get_footer(); ?>



<!-- <script>
    jQuery.noConflict();
    jQuery('[data-parallax]').jQueryParallax();
  </script>

    <script>
      jQueryfunction() {
      jQuery('audio').audioPlayer();
      });
    </script>

    PopUp Notification
    <script type="text/javascript">
          var delay_popup = 10000;
          var msg_pop = document.getElementById('msg_pop'); setTimeout("document.getElementById('msg_pop').style.display='block';document.getElementById('msg_pop').className += 'fadeIn';", delay_popup);
    </script>
    
    Tabs
    
    <script type="text/javascript">
    jQuery(document).ready(function() {
      'use strict';
      jQuery(window).on('ariaTabs.initialised', function(event, element) {
        console.log(element + 'init');
      });
      jQuery('.tab-group').ariaTabs({
        contentRole: ['document', 'application', 'document'],
      });
      jQuery(window).on('ariaTabs.select', function(event, element, index) {
        console.log(index);
      });
      jQuery(window).on('ariaTabs.deselect', function(event, element, index) {
        console.log(index);
      });
    });
  </script>
  
  Description
  
  <script type="text/javascript">
    jQuery(function() {
      jQuery('.js-description_readmore').moreLines({
        linecount: 3, 
        baseclass: 'b-description',
        basejsclass: 'js-description',
        classspecific: '_readmore',    
        buttontxtmore: "Read More",               
        buttontxtless: "Less",
        animationspeed: 250 
      });
    });
  </script>
  More Wallpaper
  <script type="text/javascript">
    jQuery(function() {
      jQuery('.js-description_readmore_wallpaper').moreLines({
        linecount: 34, 
        baseclass: 'b-description',
        basejsclass: 'js-description',
        classspecific: '_readmore',    
        buttontxtmore: "More Category",               
        buttontxtless: "Less",
        animationspeed: 250 
      });
    });
  </script>
  
  More Popular
  <script type="text/javascript">
    jQuery(function() {
      jQuery('.js-description_readmore_popular').moreLines({
        linecount: 8, 
        baseclass: 'b-description',
        basejsclass: 'js-description',
        classspecific: '_readmore',    
        buttontxtmore: "More Popular",               
        buttontxtless: "Less",
        animationspeed: 250 
      });
    });
  </script>
  
  
  
    <script>
      jQuery(function() {
        jQuery(".parallux").parallux(
          {
            fullHeight: false,
            onMobile: 'fixed'
          }
        );
      });
    </script>



    <script>
      


/* <![CDATA[ */
jQuery.noConflict();
(function($, window, document, undefined) {
    var isTouch = 'ontouchstart' in window,
        eStart = isTouch ? 'touchstart' : 'mousedown',
        eMove = isTouch ? 'touchmove' : 'mousemove',
        eEnd = isTouch ? 'touchend' : 'mouseup',
        eCancel = isTouch ? 'touchcancel' : 'mouseup',
        secondsToTime = function(secs) {
            var hours = Math.floor(secs / 3600),
                minutes = Math.floor(secs % 3600 / 60),
                seconds = Math.ceil(secs % 3600 % 60);
            return (hours == 0 ? '' : hours > 0 && hours.toString().length < 2 ? '0' + hours + ':' : hours + ':') + (minutes.toString().length < 2 ? '0' + minutes : minutes) + ':' + (seconds.toString().length < 2 ? '0' + seconds : seconds);
        },
        canPlayType = function(file) {
            var audioElement = document.createElement('audio');
            return !!(audioElement.canPlayType && audioElement.canPlayType('audio/' + file.split('.').pop().toLowerCase() + ';').replace(/no/, ''));
        };

    $.fn.audioPlayer = function(params) {
        var params = $.extend({
                classPrefix: 'audioplayer',
                strPlay: '',
                strPause: '',
                strVolume: ''
            }, params),
            cssClass = {},
            cssClassSub = {
                playPause: 'playpause',
                playing: 'playing',
                time: 'time',
                timeCurrent: 'time-current',
                timeDuration: 'time-duration',
                bar: 'bar',
                barLoaded: 'bar-loaded',
                barPlayed: 'bar-played',
                volume: 'volume',
                volumeButton: 'volume-button',
                volumeAdjust: 'volume-adjust',
                noVolume: 'novolume',
                mute: 'mute',
                mini: 'mini'
            };

        for (var subName in cssClassSub)
            cssClass[subName] = params.classPrefix + '-' + cssClassSub[subName];

        this.each(function() {
            if ($(this).prop('tagName').toLowerCase() != 'audio')
                return false;

            var $this = $(this),
                audioFile = $this.attr('src'),
                isAutoPlay = $this.get(0).getAttribute('autoplay'),
                isAutoPlay = isAutoPlay === '' || isAutoPlay === 'autoplay' ? true : false,
                isLoop = $this.get(0).getAttribute('loop'),
                isLoop = isLoop === '' || isLoop === 'loop' ? true : false,
                isSupport = false;

            if (typeof audioFile === 'undefined') {
                $this.find('source').each(function() {
                    audioFile = $(this).attr('src');
                    if (typeof audioFile !== 'undefined' && canPlayType(audioFile)) {
                        isSupport = true;
                        return false;
                    }
                });
            } else if (canPlayType(audioFile)) isSupport = true;

            var thePlayer = $('<div class="' + params.classPrefix + '">' + (isSupport ? $('<div>').append($this.eq(0).clone()).html() : '<embed src="' + audioFile + '" width="0" height="0" volume="100" autostart="' + isAutoPlay.toString() + '" loop="' + isLoop.toString() + '" />') + '<div class="' + cssClass.playPause + '" title="' + params.strPlay + '"><a href="#">' + params.strPlay + '</a></div></div>'),
                theAudio = isSupport ? thePlayer.find('audio') : thePlayer.find('embed'),
                theAudio = theAudio.get(0);

            if (isSupport) {
                thePlayer.find('audio').css({
                    'width': 0,
                    'height': 0,
                    'visibility': 'hidden'
                });
                thePlayer.append('<div class="' + cssClass.time + ' ' + cssClass.timeCurrent + '"></div><div class="' + cssClass.bar + '"><div class="' + cssClass.barLoaded + '"></div><div class="' + cssClass.barPlayed + '"></div></div><div class="' + cssClass.time + ' ' + cssClass.timeDuration + '"></div><div class="' + cssClass.volume + '"><div class="' + cssClass.volumeButton + '" title="' + params.strVolume + '"><a href="#">' + params.strVolume + '</a></div><div class="' + cssClass.volumeAdjust + '"><div><div></div></div></div></div>');

                var theBar = thePlayer.find('.' + cssClass.bar),
                    barPlayed = thePlayer.find('.' + cssClass.barPlayed),
                    barLoaded = thePlayer.find('.' + cssClass.barLoaded),
                    timeCurrent = thePlayer.find('.' + cssClass.timeCurrent),
                    timeDuration = thePlayer.find('.' + cssClass.timeDuration),
                    volumeButton = thePlayer.find('.' + cssClass.volumeButton),
                    volumeAdjuster = thePlayer.find('.' + cssClass.volumeAdjust + ' > div'),
                    volumeDefault = 0,
                    adjustCurrentTime = function(e) {
                        theRealEvent = isTouch ? e.originalEvent.touches[0] : e;
                        theAudio.currentTime = Math.round((theAudio.duration * (theRealEvent.pageX - theBar.offset().left)) / theBar.width());
                    },
                    adjustVolume = function(e) {
                        theRealEvent = isTouch ? e.originalEvent.touches[0] : e;
                        theAudio.volume = Math.abs((theRealEvent.pageX - volumeAdjuster.offset().left) / volumeAdjuster.width());
                    },
                    updateLoadBar = setInterval(function() {
                      if (theAudio.buffered.length > 0) {
                        barLoaded.width((theAudio.buffered.end(0) / theAudio.duration) * 100 + '%');
                        if (theAudio.buffered.end(0) >= theAudio.duration)
                            clearInterval(updateLoadBar);
                      }
                    }, 100);

                var volumeTestDefault = theAudio.volume,
                    volumeTestValue = theAudio.volume = 0.111;
                if (Math.round(theAudio.volume * 1000) / 1000 == volumeTestValue) theAudio.volume = volumeTestDefault;
                else thePlayer.addClass(cssClass.noVolume);

                timeDuration.html('&hellip;');
                timeCurrent.text(secondsToTime(0));

                theAudio.addEventListener('loadeddata', function() {
                    timeDuration.text(secondsToTime(theAudio.duration));
                    volumeAdjuster.find('div').width(theAudio.volume * 100 + '%');
                    volumeDefault = theAudio.volume;
                });

                theAudio.addEventListener('timeupdate', function() {
                    timeCurrent.text(secondsToTime(theAudio.currentTime));
                    barPlayed.width((theAudio.currentTime / theAudio.duration) * 100 + '%');
                });

                theAudio.addEventListener('volumechange', function() {
                    volumeAdjuster.find('div').width(theAudio.volume * 100 + '%');
                    if (theAudio.volume > 0 && thePlayer.hasClass(cssClass.mute)) thePlayer.removeClass(cssClass.mute);
                    if (theAudio.volume <= 0 && !thePlayer.hasClass(cssClass.mute)) thePlayer.addClass(cssClass.mute);
                });

                theAudio.addEventListener('ended', function() {
                    thePlayer.removeClass(cssClass.playing);
                });

                theBar.on(eStart, function(e) {
                        adjustCurrentTime(e);
                        theBar.on(eMove, function(e) {
                            adjustCurrentTime(e);
                        });
                    })
                    .on(eCancel, function() {
                        theBar.unbind(eMove);
                    });

                volumeButton.on('click', function() {
                    if (thePlayer.hasClass(cssClass.mute)) {
                        thePlayer.removeClass(cssClass.mute);
                        theAudio.volume = volumeDefault;
                    } else {
                        thePlayer.addClass(cssClass.mute);
                        volumeDefault = theAudio.volume;
                        theAudio.volume = 0;
                    }
                    return false;
                });

                volumeAdjuster.on(eStart, function(e) {
                        adjustVolume(e);
                        volumeAdjuster.on(eMove, function(e) {
                            adjustVolume(e);
                        });
                    })
                    .on(eCancel, function() {
                        volumeAdjuster.unbind(eMove);
                    });
            } else thePlayer.addClass(cssClass.mini);

            if (isAutoPlay) thePlayer.addClass(cssClass.playing);

            thePlayer.find('.' + cssClass.playPause).on('click', function() {
                if (thePlayer.hasClass(cssClass.playing)) {
                    $(this).attr('title', params.strPlay).find('a').html(params.strPlay);
                    thePlayer.removeClass(cssClass.playing);
                    isSupport ? theAudio.pause() : theAudio.Stop();
                } else {
                    $(this).attr('title', params.strPause).find('a').html(params.strPause);
                    thePlayer.addClass(cssClass.playing);
                    isSupport ? theAudio.play() : theAudio.Play();
                }
                return false;
            });

            $this.replaceWith(thePlayer);
        });
        return this;
    };
})(jQuery, window, document);
















/* Video Card */

$(window).load(function() {
  $('.post-module').hover(function() {
    $(this).find('.description').stop().animate({
      height: "toggle",
      opacity: "toggle"
    }, 300);
  });
});















(function (document, window, $)
{ 
  /*=================================
  =            Polyfills            =
  =================================*/
  
  // http://paulirish.com/2011/requestanimationframe-for-smart-animating/
  // http://my.opera.com/emoller/blog/2011/12/20/requestanimationframe-for-smart-er-animating

  // requestAnimationFrame polyfill by Erik Möller. fixes from Paul Irish and Tino Zijdel

  // MIT license

  (function() {
      var lastTime = 0;
      var vendors = ['ms', 'moz', 'webkit', 'o'];
      for(var x = 0; x < vendors.length && !window.requestAnimationFrame; ++x) {
          window.requestAnimationFrame = window[vendors[x]+'RequestAnimationFrame'];
          window.cancelAnimationFrame = window[vendors[x]+'CancelAnimationFrame'] || window[vendors[x]+'CancelRequestAnimationFrame'];
      }
   
      if (!window.requestAnimationFrame)
          window.requestAnimationFrame = function(callback, element) {
              var currTime = new Date().getTime();
              var timeToCall = Math.max(0, 16 - (currTime - lastTime));
              var id = window.setTimeout(function() { callback(currTime + timeToCall); }, 
                timeToCall);
              lastTime = currTime + timeToCall;
              return id;
          };
   
      if (!window.cancelAnimationFrame)
          window.cancelAnimationFrame = function(id) {
              clearTimeout(id);
          };
  }());

  if (!Function.prototype.bind)
  {
    Function.prototype.bind = function (context)
    {
      var fn = this;

      return function ()
      {
        return fn.apply(context, arguments);
      };
    };
  }

  function debounce (fn, delay) {
    var timer = null;
    return function () {
      var context = this, args = arguments;
      clearTimeout(timer);
      timer = setTimeout(function () {
        fn.apply(context, args);
      }, delay);
    };
  }

  /*==============================
  =            Plugin            =
  ==============================*/
  
  function Parallax (el, options)
  {
    this.el  = el;
    this.$el = $(el);

    this.animationFrame    = null;
    this.scrolling         = false;

    this.currentTransforms = [];
    this.firstTops         = [];
    this.speeds            = [];

    this._setup();
    this._events();
  }

  Parallax.prototype._setup = function ()
  { 
    this.$window = $(window);

    this.lastScrollTop = null;

    this._cacheValues();
    this._parallax();
  };

  Parallax.prototype._events = function ()
  {
    this.$window.on('scroll.parallax.begin', this._beginScroll.bind(this));

    this.$window.on('scroll.parallax.debounce', debounce(function ()
    {
      cancelAnimationFrame(this.animationFrame);
      this.scrolling = false;
      this.$window.on('scroll.parallax.begin', this._beginScroll.bind(this));

    }.bind(this), 30));

    this.$window.on('resize.parallax', debounce(this.refresh.bind(this), 30));
  };

  Parallax.prototype._beginScroll = function ()
  {
    if (!this.scrolling)
    {
      this._go();
      this.scrolling = true;
      this.$window.off('scroll.parallax.begin');      
    }
  };

  Parallax.prototype._cacheValues = function ()
  { 
    var self = this;

    this.$el.each(function (index, el)
    { 
      var $this            = $(this),
        currentTransform = self.currentTransforms[index],
        offset           = $this.offset().top,
        top              = (currentTransform !== undefined)? offset - currentTransform : offset;

      self.firstTops[index] = top;
      self.speeds[index]    = $this.attr('data-speed');
    });
  };

  Parallax.prototype._go = function ()
  { 
    this.animationFrame = requestAnimationFrame(this._go.bind(this));
    this._parallax();
  };

  Parallax.prototype._isInView = function (el)
  {
      var bounds = el.getBoundingClientRect();

      return bounds.top < window.innerHeight && bounds.bottom > 0;
  };

  Parallax.prototype._parallax = function ()
  {
        var viewportTop = this.$window.scrollTop();

        if (viewportTop === this.lastScrollTop)
        {
          return false;
        }

        this.lastScrollTop = viewportTop;
    
    for (var i = 0, l = this.$el.length; i < l; i++)
    {
      var el = this.$el[i];

      if (!this._isInView(el))
      {
        continue;
      }

      var $el = $(el);

      this.currentTransforms[i] = (viewportTop - this.firstTops[i]) * this.speeds[i];
        
      $el.css('transform','translate3d(0, ' + this.currentTransforms[i] +'px,0)');      
    }
  };

  Parallax.prototype.refresh = function ()
  { 
    this.lastScrollTop = null;

    this._cacheValues();
    this._parallax();
  };

  function Plugin (options)
  { 
    var args = Array.prototype.slice.call(arguments, 1);

    var el   = $(this),
      data = el.data('parallax');

    if (!data)
    {
      el.data('parallax', (data = new Parallax(this, options)));
    }

    if (typeof options === "string")
    {
        if (data[options] && options[0] !== '_')
        {
            data[options].apply(data, args);
        }
    }   
  } 

  $.fn.jQueryParallax = Plugin;

}(document, window, jQuery));
/* ]]> */






    </script>
     -->
     