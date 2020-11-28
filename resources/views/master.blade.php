<!DOCTYPE html>
<html lang="en">

<head>
    <title>Giorgia</title>
    <meta charset="utf-8">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Meta Tags -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Vilena template">
    <meta name="keywords" content="blog, bootstrap, company portfolio, cv template, experience, html template, one page, personal, portfolio, team members">
    <meta name="author" content="Unicoder">

    <!-- Favicons -->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">

    <!-- Font Link -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oleo+Script:400,700" rel="stylesheet">

    <!-- Required style of the theme -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/layerslider.css')}}">
    <link rel="stylesheet" href="{{asset('css/common.css')}}" >
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/color.css')}}" id="color-change">
    <link rel="stylesheet" href="{{asset('css/fontawesome-all-5.2.0.min.css')}}">
    <link rel="stylesheet" href="{{asset('webfonts/flaticon/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('css/animations.css')}}">
    <link rel="stylesheet" href="{{asset('css/custom.css')}}">
    

    @stack('styles')
</head>

<body>

    {{-- NAV BAR --}}
    {{-- @section('header')
    @show --}}
    

    <div id="page_wrapper">
        <div class="row">
            @yield('header')
            <div class="full-row p-0">
            @yield('content')
            </div>
            @yield('footer')
            <!-- Copyright Section End -->
		    <div class="scroll-to-top"> <a href="#" class="btn-scroll" data-target="body"><i class="fa fa-angle-up" aria-hidden="true"></i><b>Back to Top</b></a> </div>
        </div>
    </div>

    


    <!-- Jquery links --> 
    <script src="{{asset('js/jquery.min.js')}}"></script> 
    <script src="{{asset('js/greensock.js')}}"></script> 
    <script src="{{asset('js/layerslider.transitions.js')}}"></script> 
    <script src="{{asset('js/layerslider.kreaturamedia.jquery.js')}}"></script> 
    <script src="{{asset('js/popper.min.js')}}"></script> 
    <script src="{{asset('js/bootstrap.min.js')}}"></script> 
    <script src="{{asset('js/common.js')}}"></script>
    <script src="{{asset('js/jquery.countdown.js')}}"></script>
    <script src="{{asset('js/jquery.cookie.js')}}"></script> 
    <script src="{{asset('js/custom.js')}}"></script> 

    <!-- For Home page5 side nav --> 
    <script>
    function openNav() {
        document.getElementById("mySidenav").style.width = "250px";
        document.getElementById("main").style.marginRight = "250px";
    }

    function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
        document.getElementById("main").style.marginRight= "0";
    }
    </script>

    @stack('scripts')

</body>

</html>
