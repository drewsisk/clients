</div>

<!-- End of Content  -->

</body>

<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.js"></script>

  <script type="text/javascript" src="jquery.sticky.js"></script>
    <script>
    $(window).load(function(){
      $("#stick").sticky({ topSpacing: 0 });
      elem.style.width = "auto";
    });
  </script>

<script type="text/javascript" src="jquery.color-2.1.0.js"></script>


<script>
$(document).ready(function(){ 
    //** notice we are including jquery and the color plugin at 
    //** http://code.jquery.com/color/jquery.color-2.1.0.js
    
    var scroll_pos = 0;
    var animation_begin_pos = 0; //where you want the animation to begin
    var animation_end_pos = 2400; //where you want the animation to stop
    var beginning_color = new $.Color( 'rgb(215,119,27)' ); //we can set this here, but it'd probably be better to get it from the CSS; for the example we're setting it here.
    var ending_color = new $.Color( 'rgb(255,242,0)' ); ;//what color we want to use in the end
    $(document).scroll(function() {
        scroll_pos = $(this).scrollTop(); 
        if(scroll_pos >= animation_begin_pos && scroll_pos <= animation_end_pos ) { 
           // console.log( 'scrolling and animating' );
            //we want to calculate the relevant transitional rgb value
            var percentScrolled = scroll_pos / ( animation_end_pos - animation_begin_pos );
            var newRed = beginning_color.red() + ( ( ending_color.red() - beginning_color.red() ) * percentScrolled );
            var newGreen = beginning_color.green() + ( ( ending_color.green() - beginning_color.green() ) * percentScrolled );
            var newBlue = beginning_color.blue() + ( ( ending_color.blue() - beginning_color.blue() ) * percentScrolled );
            var newColor = new $.Color( newRed, newGreen, newBlue );
            //console.log( newColor.red(), newColor.green(), newColor.blue() );
            $('body').animate({ backgroundColor: newColor }, 0);
        } else if ( scroll_pos > animation_end_pos ) {
             $('body').animate({ backgroundColor: ending_color }, 0);
        } else if ( scroll_pos < animation_begin_pos ) {
             $('body').animate({ backgroundColor: beginning_color }, 0);
        } else { }
    });
});
</script>

<script src='https://code.jquery.com/ui/1.11.4/jquery-ui.js'></script>
<script src='http://cdn.jsdelivr.net/jquery.ui.rotatable/1.0.1/jquery.ui.rotatable.min.js'></script>
<script src="js/dragresize.js"></script>

<script>
$("div").click(function() {
    $("div").css("zIndex", 1);
    $(this).css("zIndex", 1000000);
});
</script>

<script>

// pure JS
var elem = document.getElementById('mySwipe');
window.mySwipe = Swipe(elem, {
  // startSlide: 4,
  // auto: 3000,
  // continuous: true,
  // disableScroll: true,
  // stopPropagation: true,
  // callback: function(index, element) {},
  // transitionEnd: function(index, element) {}
});

// with jQuery
// window.mySwipe = $('#mySwipe').Swipe().data('Swipe');

</script>

<script>
    $('.bringtofront').click(function(){
    $('.front').removeClass('front');
    $(this).addClass('front');
});
</script>