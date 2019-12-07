<!DOCTYPE html>
<!--[if lt IE 7 ]>
<html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]>
<html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]>
<html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="zxx">
<!--<![endif]-->


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
                <a class="navbar-brand" href="#">
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
                            <a class="nav-link " href="#">About </a>
                        </li>


                        <li class="nav-item">
                            <a class="nav-link " href="#">Blog</a>
                        </li>


                        <li class="nav-item">
                            <a class="nav-link " href="#">Faq</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="#">Contact</a>
                        </li>


                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle
                                                         " href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true"
                               aria-expanded="false">Booking                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown2">
                                <a class="dropdown-item" href="login.html">Ticket Cancel</a>
                                <a class="dropdown-item" href="ticket-print.html">Print Download</a>
                            </div>
                        </li>

                <!--         <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle
                            " href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true"
       aria-expanded="false">Language    </a>
    <div class="dropdown-menu" aria-labelledby="navbarDropdown2">
        <a class="dropdown-item" href="index.html">English</a>
        <a class="dropdown-item" href="index.html">Bangla</a>
     </div>
       </li> -->    
        </ul>


             <a class="mamunur_rashid_top_book_btn" href="{{ route('front_search') }}">Buy Ticket</a>                   
                <a class="mamunur_rashid_top_book_btn" href="{{ url('/frontendpages/sign') }}">Sign In</a>
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
                    <li>  <a href="https://www.facebook.com/thesoftking"> <i class="fa fa-facebook"></i></a></li>
                     <li>  <a href="http://thesoftking.com/contact#asda"> <i class="fa fa-twitter"></i></a></li>
                     <li>  <a href="http://thesoftking.com/contact#asda"> <i class="fa fa-linkedin"></i></a></li>
                     <li>  <a href="http://thesoftking.com/contact#asda"> <i class="fa fa-stack-overflow"></i></a></li>
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
