/*
	AUTHOR: Osvaldas Valutis, www.osvaldas.info
*/
/* <![CDATA[ */
jQuery.noConflict();
(function(jQuery, window, document, undefined) {
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

    jQuery.fn.audioPlayer = function(params) {
        var params = jQuery.extend({
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
            if (jQuery(this).prop('tagName').toLowerCase() != 'audio')
                return false;

            var jQuery(this) = jQuery(this),
                audioFile = jQuerythis.attr('src'),
                isAutoPlay = jQuerythis.get(0).getAttribute('autoplay'),
                isAutoPlay = isAutoPlay === '' || isAutoPlay === 'autoplay' ? true : false,
                isLoop = jQuerythis.get(0).getAttribute('loop'),
                isLoop = isLoop === '' || isLoop === 'loop' ? true : false,
                isSupport = false;

            if (typeof audioFile === 'undefined') {
                jQuerythis.find('source').each(function() {
                    audioFile = jQuery(this).attr('src');
                    if (typeof audioFile !== 'undefined' && canPlayType(audioFile)) {
                        isSupport = true;
                        return false;
                    }
                });
            } else if (canPlayType(audioFile)) isSupport = true;

            var thePlayer = jQuery('<div class="' + params.classPrefix + '">' + (isSupport ? jQuery('<div>').append(jQuerythis.eq(0).clone()).html() : '<embed src="' + audioFile + '" width="0" height="0" volume="100" autostart="' + isAutoPlay.toString() + '" loop="' + isLoop.toString() + '" />') + '<div class="' + cssClass.playPause + '" title="' + params.strPlay + '"><a href="#">' + params.strPlay + '</a></div></div>'),
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
                    jQuery(this).attr('title', params.strPlay).find('a').html(params.strPlay);
                    thePlayer.removeClass(cssClass.playing);
                    isSupport ? theAudio.pause() : theAudio.Stop();
                } else {
                    jQuery(this).attr('title', params.strPause).find('a').html(params.strPause);
                    thePlayer.addClass(cssClass.playing);
                    isSupport ? theAudio.play() : theAudio.Play();
                }
                return false;
            });

            jQuerythis.replaceWith(thePlayer);
        });
        return this;
    };
})(jQuery, window, document);
















/* Video Card */

jQuery(window).load(function() {
  jQuery('.post-module').hover(function() {
    jQuery(this).find('.description').stop().animate({
      height: "toggle",
      opacity: "toggle"
    }, 300);
  });
});















(function (document, window, jQuery)
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
		this.jQueryel = jQuery(el);

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
		this.jQuerywindow = jQuery(window);

		this.lastScrollTop = null;

		this._cacheValues();
		this._parallax();
	};

	Parallax.prototype._events = function ()
	{
		this.jQuerywindow.on('scroll.parallax.begin', this._beginScroll.bind(this));

		this.jQuerywindow.on('scroll.parallax.debounce', debounce(function ()
		{
			cancelAnimationFrame(this.animationFrame);
			this.scrolling = false;
			this.jQuerywindow.on('scroll.parallax.begin', this._beginScroll.bind(this));

		}.bind(this), 30));

		this.jQuerywindow.on('resize.parallax', debounce(this.refresh.bind(this), 30));
	};

	Parallax.prototype._beginScroll = function ()
	{
		if (!this.scrolling)
		{
			this._go();
			this.scrolling = true;
			this.jQuerywindow.off('scroll.parallax.begin');			
		}
	};

	Parallax.prototype._cacheValues = function ()
	{	
		var self = this;

		this.jQueryel.each(function (index, el)
		{	
			var jQuerythis            = jQuery(this),
				currentTransform = self.currentTransforms[index],
				offset           = jQuerythis.offset().top,
				top              = (currentTransform !== undefined)? offset - currentTransform : offset;

			self.firstTops[index] = top;
			self.speeds[index]    = jQuerythis.attr('data-speed');
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
        var viewportTop = this.jQuerywindow.scrollTop();

        if (viewportTop === this.lastScrollTop)
        {
        	return false;
        }

        this.lastScrollTop = viewportTop;
 		
 		for (var i = 0, l = this.jQueryel.length; i < l; i++)
 		{
 			var el = this.jQueryel[i];

			if (!this._isInView(el))
			{
				continue;
			}

			var jQueryel = jQuery(el);

			this.currentTransforms[i] = (viewportTop - this.firstTops[i]) * this.speeds[i];
				
			jQueryel.css('transform','translate3d(0, ' + this.currentTransforms[i] +'px,0)'); 			
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

		var el   = jQuery(this),
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

	jQuery.fn.jQueryParallax = Plugin;

}(document, window, jQuery));
/* ]]> */


