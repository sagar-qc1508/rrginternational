<!doctype html>
<html>
<head>
   @include('includes.head')
</head>
<body>

   
   @include('includes.header')
   
   
   @yield('content')
   
   
   @include('includes.footer')
   

</body>

<!-- jQuery JS -->
<script src="{{ URL::asset('public/frontend/assets/js/jquery-1.12.4.min.js') }}"></script>
<!-- Popper JS -->
<script src="{{ URL::asset('public/frontend/assets/js/popper.min.js') }}"></script>
<!-- Bootstrap JS -->
<script src="{{ URL::asset('public/frontend/assets/js/bootstrap.min.js') }}"></script>
<!-- Plugins JS -->
<script src="{{ URL::asset('public/frontend/assets/js/plugins.js') }}"></script>
<!-- Main JS -->
<script src="{{ URL::asset('public/frontend/assets/js/main.js') }}"></script>

<script src="{{ URL::asset('public/frontend/assets/js/owl.carousel.min.js') }}"></script>
<script src="{{ URL::asset('public/frontend/assets/js/jquery.validate.min.js') }}"></script>
<script src="{{ URL::asset('public/frontend/assets/js/custom.js') }}"></script>

<!-- Testimonials JS -->
<script>
$(document).ready(function(){
    $("#testimonial-slider").owlCarousel({
        items:2,
        itemsDesktop:[1000,3],
        itemsDesktopSmall:[980,2],
        itemsTablet:[768,2],
        itemsMobile:[650,1],
        pagination:true,
        navigation:false,
        slideSpeed:1000,
        autoPlay:true
    });
});
</script> 

<!-- Modal Video -->
<script language="JavaScript">
$(".VideoPopup").on('hidden.bs.modal', function (e) {
     $(".VideoPopup iframe").attr("src",   $(".VideoPopup iframe").attr("src"));
});
</script>
<!-- Modal Video End -->
</html>