<div class="footer-aria">
       <div class="container">
          <div class="row">
             
             <div class="footer-social">
                   <p uk-scrollspy="cls: uk-animation-slide-bottom; delay: 500;">Connect Social Links</p>
                      <ul>
                <li><a href="https://www.facebook.com/imran.rahman.338" target="blank"><i class="fa fa-facebook"></i></a></li>
                <li><a href="https://www.linkedin.com/in/imran789/" target="blank">
                <i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                <li><a href=""  target="blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                <li><a href=""  target="blank">
                <i class="fa fa-google-plus"></i></a></li>
                <li><a href=""  target="blank">
                <i class="fa fa-youtube"></i></a></li>

                      </ul>
                   </div>

                </div>

        
    </div>
         

</div>
<div class="footer-copyright">

    <div class="container">
      <div class="row">
        <p uk-scrollspy="cls: uk-animation-slide-top; delay: 500;" class="text-center">&copy; By Imran Rahman</p>
      </div>
    </div>
  

</div>
    <div class="top">
       <i class="fa fa-arrow-up"></i>
    </div>
     <!-- typeit -->
    <script src="https://code.jquery.com/jquery-3.0.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.typeit/4.4.0/typeit.min.js"></script>
     <script>
      $('#effect').typeIt({
           strings: ["Hello I Am Imran", "Frontend & Backend  Developer."],
           speed: 300,
           breakLines: false,
           autoStart: false,
           loop: true,
           loopDelay:1150
      });
    </script>
    <script src="{{ asset('public/frontEnd/js/jquery-1.11.3.min.js')}}"></script>
    <script src="{{ asset('public/frontEnd/')}}/js/jquery.nicescroll.min.js"></script>
<script>
  $("body").niceScroll({
cursorcolor:"yellowgreen",
cursorwidth:"7px",
cursorborder:"1px solid aquamarine",
cursorborderradius:5
});
</script>
            <!-- script-for Counter -->
<script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
<script src="{{ asset('public/frontEnd/js/jquery.counterup.min.js')}}"></script>
     <script>
         $('.counter').counterUp({
              delay: 2,
              time: 1000
          });
         
         
  </script>
      <script src="{{ asset('public/frontEnd/js/jquery.prettyPhoto.js')}}" type="text/javascript" charset="utf-8"></script>
      <script type="text/javascript" charset="utf-8">
        $(document).ready(function(){
          $("a[rel^='prettyPhoto']").prettyPhoto({

          theme: 'light_square',
          horizontal_padding: 40, 

          });
        });
      </script>


   
    <!--
       <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
       <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
       -->
    <script>
       $(document).ready(function() {
           // Show or hide the sticky footer button
           $(window).scroll(function() {
               if ($(this).scrollTop() > 400) {
                   $('.top').fadeIn(400);
               } else {
                   $('.top').fadeOut(400);
               }
           });
       
           // Animate the scroll to top
           $('.top').click(function(event) {
               event.preventDefault();
       
               $('html, body').animate({scrollTop: 0}, 600);
           })
       });
    </script> 
     <script src="{{ asset('public/frontEnd/js/uikit.min.js')}}"></script>
    <script src="{{ asset('public/frontEnd/js/parallax.js')}}"></script>
    <script src="{{ asset('public/frontEnd/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('public/frontEnd/js/jquery.sticky.js')}}"></script>
    <script src="{{ asset('public/frontEnd/js/jquery.easing.1.3.js')}}"></script>  
    <script src="{{ asset('public/frontEnd/js/main.js')}}"></script>
    <script src="{{ asset('public/frontEnd/js/imagesloaded.js')}}"></script>
    <script src="{{ asset('public/frontEnd/js/skrollr.js')}}"></script>
    <script src="{{ asset('public/frontEnd/js/_main.js')}}"></script>
 </body>
</html>