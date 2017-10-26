var browser_mobile = (/android|webos|iphone|ipod|blackberry|iemobile|opera mini/i.test(navigator.userAgent.toLowerCase()));
/***************** Waypoints ******************/

$(document).ready(function() {

	$('.wp1').waypoint(function() {
		$('.wp1').addClass('animated fadeInLeft');
	}, {
		offset: '75%'
	});
	$('.wp2').waypoint(function() {
		$('.wp2').addClass('animated fadeInUp');
	}, {
		offset: '75%'
	});
	$('.wp3').waypoint(function() {
		$('.wp3').addClass('animated fadeInDown');
	}, {
		offset: '55%'
	});
	$('.wp4').waypoint(function() {
		$('.wp4').addClass('animated fadeInDown');
	}, {
		offset: '75%'
	});
	$('.wp5').waypoint(function() {
		$('.wp5').addClass('animated fadeInUp');
	}, {
		offset: '75%'
	});
	$('.wp6').waypoint(function() {
		$('.wp6').addClass('animated fadeInDown');
	}, {
		offset: '75%'
	});

	// Slider Home
	/*
	$(".bxslider li").each(function(i) {
		$(this).backstretch($(this).attr('data-bg'));
	});
	
	var hSlider = $('.bxslider').bxSlider({
		pager: false,
		auto: (($('.bxslider li').length>1)?true:false),
		speed: 500,
		pause: 4000,
		mode: 'fade',
		responsive: true,
	});
	*/

});

/***************** Slide-In Nav ******************/

$(window).load(function() {

	$('.nav_slide_button').click(function() {
		$('.pull').slideToggle();
	});
});

/***************** Smooth Scrolling ******************/

