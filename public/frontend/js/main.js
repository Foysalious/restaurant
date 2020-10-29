$('[data-fancybox="gallery"]').fancybox({
    loop : true, 
    buttons : [ 
        'slideShow',
        'share',
        'zoom',
        'fullScreen',
        "download",
        'close'
      ],
      
});

(function($) {

	"use strict";

	$(window).stellar({
    responsive: true,
    parallaxBackgrounds: true,
    parallaxElements: true,
    horizontalScrolling: false,
    hideDistantElements: false,
    scrollProperty: 'scroll'
  });


  window.onscroll = function() {
    myFunction()
};

$(document).ready(function(){
	$(".main-cart").click(function(){
		$(".cart-list").css({
			"transform" : "translateX(0)",
			"transition": "0.4s ease-in-out"
		})
	})
	$(".close-cart .fas").click(function(){
		$(".cart-list").css({
			"transform" : "translateX(100%)",
			"transition": "0.4s ease-in-out"
		})
	})
})

function myFunction() {
  var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
  var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
  var scrolled = (winScroll / height) * 100;
  document.getElementById("myBar").style.width = scrolled + "%";
}


	var fullHeight = function() {

		$('.js-fullheight').css('height', $(window).height());
		$(window).resize(function(){
			$('.js-fullheight').css('height', $(window).height());
		});

	};
	fullHeight();

	// loader
	var loader = function() {
		setTimeout(function() { 
			if($('#ftco-loader').length > 0) {
				$('#ftco-loader').removeClass('show');
			}
		}, 1);
	};
	loader();

	// Scrollax
   $.Scrollax();

	var carousel = function() {
		$('.home-slider').owlCarousel({
	    loop:true,
	    autoplay: true,
	    margin:0,
	    animateOut: 'fadeOut',
	    animateIn: 'fadeIn',
	    nav:true,
	    dots: true,
	    autoplayHoverPause: false,
	    items: 1,
	    navText : ["<span class='ion-ios-arrow-back'></span>","<span class='ion-ios-arrow-forward'></span>"],
	    responsive:{
	      0:{
	        items:1
	      },
	      600:{
	        items:1
	      },
	      1000:{
	        items:1
	      }
	    }
		});
		$('.carousel-testimony').owlCarousel({
			center: true,
			loop: true,
			items:1,
			margin: 30,
			stagePadding: 0,
			nav: false,
			navText: ['<span class="ion-ios-arrow-back">', '<span class="ion-ios-arrow-forward">'],
			responsive:{
				0:{
					items: 1
				},
				600:{
					items: 1
				},
				1000:{
					items: 1
				}
			}
		});
	};
	carousel();

	$('nav .dropdown').hover(function(){
		var $this = $(this);
		// 	 timer;
		// clearTimeout(timer);
		$this.addClass('show');
		$this.find('> a').attr('aria-expanded', true);
		// $this.find('.dropdown-menu').addClass('animated-fast fadeInUp show');
		$this.find('.dropdown-menu').addClass('show');
	}, function(){
		var $this = $(this);
			// timer;
		// timer = setTimeout(function(){
			$this.removeClass('show');
			$this.find('> a').attr('aria-expanded', false);
			// $this.find('.dropdown-menu').removeClass('animated-fast fadeInUp show');
			$this.find('.dropdown-menu').removeClass('show');
		// }, 100);
	});


	$('#dropdown04').on('show.bs.dropdown', function () {
	  console.log('show');
	});

	// scroll
	var scrollWindow = function() {
		$(window).scroll(function(){
			var $w = $(this),
					st = $w.scrollTop(),
					navbar = $('.ftco_navbar'),
					sd = $('.js-scroll-wrap');

			if (st > 150) {
				if ( !navbar.hasClass('scrolled') ) {
					navbar.addClass('scrolled');	
				}
			} 
			if (st < 150) {
				if ( navbar.hasClass('scrolled') ) {
					navbar.removeClass('scrolled sleep');
				}
			} 
			if ( st > 350 ) {
				if ( !navbar.hasClass('awake') ) {
					navbar.addClass('awake');	
				}
				
				if(sd.length > 0) {
					sd.addClass('sleep');
				}
			}
			if ( st < 350 ) {
				if ( navbar.hasClass('awake') ) {
					navbar.removeClass('awake');
					navbar.addClass('sleep');
				}
				if(sd.length > 0) {
					sd.removeClass('sleep');
				}
			}
		});
	};
	scrollWindow();

	
	var counter = function() {
		
		$('#section-counter').waypoint( function( direction ) {

			if( direction === 'down' && !$(this.element).hasClass('ftco-animated') ) {

				var comma_separator_number_step = $.animateNumber.numberStepFactories.separator(',')
				$('.number').each(function(){
					var $this = $(this),
						num = $this.data('number');
						console.log(num);
					$this.animateNumber(
					  {
					    number: num,
					    numberStep: comma_separator_number_step
					  }, 7000
					);
				});
				
			}

		} , { offset: '95%' } );

	}
	counter();

	var contentWayPoint = function() {
		var i = 0;
		$('.ftco-animate').waypoint( function( direction ) {

			if( direction === 'down' && !$(this.element).hasClass('ftco-animated') ) {
				
				i++;

				$(this.element).addClass('item-animate');
				setTimeout(function(){

					$('body .ftco-animate.item-animate').each(function(k){
						var el = $(this);
						setTimeout( function () {
							var effect = el.data('animate-effect');
							if ( effect === 'fadeIn') {
								el.addClass('fadeIn ftco-animated');
							} else if ( effect === 'fadeInLeft') {
								el.addClass('fadeInLeft ftco-animated');
							} else if ( effect === 'fadeInRight') {
								el.addClass('fadeInRight ftco-animated');
							} else {
								el.addClass('fadeInUp ftco-animated');
							}
							el.removeClass('item-animate');
						},  k * 50, 'easeInOutExpo' );
					});
					
				}, 100);
				
			}

		} , { offset: '95%' } );
	};
	contentWayPoint();


	// navigation
	var OnePageNav = function() {
		$(".smoothscroll[href^='#'], #ftco-nav ul li a[href^='#']").on('click', function(e) {
		 	e.preventDefault();

		 	var hash = this.hash,
		 			navToggler = $('.navbar-toggler');
		 	$('html, body').animate({
		    scrollTop: $(hash).offset().top
		  }, 700, 'easeInOutExpo', function(){
		    window.location.hash = hash;
		  });


		  if ( navToggler.is(':visible') ) {
		  	navToggler.click();
		  }
		});
		$('body').on('activate.bs.scrollspy', function () {
		  console.log('nice');
		})
	};
	OnePageNav();


	// magnific popup
	$('.image-popup').magnificPopup({
    type: 'image',
    closeOnContentClick: true,
    closeBtnInside: false,
    fixedContentPos: true,
    mainClass: 'mfp-no-margins mfp-with-zoom', // class to remove default margin from left and right side
     gallery: {
      enabled: true,
      navigateByImgClick: true,
      preload: [0,1] // Will preload 0 - before current, and 1 after the current image
    },
    image: {
      verticalFit: true
    },
    zoom: {
      enabled: true,
      duration: 300 // don't foget to change the duration also in CSS
    }
  });

  $('.popup-youtube, .popup-vimeo, .popup-gmaps').magnificPopup({
    disableOn: 700,
    type: 'iframe',
    mainClass: 'mfp-fade',
    removalDelay: 160,
    preloader: false,

    fixedContentPos: false
  });


  $('.book_date').datepicker({
	  'format': 'm/d/yyyy',
	  'autoclose': true
	});
	$('.book_time').timepicker();




})(jQuery);

