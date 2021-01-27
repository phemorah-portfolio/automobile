<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lanre Shittu Motors</title>

    <link rel="stylesheet" href="{{ asset('assets/front_assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/front_assets/css/bootstrap-4.5.2.min.css') }}">
    <link href="{{ asset('assets/front_assets/images/favicon.png') }}" rel="icon">

    <script src="{{ asset('assets/front_assets/js/jquery-3.2.1.min.js') }}" type="text/javascript"></script>

    <!------ Include the above in your HEAD tag ---------->
</head>

<body>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5fe6e2eaa8a254155ab66479/1eqeucq9t';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
    @include('frontend.layouts.header')

        @yield('content')

	@include('frontend.layouts.footer')

	  <!-- Nav Script -->
	  <script>
        var menu = document.getElementById('menu');
        var nav = document.getElementById('nav');
        var exit = document.getElementById('exit');

        menu.addEventListener('click', function(e) {
            nav.classList.toggle('hide-mobile');
            $('#menu').toggle('hide-menu');
            e.preventDefault();
        });
        exit.addEventListener('click', function(e) {
            nav.classList.toggle('hide-mobile');
            $('#menu').toggle('hide-menu');
            e.preventDefault();
        });
      </script>
    <!-- End Nav Script -->

</body>
</html>
