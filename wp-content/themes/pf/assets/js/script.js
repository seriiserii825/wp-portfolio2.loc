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


