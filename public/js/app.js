$(document).ready(function () {
     
    $('.navbar-toggler').on('click', function () {           
      $('.animation-btn').toggleClass('open');
      $('.navbar-nav').toggleClass('open');
    });

    $('.navbar-nav a').mouseenter(function() {
            $(this).css("color", "#fff",);
            $(this).css("font-size", "16px",);
            $(this).css("letter-spacing", "2px",);

    });

    $('.navbar-nav a').mouseout(function() {
        $(this).css("background-color", "#1a4159");
        $(this).css("color", "#FFF");
        $(this).css("font-size", "15px",);
        $(this).css("letter-spacing", "1px",);
    });





});