

// ISOTOPE FILTER

jQuery(document).ready(function($){

	if ( $('.iso-box-wrapper').length > 0 ) { 

	    var $container 	= $('.iso-box-wrapper'), 
	    	$imgs 		= $('.iso-box img');



	    $container.imagesLoaded(function () {

	    	$container.isotope({
				layoutMode: 'fitRows',
				itemSelector: '.iso-box'
	    	});

	    	$imgs.load(function(){
	    		$container.isotope('reLayout');
	    	})

	    });

	    //filter items on button click

	    $('.filter-wrapper li a').click(function(){

	        var $this = $(this), filterValue = $this.attr('data-filter');

			$container.isotope({ 
				filter: filterValue,
				animationOptions: { 
				    duration: 750, 
				    easing: 'linear', 
				    queue: false, 
				}              	 
			});	            

			// don't proceed if already selected 

			if ( $this.hasClass('selected') ) { 
				return false; 
			}

			var filter_wrapper = $this.closest('.filter-wrapper');
			filter_wrapper.find('.selected').removeClass('selected');
			$this.addClass('selected');

	      return false;
	    }); 

	}

});


// MAIN NAVIGATION

 $('.main-navigation').onePageNav({
        scrollThreshold: 0.2, // Adjust if Navigation highlights too early or too late
        scrollOffset: 75, //Height of Navigation Bar
        filter: ':not(.external)',
        changeHash: true
    }); 

    /* NAVIGATION VISIBLE ON SCROLL */
    mainNav();
    $(window).scroll(function () {
        mainNav();
    });

    function mainNav() {
        var top = (document.documentElement && document.documentElement.scrollTop) || document.body.scrollTop;
        if (top > 40) $('.sticky-navigation').stop().animate({
            "opacity": '1',
            "top": '0'
        });
        else $('.sticky-navigation').stop().animate({
            "opacity": '0',
            "top": '-75'
        });
    }


// HIDE MOBILE MENU AFTER CLIKING ON A LINK

    $('.navbar-collapse a').click(function(){
        $(".navbar-collapse").collapse('hide');
    });

	
	let exprEmail = /^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-z0-9\-\.]+$/;

	
	$('#btn_contacto').click(function() {

		// para el inicio de sesion desde el archivo index
		let campo_emailContacto = $('#campo_emailContacto').val();
		let campo_asuntoContacto = $('#campo_asuntoContacto').val();
		let campo_mensajeContacto = $('#campo_mensajeContacto').val();

		if(campo_emailContacto == '' || !exprEmail.test(campo_emailContacto)){
			$('#alert_emailContacto').removeClass('d-none');
			return false;
		}else{
			$('#alert_emailContacto').addClass('d-none');

			if(campo_asuntoContacto == ''){
				$('#alert_asuntoContacto').removeClass('d-none');
				return false;
			}else{
				$('#alert_asuntoContacto').addClass('d-none');
				if(campo_mensajeContacto == '' || campo_mensajeContacto == ' '){
					$('#alert_mensajeContacto').removeClass('d-none');
					return false;
				}else{
					$('#alert_mensajeContacto').addClass('d-none');
				}
			}
		}
	});