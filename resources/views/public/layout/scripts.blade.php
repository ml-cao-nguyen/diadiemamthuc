<!--  jquery plguin -->
<script type="text/javascript" src="{{ asset('template/public/js/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('template/public/js/flexy-menu.js') }}"></script>
<script type="text/javascript">$(document).ready(function(){$(".flexy-menu").flexymenu({speed: 400,type: "horizontal",align: "right"});});
</script>
<!--start slider -->
<script src="{{ asset('template/public/js/responsiveslides.min.js') }}"></script>
<script>
// You can also use "$(window).load(function() {"
    $(function () {
            // Slideshow 1
            $("#slider1").responsiveSlides({
            maxwidth: 1600,
            speed: 600
            });
    });
</script>
