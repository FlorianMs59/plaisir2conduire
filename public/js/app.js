$(document).ready(function () {
     
    $('.navbar-toggler').on('click', function () {           
      $('.animation-btn').toggleClass('open');
      $('.navbar-nav').toggleClass('open');
    });

    $('.navbar-nav a').mouseenter(function() {
            $(this).css("color", "#fff",);
            $(this).css("font-size", "16px",);
            $(this).css("letter-spacing", "5px",);

    });

    $('.navbar-nav a').mouseout(function() {
        $(this).css("background-color", "#1a4159");
        $(this).css("color", "#FFF");
        $(this).css("font-size", "15px",);
        $(this).css("letter-spacing", "1px",);

    });

    function openNav() {
        document.getElementById("mySidenav").style.width = "100%";
      }
      
      function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
      }


    $( "#openNavbar" ).click(function() {
        $(.show).css("background-color", "#353ea7");
        $(.show).css("margin-top", "100px");

    });



});