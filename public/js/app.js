$(document).ready(function () {
     
    $('.navbar-toggler').on('click', function () {           
      $('.animation-btn').toggleClass('open');
      $('.navbar-nav').toggleClass('open');
    });

    $('.navbar-nav a').mouseenter(function() {
            $(this).css("color", "#7a2048",);
            $(".nav-link").css("background-color", "#7a2048",);
            $(this).css("font-size", "16px",);
            $(this).css("letter-spacing", "2px",);

    });

    $('.navbar-nav a').mouseout(function() {
        $(this).css("color", "#FFF");
        $(".nav-link").css("background-color", "#1e2761",);
        $(this).css("font-size", "15px",);
        $(this).css("letter-spacing", "1px",);
    });





});