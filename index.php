<!DOCTYPE html>
<html>
<head>
 
  <link rel="stylesheet" href="css/all.css"/>
      
  <title>
    Shasta PSD to HTML 
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>

<?php   include 'header.php';
        include 'two.php';
        include 'community.html';
        include 'what-people-say.html';
        include 'liberating.html';
        include 'invest.html';
        include 'culture.html';
        include 'your-next-move.html';
        include 'join-our-program.php';
        include 'footer.php';
?>


  <script src="https://vjs.zencdn.net/ie8/1.1.2/videojs-ie8.min.js"></script>
  <script src="https://vjs.zencdn.net/6.2.4/video.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

  <script>
    
     $(document).ready(function() {
      $(".vjs-big-play-button").wrap("<div class=fcfh></div>")
      $("#top-nav-links>a").append(" <span class='underline'></span>"); 
    });
     $(document).on("scroll", function() {

      if ($(document).scrollTop() > 100) {
        $(".desktop-topbar-container").addClass("topbar-after-scroll");
        $(".nav").addClass("changeBG");
        $(".nav-mobile").addClass("topbar-after-scroll");
      } else {
        $(".desktop-topbar-container").removeClass("topbar-after-scroll");
        $(".nav").removeClass("changeBG");
        $(".nav-mobile").removeClass("topbar-after-scroll");
      }

    });
  </script>
  <script src="js/m-dd.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
   <script type="text/javascript">
    $(document).ready(function(){
      $('.community-slider').slick({
        infinite: true,
        slidesToShow: 3,
        variableWidth: true,
        prevArrow: "<img class='a-left control-c prev slick-prev' src='img/LeftArrow.svg'>",
        nextArrow: "<img class='a-left control-c prev slick-prev' src='img/RightArrow.svg'>",

         responsive: [
    {
      breakpoint: 1100,
      settings: {
        slidesToShow: 2,
        infinite: true,
      }
    },
    {
      breakpoint: 750,
      settings: {
        slidesToShow: 1
      }
    },
    
    ]

      });
    });
  </script>
  <script type="text/javascript">
    $(document).ready(function(){
      $('.what-people-say-slider').slick({
        infinite: true,
        slidesToShow: 2,
        variableWidth: false,
        prevArrow: "<img class='a-left control-c prev slick-prev' src='img/LeftArrow.svg'>",
        nextArrow: "<img class='a-left control-c prev slick-prev' src='img/RightArrow.svg'>",

         responsive: [
    {
      breakpoint: 1100,
      settings: {
        slidesToShow: 1,
        infinite: true,
      }
    },
    {
      breakpoint: 750,
      settings: {
        slidesToShow: 1
      }
    },
    
    ]

      });
    });
  </script>

</body>
</html>