<!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="node_modules/jquery/dist/jquery.slim.min.js"></script>
    <script src="node_modules/tether/dist/js/tether.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="node_modules/wowjs/dist/wow.min.js"></script>

<!-- Webfont Loader -->
<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js"></script>
<script>
  WebFont.load({

  	<?php if ($type_foundry == 'Google') { ?>
    google: {
      families: [<?php echo $fonts_google ?>]
    }
  	<?php } ?>

  	<?php if ($type_foundry == 'Typekit') { ?>
	  typekit: {
	    id: '<?php echo $fonts_typekit ?>',
	    api: '//use.edgefonts.net'
	  }
  	<?php } ?>

  });
</script>

<?php  //SVG FAllback ?>
<script>
  function svgasimg() {
  return document.implementation.hasFeature(
    "http://www.w3.org/TR/SVG11/feature#Image", "1.1");
}
if (!svgasimg()){
  var e = document.getElementsByTagName("img");
  if (!e.length){
    e = document.getElementsByTagName("IMG");
  }
  for (var i=0, n=e.length; i<n; i++){
    var img = e[i],
        src = img.getAttribute("src");
    if (src.match(/svgz?$/)) {
      /* URL ends in svg or svgz */
      img.setAttribute("src", 
             img.getAttribute("data-fallback"));
    }
  }    
}
</script>

<?php  //Form Validation ?>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>
<script>
  $.validate({
    lang: 'es'
  });
</script>

<?php //Wow Animation ?>
<script>
  var wow = new WOW({
    boxClass: 'wow', // animated slideInUp fadeIn element css class (default is wow)
    animateClass: 'animated', // animation css class (default is animated)
    offset: 0, // distance to the element when triggering the animation (default is 0)
    mobile: true, // trigger animations on mobile devices (default is true)
    live: true, // act on asynchronously loaded content (default is true)
    callback: function(box) {
      // the callback is fired every time an animation is started
      // the argument that is passed in is the DOM node being animated
    },
    scrollContainer: null // optional scroll container selector, otherwise use window
  });
  wow.init();
</script>


<?php  //GSAP<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.1/TweenMax.min.js"></script> ?>

<script>
  //var photo = document.getElementById("cover");
  //TweenMax.from(photo, 5, {opacity:0});
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.2/js/swiper.jquery.min.js"></script>
<script>        
  var mySwiper = new Swiper ('.swiper-container', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,
    autoplay: 4000,
    autoHeight: true,
    paginationHide: true,
    
    // If we need pagination
    pagination: '.swiper-pagination',
    
    // Navigation arrows
    nextButton: '.swiper-button-next',
    prevButton: '.swiper-button-prev',
    
    // And if we need scrollbar
    scrollbar: '.swiper-scrollbar',
  })        
</script>