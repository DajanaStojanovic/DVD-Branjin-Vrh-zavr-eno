<?php include_once 'konfiguracija.php'; ?>
 <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

<script src="js/bootstrap.js"></script>
 <script>
            $("#carousel").carousel();
        </script>




  <script type='text/javascript'>
  
  $(document).ready(function() {
onScrollHandler = function() {
  var newImageUrl = #logo.src;
  var scrollTop = document.documentElement.scrollTop || document.body.scrollTop;
  if ($(document).scrollTop() > 50) {
     newImageUrl = "slike/logo.png"
  }

  #logo.src = newImageUrl;
};
object.addEventListener ("scroll", onScrollHandler);       
     </script>      
     
        
        <script type='text/javascript'>
        
        $(document).ready(function() {
        
            $(window).scroll(function() {
  if ($(document).scrollTop() > 100) {
    $('nav').addClass('shrink')
    $('.navtext').addClass('navtext1');
    $('.logo').addClass('logo1');
  } else {
    $('nav').removeClass('shrink');
    $('.navtext').removeClass('navtext1');
    $('.logo').removeClass('logo1');
  }
});
        
        });
        
        </script>