$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

$(document).ready(function(){

	$("#createMessage").submit(function(e) {
		e.preventDefault();
		$('.sending_mail').fadeIn()
		

		var formData = new FormData(this);
	
		
		const newLocal = 'api/reserved';
		$.ajax({
		type:'POST',
		url:newLocal,
		data:formData,
		cache:false,
		contentType: false,
		processData: false, 
		success:function(data) {
			swal("","Message successfully send","success");
			$("#createMessage input").val('');
			$('.sending_mail').fadeOut()
			
		}
		});
		
	});

});




$(document).ready(function(){
	$('.add_to_cart').click(function(e){
		let id = e.target.dataset.id ;
		axios.post('/addtocart',{id}).then(res => {
			$(".cart-list").css({
				"transform" : "translateX(0)",
				"transition": "0.4s ease-in-out"
			})
			swal('','Food added to the card','success')
			show_cart_item()
		})
	})
})


function show_cart_item(){
	axios.get('/cartitem').then(res => {

		if( !res.data.length ){
			document.getElementById('s-item').style.display = 'block'
			document.getElementById('h-item').style.display = 'none'
		}else{
			document.getElementById('s-item').style.display = 'none'
			document.getElementById('h-item').style.display = 'block'
		}
		
		
		
		total_ammount = 0
		document.getElementById('cartItem').innerHTML = ''
		res.data.forEach(v => {
			let cartItem = `
				<div class="cart-item">
					<div class="row">
						<div class="col-md-8 col-8">
							<img src="/images/menu/${v.image}" width="32px" alt="">
							<p class="color-gold">${v.name} * ${v.qty} </p>
						</div>
						<div class="col-md-4 col-4 text-right cart-right">
							<p class="color-gold">USD ${v.price}</p>
							<i class="fas fa-trash delete_button_cart" data-id="${v.id}"></i>
						</div>
					</div>
				</div>
			`
			total_ammount += parseFloat(v.total)
			
			document.getElementById('cartItem').innerHTML += cartItem

			

		})

		document.getElementById('total_cart_bal').innerHTML = `${total_ammount} USD`


		delete_cart_init()
	})


	
}



function delete_cart_init(){
	let delete_button = document.getElementsByClassName('delete_button_cart');
	
	for(let i in delete_button){
		delete_button[i].onclick = (e) => {
				axios.delete(`/delete/${e.target.dataset.id}`).then(
					show_cart_item(),
					
				)
		}
	}
}