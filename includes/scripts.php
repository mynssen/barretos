<!-- //jQuery// -->
<script src="js/jquery.min.js"></script>

<!-- //Bootstrap// -->
<script src="js/bootstrap.min.js"></script>    

<!-- //Scroll suave// -->
<script type="text/javascript" src="js/jquery.scrollspeed.js"></script>
<script type="text/javascript">
  jQuery.scrollSpeed(100, 1000);
</script> 

<!-- //Navbar - Alteração de estilo// -->
<script type="text/javascript">
  $(window).scroll(function() {    
    var scroll = $(window).scrollTop();

    if (scroll >= 200) {
        $(".navbar-default").addClass("darkHeader");
    } else {
        $(".navbar-default").removeClass("darkHeader");
    }

  });
</script>

<!-- //Âncoras// -->
<script type="text/javascript">
  $(function() {
    $('a[href*=#]:not([href=#])').click(function() {
      if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
        if (target.length) {
          $('html,body').animate({
            scrollTop: target.offset().top
          }, 1000);
          return false;
        }
      }
    });
  });
</script> 

<!-- //Stellar// -->
<script type="text/javascript" src="js/jquery.stellar.js"></script>
<script type="text/javascript">
  $.stellar();
</script>

<!-- //MixItUp Portfólio// -->
<script type="text/javascript" src="js/jquery.mixitup.min.js"></script>
<script type="text/javascript">
  $(function(){
    $('#mixitup').mixItUp();
  });
</script>   

<!-- //Fancybox// -->
<script type="text/javascript" src="fancybox/jquery.fancybox.js?v=2.1.5"></script>
<script type="text/javascript">
  $(document).ready(function() {
    $('.fancybox').fancybox();
  });
</script>

<!-- //Flexslider// -->
<script src="js/jquery.flexslider-min.js"></script>
<script type="text/javascript" charset="utf-8">
  $(window).load(function() {
    $('.flexslider').flexslider({
      directionNav: false
    });
  });
</script>