$(function() {

	$('a[href*=#]:not([href=#])').click(function() {
		if (location.pathname.replace(/^\//, '') === this.pathname.replace(/^\//, '') && location.hostname === this.hostname) {

			var target = $(this.hash);
			target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
			if (target.length) {
				$('html,body').animate({
					scrollTop: target.offset().top
				}, 2000);
				return false;
			}
		}
	});

});

/***************** Nav Transformicon ******************/

document.querySelector("#nav-toggle").addEventListener("click", function() {
	this.classList.toggle("active");
});

/***************** Overlays ******************/

$(document).ready(function(){
    if (Modernizr.touch) {
        // show the close overlay button
        $(".close-overlay").removeClass("hidden");
        // handle the adding of hover class when clicked
        $(".img").click(function(e){
            if (!$(this).hasClass("hover")) {
                $(this).addClass("hover");
            }
        });
        // handle the closing of the overlay
        $(".close-overlay").click(function(e){
            e.preventDefault();
            e.stopPropagation();
            if ($(this).closest(".img").hasClass("hover")) {
                $(this).closest(".img").removeClass("hover");
            }
        });
    } else {
        // handle the mouseenter functionality
        $(".img").mouseenter(function(){
            $(this).addClass("hover");
        })
        // handle the mouseleave functionality
        .mouseleave(function(){
            $(this).removeClass("hover");
        });
	}
	createMap();
});

$(window).resize(function() {
	// hSlider.reloadSlider(); // Reload slider on screen resized
});


/***************** Flexsliders ******************/

$(window).load(function() {
	$('#portfolioSlider').flexslider({
		animation: "slide",
		directionNav: false,
		controlNav: true,
		touch: false,
		pauseOnHover: true,
		start: function() {
			$.waypoints('refresh');
		}
	});
	createMap();
	$('#servicesSlider').flexslider({
		animation: "slide",
		directionNav: false,
		controlNav: true,
		touch: true,
		pauseOnHover: true,
		start: function() {
			$.waypoints('refresh');
		}
	});

	$('#teamSlider').flexslider({
		animation: "slide",
		directionNav: false,
		controlNav: true,
		touch: true,
		pauseOnHover: true,
		start: function() {
			$.waypoints('refresh');
		}
	});

	$('#internationalSlider').flexslider({
		animation: "slide",
		directionNav: false,
		controlNav: true,
		touch: true,
		pauseOnHover: true,
		start: function() {
			$.waypoints('refresh');
		}
	});

	$('#productSlider').flexslider({
		animation: "slide",
		directionNav: false,
		controlNav: true,
		touch: true,
		pauseOnHover: true,
		start: function() {
			$.waypoints('refresh');
		}
	});

	$('#valuesSlider').flexslider({
		animation: "slide",
		directionNav: false,
		controlNav: true,
		touch: true,
		pauseOnHover: true,
		start: function() {
			$.waypoints('refresh');
		}	
	});

});

function createMap() {
	var centerDesktop = new google.maps.LatLng(10.484559, -66.8564348,17);
	var centerMobile = new google.maps.LatLng(10.484559, -66.8564348,17);
	
	var mymap = document.getElementById('gmap'),
		map_options = {
			zoom: (browser_mobile)?14:15,
			mapTypeId: google.maps.MapTypeId.ROADMAP,
			scrollwheel: false,
			center: (browser_mobile)?centerMobile:centerDesktop,
			styles: [
			    {
					"featureType": "all",
					"elementType": "labels.text.fill",
					"stylers": [
						{
							"saturation": "100"
						},
						{
							"color": "#542d1e"
						},
						{
							"lightness": "-8"
						}
					]
				},
				{
					"featureType": "all",
					"elementType": "labels.text.stroke",
					"stylers": [
						{
							"visibility": "on"
						},
						{
							"color": "#987563"
						},
						{
							"lightness": 16
						}
					]
				},
				{
					"featureType": "all",
					"elementType": "labels.icon",
					"stylers": [
						{
							"visibility": "off"
						},
						{
							"color": "#542d1e"
						}
					]
				},
				{
					"featureType": "administrative",
					"elementType": "geometry.fill",
					"stylers": [
						{
							"color": "#7e5b4c"
						},
						{
							"lightness": 20
						}
					]
				},
				{
					"featureType": "administrative",
					"elementType": "geometry.stroke",
					"stylers": [
						{
							"color": "#7e5b4c"
						},
						{
							"lightness": 17
						},
						{
							"weight": 1.2
						}
					]
				},
				{
					"featureType": "landscape",
					"elementType": "geometry",
					"stylers": [
						{
							"color": "#876454"
						},
						{
							"lightness": 20
						}
					]
				},
				{
					"featureType": "poi",
					"elementType": "geometry",
					"stylers": [
						{
							"color": "#a6816f"
						},
						{
							"lightness": 21
						}
					]
				},
				{
					"featureType": "poi.park",
					"elementType": "geometry",
					"stylers": [
						{
							"color": "#a6816f"
						},
						{
							"lightness": 21
						}
					]
				},
				{
					"featureType": "road.highway",
					"elementType": "geometry.fill",
					"stylers": [
						{
							"color": "#987563"
						},
						{
							"lightness": 17
						}
					]
				},
				{
					"featureType": "road.highway",
					"elementType": "geometry.stroke",
					"stylers": [
						{
							"color": "#987563"
						},
						{
							"lightness": 29
						},
						{
							"weight": 0.2
						}
					]
				},
				{
					"featureType": "road.highway",
					"elementType": "labels.text.fill",
					"stylers": [
						{
							"color": "#562c19"
						}
					]
				},
				{
					"featureType": "road.arterial",
					"elementType": "geometry",
					"stylers": [
						{
							"color": "#987563"
						},
						{
							"lightness": 18
						}
					]
				},
				{
					"featureType": "road.local",
					"elementType": "geometry",
					"stylers": [
						{
							"color": "#987563"
						},
						{
							"lightness": 16
						}
					]
				},
				{
					"featureType": "transit",
					"elementType": "geometry",
					"stylers": [
						{
							"color": "#987563"
						},
						{
							"lightness": 19
						}
					]
				},
				{
					"featureType": "water",
					"elementType": "geometry",
					"stylers": [
						{
							"color": "#7e5b4c"
						},
						{
							"lightness": 17
						}
					]
				}
			]
		};
	
	map = new google.maps.Map(mymap, map_options);
	
	var ref1 = new google.maps.Marker({
		position: new google.maps.LatLng(10.484559, -66.8564348,17),
		map:map,
		icon: {
			anchor: new google.maps.Point(60, 100),
			url: './images/map-marker.png',
			size: new google.maps.Size(50, 50),
			scaledSize: new google.maps.Size(50,50)
		},
		title: 'GRO Corporación'
	});
}

var myIndex = 0;

function carousel() {
	myIndex++;
	if (myIndex > 5) { myIndex = 1 }
	switch(myIndex) {
		case 1:
			document.getElementById("hero").style.backgroundImage = "url('../images/reasons.jpg')";
			break;
		case 2:
			document.getElementById("hero").style.backgroundImage = "url('../images/bg-grass.jpeg')";
			break;
		case 3:
			document.getElementById("hero").style.backgroundImage = "url('../images/bg-route.jpg')";
			break;
		case 4:
			document.getElementById("hero").style.backgroundImage = "url('../images/bg-train.jpg')";
			break;
		case 5:
			document.getElementById("hero").style.backgroundImage = "url('../images/reason.jpg')";
			break;
	}
	setTimeout(carousel, 6000); // Change image every 5 seconds	
}