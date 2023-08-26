
(function($) { "use strict";

	//Switch dark/light
	
	$(".switch").on('click', function () {
		if ($("body").hasClass("light")) {
			$("body").removeClass("light");
			$(".switch").removeClass("switched");
		}
		else {
			$("body").addClass("light");
			$(".switch").addClass("switched");
		}
	});
		
	$(document).ready(function(){"use strict";
	
		//Scroll back to top
		
		var progressPath = document.querySelector('.progress-wrap path');
		var pathLength = progressPath.getTotalLength();
		progressPath.style.transition = progressPath.style.WebkitTransition = 'none';
		progressPath.style.strokeDasharray = pathLength + ' ' + pathLength;
		progressPath.style.strokeDashoffset = pathLength;
		progressPath.getBoundingClientRect();
		progressPath.style.transition = progressPath.style.WebkitTransition = 'stroke-dashoffset 10ms linear';		
		var updateProgress = function () {
			var scroll = $(window).scrollTop();
			var height = $(document).height() - $(window).height();
			var progress = pathLength - (scroll * pathLength / height);
			progressPath.style.strokeDashoffset = progress;
		}
		updateProgress();
		$(window).scroll(updateProgress);	
		var offset = 50;
		var duration = 550;
		jQuery(window).on('scroll', function() {
			if (jQuery(this).scrollTop() > offset) {
				jQuery('.progress-wrap').addClass('active-progress');
			} else {
				jQuery('.progress-wrap').removeClass('active-progress');
			}
		});				
		jQuery('.progress-wrap').on('click', function(event) {
			event.preventDefault();
			jQuery('html, body').animate({scrollTop: 0}, duration);
			return false;
		})
		
		
	});
	
})(jQuery); 

function splideFull(itemParam, setting = {}) {
    if ($(itemParam).length) {
      var defaultSetting = {
        perPage: 1,
        autoplay: true,
        interval: 5000,
        type: "slide",
        pagination: true,
        arrows: true,
        video: {
          mute: false,
          autoplay: true,
          playerOptions: {
            youtube: {
              autoplay: 1,
              controls: 0,
              disablekb: 1,
              playsinline: 1,
              rel: 0,
            },
            htmlVideo: {
              loop: true,
              autoplay: true,
              controls: false,
              muted: true,
            },
          },
        },
      }
      var splide = new Splide(
        itemParam,
        Object.assign(
          Object.assign(defaultSetting, {
            type: reCount() > 1 ? "loop" : "fade",
            pagination: reCount() > 1 ? "true" : "false",
            arrows: reCount() > 1 ? "true" : "false",
          }),
          setting
        )
      ).mount(window.splide.Extensions)
    }
    function reCount() {
      return $(itemParam + " .splide__slide").length
    }
    if (reCount() <= 1) {
      $(itemParam + " .splide__pagination").remove()
    }
  }
  
  function multipleSplide(itemParam, setting) {
    if ($(itemParam).length) {
      var arrowsBoo = setting.arrows == undefined
      var paginationBoo = setting.pagination == undefined
  
      var defaultSetting = {
        type: "slide",
        arrows: true,
        pagination: true,
        autoplay: true,
      }
      Object.assign(setting, {
        type: reCount() > setting.perPage ? "loop" : "slide",
        pagination: paginationBoo ? reCount() > setting.perPage : false,
        arrows: arrowsBoo ? reCount() > setting.perPage : false,
      })
      var obj = Object.keys(setting.breakpoints)
      var splide = new Splide(
        itemParam,
        Object.assign(
          defaultSetting,
          Object.assign(
            setting,
            Object.keys(obj).forEach((key) => {
              Object.assign(setting.breakpoints[obj[key]], {
                type:
                  reCount() > setting.breakpoints[obj[key]]["perPage"]
                    ? "loop"
                    : "slide",
                arrows: arrowsBoo
                  ? reCount() > setting.breakpoints[obj[key]]["perPage"]
                  : false,
                pagination: paginationBoo
                  ? reCount() > setting.breakpoints[obj[key]]["perPage"]
                  : false,
              })
            })
          )
        )
      ).mount()
    }
    function reCount() {
      return $(itemParam + " .splide__slide").length
    }
    if (reCount() <= 1) {
      $(itemParam + " .splide__pagination").remove()
    }
  }

(function($) { "use strict";
  
    var cookieAlert = document.querySelector(".cookiealert");
    var acceptCookies = document.querySelector(".acceptcookies");
  
    if (!cookieAlert) {
       return;
    }
  
    cookieAlert.offsetHeight; // Force browser to trigger reflow (https://stackoverflow.com/a/39451131)
  
    // Show the alert if we cant find the "acceptCookies" cookie
    if (!getCookie("acceptCookies")) {
        cookieAlert.classList.add("show");
    }
  
    // When clicking on the agree button, create a 1 year
    // cookie to remember user's choice and close the banner
    acceptCookies.addEventListener("click", function () {
        setCookie("acceptCookies", true, 365);
        cookieAlert.classList.remove("show");
  
        // dispatch the accept event
        window.dispatchEvent(new Event("cookieAlertAccept"))
    });
  
    // Cookie functions from w3schools
    function setCookie(cname, cvalue, exdays) {
        var d = new Date();
        d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
        var expires = "expires=" + d.toUTCString();
        document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
    }
  
    function getCookie(cname) {
        var name = cname + "=";
        var decodedCookie = decodeURIComponent(document.cookie);
        var ca = decodedCookie.split(';');
        for (var i = 0; i < ca.length; i++) {
            var c = ca[i];
            while (c.charAt(0) === ' ') {
                c = c.substring(1);
            }
            if (c.indexOf(name) === 0) {
                return c.substring(name.length, c.length);
            }
        }
        return "";
    }
  })();