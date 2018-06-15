( function( $ ) {
    $( document ).ready(function() {
        /*
        https://www.jqueryscript.net/animation/Smooth-Mouse-Wheel-Scrolling-Plugin-With-jQuery-easeScroll.html
        ===========================*/
        $("html").easeScroll({
            frameRate: 60,
            animationTime: 1000,
            stepSize: 90,
            pulseAlgorithm: 1,
            pulseScale: 8,
            pulseNormalize: 1,
            accelerationDelta: 20,
            accelerationMax: 1,
            keyboardSupport: true,
            arrowScroll: 50,
            touchpadSupport: true,
            fixedBackground: true
        });

        $('#js-slider').slick({
            'arrows': false,
            'asNavFor': '.slider-small',
            'fade': true
        });

        $('#js-slider-small').slick({
            'arrows': false,
            'slidesToShow': 5,
            'slidesToScroll': 3,
            'asNavFor': '.slider',
            'focusOnSelect': true,
            responsive: [
                {
                  breakpoint: 1200,
                  settings: {
                    slidesToShow: 4
                  }
                },
                {
                  breakpoint: 992,
                  settings: {
                    slidesToShow: 3
                  }
                },
                {
                  breakpoint: 486,
                  settings: {
                    slidesToShow: 2
                  }
                }
              ]
        });

        /* Mobile */
        $("#menu-trigger").on("click", function(){
            $("#menu").slideToggle();
        });

        // iPad
        var isiPad = navigator.userAgent.match(/iPad/i) != null;
        if (isiPad) $('#menu ul').addClass('no-transition');

        $('#cssmenu').prepend('<div id="menu-button">Menu</div>');

        $('#cssmenu #menu-button').on('click', function(){
            var menu = $(this).next('ul');
              if (menu.hasClass('open')) {
                 menu.removeClass('open');
             }
             else {
                 menu.addClass('open');
             }
        });
    });
} )( jQuery );


