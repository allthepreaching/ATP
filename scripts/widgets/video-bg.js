"use strict"; var $ = jQuery;
module.exports = function(){
	var tools = require('../tools/tools.js');
	var $videoBgs = $(".video-bg");
	if($videoBgs.length <1){
		return;
	}
	var isPlayVideo = (function(){
		var v=document.createElement('video');
		var canMP4 = v.canPlayType ? v.canPlayType('video/mp4') : false;
		return canMP4;
	})();
	function showAlt($videoBg, video){
		var alt = $videoBg.data('alternative');
		if(alt){
			var $img = $('<img alt class="bg" src="'+alt+'"/>');
			$videoBg.after($img).remove();
			if(video){
				$(video).remove();
			}
		}
	}
	if( !isPlayVideo ){
		$videoBgs.each(function(){
			var $videoBg = $(this);
			showAlt($videoBg);
		});
		return;
	}
	function play(video, $videoBgDiv){
		var promise = video.play();
		if (promise !== undefined) {
			promise.then(function() {
				// Autoplay started!
			}).catch(function(error) {
				if(!video.muted){
					video.muted = true;
					var promise2 = video.play();
					if (promise2 !== undefined) {
						promise2.then(function(){
						}).catch(function(error) {
							showAlt($videoBgDiv, video);
						});
					}
				}else{
					showAlt($videoBgDiv, video);
				}
			
			});
		}
	}
	$videoBgs.each(function(){
		var $divBg = $(this);
		$divBg.data('loading', function(done){
			var $videoBg = $('<video class="video-bg"></video>');
			$videoBg[0].muted = true;
			var doDone = function(){
				var vw = $videoBg.width();
				var vh = $videoBg.height();
				var vr = vw/vh;
				var $window = $(window);
				var resize = function(){
					var ww = $window.width();
					var wh = $window.height();
					var wr = ww/wh;
					var w, h;
					if(vr > wr){
						h = Math.ceil(wh);
						w = Math.ceil(h * vr);
					}else{
						w = Math.ceil(ww);
						h = Math.ceil(w / vr);
					}
					$videoBg.css({
						width:  w+'px',
						height: h+'px',
						top: Math.round((wh - h)/2)+'px',
						left: Math.round((ww - w)/2)+'px'
					});
				};
				$window.resize(resize);
				resize();
				play($videoBg[0], $divBg)
				done();
			};
			$videoBg.on('ended', function(){
				this.currentTime = 0;
				play(this, $divBg)
				if(this.ended) {
					this.load();
				}
			});
			var isNotDone = true;
			$videoBg.on('canplaythrough', function(){
				if(isNotDone){
					isNotDone = false;
					doDone();
				}else{
					play(this, $divBg)
				}
			});
			$videoBg[0].src = $divBg.data('video');
			$videoBg[0].preload="auto";
			$divBg.after($videoBg);
			$divBg.remove();
		});
	});
};