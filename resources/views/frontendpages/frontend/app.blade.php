<!DOCTYPE html>

<html lang="zxx">



<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>   

    @yield('title')

     </title>
    <!-- favicon -->
    <link rel="shortcut icon" href="{{ asset('frontend/assets/images/logo/favicon.png') }}" type="image/x-icon">

    <!--Google Font-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,600i,700" rel="stylesheet">
    <!--Bootstrap Stylesheet-->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/front/css/bootstrap.min.css') }}">

<!--Owl Carousel Stylesheet-->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/front/css/plugins/owl.carousel.min.css') }}">
    <!--Slick Slider Stylesheet-->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/front/css/plugins/slick-theme.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/front/css/plugins/slick.css') }}">
    <!--Font Awesome Stylesheet-->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/front/css/font-awesome.min.css') }}">
    <!--Animate Stylesheet-->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/front/css/plugins/animate.css') }}">
    <link href="{{ asset('frontend/assets/admin/css/toastr.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('frontend/assets/admin/css/sweetalert.css') }}" rel="stylesheet">
    <!--Main Stylesheet-->
    <link rel="stylesheet"  href="{{ asset('frontend/assets/front/css/styled19d.css?color=3842fb') }}">
    <!--Responsive Stylesheet-->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/front/css/homePageResponsive.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/front/css/jquery.autocomplete.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/front/css/flatpickr.min.css') }}">


    

    


</head>

<body class="body-class index-1">
<!--Start Preloader-->
<div class="site-preloader">
    <div class="spinner">
        <div class="double-bounce1"></div>
        <div class="double-bounce2"></div>
    </div>
</div>
<!--End Preloader-->

<div id="fb-root"></div>
<script>
    (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = '../../connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.12&appId=205856110142667&autoLogAppEvents=1';
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>

<!--Start Body Wrap-->
<div id="body-wrap">
    <div id="main-menu">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="../frontend/assets/images/logo/logo.png" alt="..">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link   active " href="{{ route('front_home_page') }}">Home</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link " href="{{route('about_page')}}">About </a>
                        </li>


                        <li class="nav-item">
                            <a class="nav-link " href="{{ route('blog') }}">Blog</a>
                        </li>


                        <li class="nav-item">
                            <a class="nav-link " href="{{ route('faq') }}">Faq</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="{{ url('/contact') }}">Contact</a>
                        </li>

               
        </ul>


             <a class="mamunur_rashid_top_book_btn" href="{{ route('front_search') }}">Buy Ticket</a>                   
                 

            
                    @guest
                        <a class="mamunur_rashid_top_book_btn" href="{{ url('/frontendpages/sign') }}">Sign In</a>
                    @endguest
               

      <!-- <------------------------------------------------------ -->
    
             <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    
                    <ul class="navbar-nav ml-auto">
                        
                        <li class="nav-item dropdown">
                         

                        
                        @auth
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" >
                        
                        {{Auth::user()->FirstName}}
                        </a>
                        @endauth



                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{route('ticket_view')}}"> View Ticket</a>
                   
                    <a class="dropdown-item" href="http://127.0.0.1:8000/logout"
                        onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();"> Logout</a>
                            
                                       
                    

                    <form id="logout-form" action="http://127.0.0.1:8000/logout" method="POST" style="display: none;">
                        @csrf
                    </form>
                    </div>
                </li>
            </ul>
        </div>
    </div>

      <!-- <------------------------------------------------------ -->

            
           



                <!-- <a class="mamunur_rashid_top_book_btn" href="{{ url('/frontendpages/sign') }}">Sign out</a> -->
                 </div>
            </div>
        </nav>
    </div>

        <!-- =========== nav end =========== -->

        @yield('content')

        <!-- footer part start -->
<footer id="contact" class="theme-footer-one">
    <div class="bottom-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-6  col-sm-12 text-center">
                    <p>&copy; Online Bus Ticket Management System 2019. All Right Reserved.</p>
                </div>
                <div class="col-md-6 col-sm-12 text-center">
                    <ul class="footer-soical">
                    <li>  <a href="#"> <i class="fa fa-facebook"></i></a></li>
                     <li>  <a href="#"> <i class="fa fa-twitter"></i></a></li>
                     <li>  <a href="#"> <i class="fa fa-linkedin"></i></a></li>
                     <li>  <a href="#"> <i class="fa fa-stack-overflow"></i></a></li>
                     </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- footer part end -->



<!--Start ClickToTop-->
<div class="totop">
    <a href="#top"><i class="fa fa-arrow-up"></i></a>
</div>
<!--End ClickToTop-->
</div>
<!--End Body Wrap-->

<!--jQuery JS-->
<script src="{{ asset('frontend/assets/front/js/jquery.2.1.2.min.js') }}"></script>
<!--Bootstrap JS-->
<script src="{{ asset('frontend/assets/front/js/bootstrap.min.js') }}"></script>
<!--Counter JS-->
<script src="{{ asset('frontend/assets/front/js/plugins/waypoints.js') }}"></script>
<script src="{{ asset('frontend/assets/front/js/plugins/jquery.counterup.min.js') }}"></script>

<script src="{{ asset('frontend/assets/admin/js/toastr.min.js') }}"></script>
<script src="{{ asset('frontend/assets/admin/js/sweetalert.js') }}"></script>


    <script src="{{ asset('frontend/assets/front/js/jquery.autocomplete.js') }}"></script>
    <script src="{{ asset('frontend/assets/front/js/flatpickr.js') }}"></script>
    
<!--Owl Carousel JS-->
<script src="{{ asset('frontend/assets/front/js/plugins/owl.carousel.min.js') }}"></script>
<!--Venobox JS-->
<script src="{{ asset('frontend/assets/front/js/plugins/venobox.min.js') }}"></script>
<!--Slick Slider JS-->
<script src="{{ asset('frontend/assets/front/js/plugins/slick.min.js') }}"></script>
<!--Main-->
<script src="{{ asset('frontend/assets/front/js/custom.js') }}"></script>



    <script type="text/javascript">
        $(document).ready(function () {
            var states = ["Location 1","Location 2"];
            $(function () {
                $("#fromAutoComplete").autocomplete({
                    source: [states]
                });
            });
            $(function () {
                $("#toAutoComplete").autocomplete({
                    source: [states]
                });
            });


            $("#datetimepicker2").flatpickr({
                minDate: "today",
                maxDate: new Date().fp_incr(50), // 14 days from now
                dateFormat: "d M Y",
            });


        });


    </script>

     

</body>



</html>
