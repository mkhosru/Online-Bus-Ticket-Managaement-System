<!DOCTYPE html>
<html lang="zxx">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>   ROUTE : {{ $bus_depearture }} To {{ $bus_destination }}  </title>
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
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/admin/css/select2.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/front/css/flatpickr.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/front/css/seat-custom.css') }}">

</head>

<!-- {{ asset('frontend/') }} -->

<body class="body-class bc blog">
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
        js.src = '../../../connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.12&appId=205856110142667&autoLogAppEvents=1';
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>

<!--Start Body Wrap-->
<div id="body-wrap">
    <div id="main-menu">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="/frontend/assets/images/logo/logo.png" alt="..">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link  " href="{{ route('front_home_page') }}">Home</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link " href="{{ route('about_page') }}">About</a>
                        </li>


                        <li class="nav-item">
                            <a class="nav-link " href="">Blog</a>
                        </li>


                        <li class="nav-item">
                            <a class="nav-link " href="{{ route('faq') }}">Faq</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="{{ url('/contact') }}">Contact</a>
                        </li>


                       <!--  <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle
                                                         " href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true"
                               aria-expanded="false">Booking                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown2">
                                <a class="dropdown-item" href="../login.html">Ticket cancel</a>
                                <a class="dropdown-item" href="../ticket-print.html">Ticket Download</a>
                            </div>
                        </li> -->

<!-- <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle
    " href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true"
       aria-expanded="false">Language    </a>
    <div class="dropdown-menu" aria-labelledby="navbarDropdown2">
            <a class="dropdown-item" href="#">English</a>
                   
</div>
</li>   -->
 </ul>


             <a class="mamunur_rashid_top_book_btn" href="{{ route('front_search')}}">Buy Ticket</a>
                        
          <!-- ------------------------------------------------------------           -->
                        @guest
                        <a class="mamunur_rashid_top_book_btn" href="{{ url('/frontendpages/sign') }}">Sign In</a>
                    @endguest


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
                    <a class="dropdown-item" href="#"> Ticket Download</a>
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


        <!-- ---------------------------------------------------------- -->

                        </div>
            </div>
        </nav>
    </div>

        <section id="breadcrumb">
    <div class="overly"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-10 text-center">
                <div class="breadcrumbinfo">
                    <article>
                        <h2>ROUTE :{{ $bus_depearture }} To {{ $bus_destination }}</h2>
                       <!--  <a href="#">Home</a> <span>/</span>
                        <a class="active" href="1148.html">ROUTE 02</a> -->
                    </article>
                </div>
            </div>
        </div>
    </div>
</section>

        <!-- =========== Main Ticket Booking Area Start ===================== -->
    <div id="ticket-booking">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                                <h4>BUS COMPANY</h4>
                        <div class="margin-bottom-10"></div>
                                <h6>{{ $bus_name }}</h6>
                                <h6>Coach Type: {{ $Bus_coach }}</h6>
                        <div class="margin-bottom-10"></div>
                    
    <p><strong><span class="text-danger">Route Name:</span> {{ $bus_depearture }} To {{ $bus_destination }}</strong></p>
                            
                        <div class="margin-bottom-10"></div>
                    
                    <p>Dep Time: {{ $bus_time }} <span
                                class="text-success">(Date:{{ $bus_date }})</span></p>
                    <div class="margin-bottom-5"></div>
                    <strong>Total Seat: {{ $total_seat_id }}</strong>
                    <div class="margin-bottom-5"></div>
                    <strong>Ticket Price : {{ $ticket_price }} TAKA</strong>
                    <!-- <strong>Ticket Price : {{ $bus_depearture }}</strong> -->
                </div>
            </div>

            <div class="margin-bottom-60"></div>

            <div class="row">
                <div class="offset-md-1 col-md-5 col-sm-10 ">
                    <div class="row text-center">
                        <div class="col-4">
                            <div class="seat  ">
                                <div class='seat-body'>
                                    <span class='seat-handle-left'></span>
                                    <span class='seat-handle-right'></span>
                                    <span class='seat-bottom'></span>
                                </div>
                            </div>
                            <p>Available Seat</p>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <div class="seat ChooseSeat selected ">
                                <div class='seat-body'>
                                    <span class='seat-handle-left'></span>
                                    <span class='seat-handle-right'></span>
                                    <span class='seat-bottom'></span>
                                </div>
                            </div>
                            <p>Selected Seat</p>
                        </div>


                        <div class="col-md-4 col-sm-4">
                            <div class="seat ladies last-seat seat occupied ChooseSeat ">
                                <div class='seat-body'>
                                    <span class='seat-handle-left'></span>
                                    <span class='seat-handle-right'></span>
                                    <span class='seat-bottom'></span>
                                </div>
                            </div>
                            <p>Booked Seat</p>
                        </div>
                    </div>
                    <div class="margin-bottom-40"></div>

                    <div class="all-seats">
                        <div class='row'>
                            @if(in_array("A1", $actual_seat))
                            <div class='col-2'>
                                    <div class='seat ladies last-seat seat occupied '>
                                        <div class='seat-body'>
                                            A1
                                            <span class='seat-handle-left'></span>
                                            <span class='seat-handle-right'></span>
                                            <span class='seat-bottom'></span>
                                        </div>
                                    </div>
                                </div>
                                @else

                                
                                 <div class='col-2'>
                                    <div class='seat occupied ChooseSeat ' data-item=''>
                                        <div class='seat-body'>
                                            A1
                                            <span class='seat-handle-left'></span>
                                            <span class='seat-handle-right'></span>
                                            <span class='seat-bottom'></span>
                                        </div>
                                    </div>
                                </div>
                                @endif


                                 @if(in_array("A2", $actual_seat))
                                <div class='col-2'>
                                <div class='seat ladies last-seat seat occupied'>
                                        <div class='seat-body'>
                                            A2
                                            <span class='seat-handle-left'></span>
                                            <span class='seat-handle-right'></span>
                                            <span class='seat-bottom'></span>
                                        </div>
                                    </div>
                                </div>
                                @else
                                <div class='col-2'>
                                    <div class='seat occupied ChooseSeat ' data-item=''>
                                        <div class='seat-body'>
                                            A2
                                            <span class='seat-handle-left'></span>
                                            <span class='seat-handle-right'></span>
                                            <span class='seat-bottom'></span>
                                        </div>
                                    </div>
                                </div>
                                @endif


                                <div class='col-2'>&nbsp;</div>
                                @if(in_array("A3", $actual_seat))
                                <div class='col-2'>
                                    <div class='seat ladies last-seat seat occupied'>
                                        <div class='seat-body'>
                                            A3
                                            <span class='seat-handle-left'></span>
                                            <span class='seat-handle-right'></span>
                                            <span class='seat-bottom'></span>
                                        </div>
                                    </div>
                                </div>
                                @else
                                <div class='col-2'>
                                    <div class='seat occupied ChooseSeat ' data-item=''>
                                        <div class='seat-body'>
                                            A3
                                            <span class='seat-handle-left'></span>
                                            <span class='seat-handle-right'></span>
                                            <span class='seat-bottom'></span>
                                        </div>
                                    </div>
                                </div>
                                @endif
                                @if(in_array("A4", $actual_seat))
                                <div class='col-2'>
                                    <div class='seat ladies last-seat seat occupied'>
                                        <div class='seat-body'>
                                            A4
                                            <span class='seat-handle-left'></span>
                                            <span class='seat-handle-right'></span>
                                            <span class='seat-bottom'></span>
                                        </div>
                                    </div>
                                </div>
                                @else
                                <div class='col-2'>
                                    <div class='seat occupied ChooseSeat ' data-item=''>
                                        <div class='seat-body'>
                                            A4
                                            <span class='seat-handle-left'></span>
                                            <span class='seat-handle-right'></span>
                                            <span class='seat-bottom'></span>
                                        </div>
                                    </div>
                                </div>
                                @endif
                        </div>
                        <div class='row'>
                             
                                @if(in_array("B1", $actual_seat))
                                <div class='col-2'>
                                    <div class='seat ladies last-seat seat occupied'>
                                        <div class='seat-body'>
                                            B1
                                            <span class='seat-handle-left'></span>
                                            <span class='seat-handle-right'></span>
                                            <span class='seat-bottom'></span>
                                        </div>
                                    </div>
                                </div>
                                @else
                                <div class='col-2'>
                                    <div class='seat occupied ChooseSeat ' data-item=''>
                                        <div class='seat-body'>
                                            B1
                                            <span class='seat-handle-left'></span>
                                            <span class='seat-handle-right'></span>
                                            <span class='seat-bottom'></span>
                                        </div>
                                    </div>
                                </div>
                                @endif

                                @if(in_array("B2", $actual_seat))
                                <div class='col-2'>
                                    <div class='seat ladies last-seat seat occupied'>
                                        <div class='seat-body'>
                                            B2
                                            <span class='seat-handle-left'></span>
                                            <span class='seat-handle-right'></span>
                                            <span class='seat-bottom'></span>
                                        </div>
                                    </div>
                                </div>
                                @else
                                <div class='col-2'>
                                    <div class='seat occupied ChooseSeat ' data-item=''>
                                        <div class='seat-body'>
                                            B2
                                            <span class='seat-handle-left'></span>
                                            <span class='seat-handle-right'></span>
                                            <span class='seat-bottom'></span>
                                        </div>
                                    </div>
                                </div>
                                @endif
                                <div class='col-2'>&nbsp;</div>
                                @if(in_array("B3", $actual_seat))
                                <div class='col-2'>
                                    <div class='seat ladies last-seat seat occupied'>
                                        <div class='seat-body'>
                                            B3
                                            <span class='seat-handle-left'></span>
                                            <span class='seat-handle-right'></span>
                                            <span class='seat-bottom'></span>
                                        </div>
                                    </div>
                                </div>
                                @else
                                <div class='col-2'>
                                    <div class='seat occupied ChooseSeat ' data-item=''>
                                        <div class='seat-body'>
                                            B3
                                            <span class='seat-handle-left'></span>
                                            <span class='seat-handle-right'></span>
                                            <span class='seat-bottom'></span>
                                        </div>
                                    </div>
                                </div>
                                @endif
                                @if(in_array("B4", $actual_seat))
                                <div class='col-2'>
                                    <div class='seat ladies last-seat seat occupied'>
                                        <div class='seat-body'>
                                            B4
                                            <span class='seat-handle-left'></span>
                                            <span class='seat-handle-right'></span>
                                            <span class='seat-bottom'></span>
                                        </div>
                                    </div>
                                </div>
                                @else
                                <div class='col-2'>
                                    <div class='seat occupied ChooseSeat ' data-item=''>
                                        <div class='seat-body'>
                                            B4
                                            <span class='seat-handle-left'></span>
                                            <span class='seat-handle-right'></span>
                                            <span class='seat-bottom'></span>
                                        </div>
                                    </div>
                                </div>
                                @endif
                    </div>
                            <div class='row'>
                                @if(in_array("C1", $actual_seat))
                                <div class='col-2'>
                                    <div class='seat ladies last-seat seat occupied'>
                                        <div class='seat-body'>
                                            C1
                                            <span class='seat-handle-left'></span>
                                            <span class='seat-handle-right'></span>
                                            <span class='seat-bottom'></span>
                                        </div>
                                    </div>
                                </div>
                                @else
                                <div class='col-2'>
                                    <div class='seat occupied ChooseSeat ' data-item=''>
                                        <div class='seat-body'>
                                            C1
                                            <span class='seat-handle-left'></span>
                                            <span class='seat-handle-right'></span>
                                            <span class='seat-bottom'></span>
                                        </div>
                                    </div>
                                </div>
                                @endif

                               @if(in_array("C2", $actual_seat))
                                <div class='col-2'>
                                    <div class='seat ladies last-seat seat occupied'>
                                        <div class='seat-body'>
                                            C2
                                            <span class='seat-handle-left'></span>
                                            <span class='seat-handle-right'></span>
                                            <span class='seat-bottom'></span>
                                        </div>
                                    </div>
                                </div>
                                @else
                                <div class='col-2'>
                                    <div class='seat occupied ChooseSeat ' data-item=''>
                                        <div class='seat-body'>
                                            C2
                                            <span class='seat-handle-left'></span>
                                            <span class='seat-handle-right'></span>
                                            <span class='seat-bottom'></span>
                                        </div>
                                    </div>
                                </div>
                                @endif
                                <div class='col-2'>&nbsp;</div>
                                @if(in_array("C3", $actual_seat))
                                <div class='col-2'>
                                    <div class='seat ladies last-seat seat occupied'>
                                        <div class='seat-body'>
                                            C3
                                            <span class='seat-handle-left'></span>
                                            <span class='seat-handle-right'></span>
                                            <span class='seat-bottom'></span>
                                        </div>
                                    </div>
                                </div>
                                @else
                                <div class='col-2'>
                                    <div class='seat occupied ChooseSeat ' data-item=''>
                                        <div class='seat-body'>
                                            C3
                                            <span class='seat-handle-left'></span>
                                            <span class='seat-handle-right'></span>
                                            <span class='seat-bottom'></span>
                                        </div>
                                    </div>
                                </div>
                                @endif
                                @if(in_array("C4", $actual_seat))
                                <div class='col-2'>
                                    <div class='seat ladies last-seat seat occupied'>
                                        <div class='seat-body'>
                                            C4
                                            <span class='seat-handle-left'></span>
                                            <span class='seat-handle-right'></span>
                                            <span class='seat-bottom'></span>
                                        </div>
                                    </div>
                                </div>
                                @else
                                <div class='col-2'>
                                    <div class='seat occupied ChooseSeat ' data-item=''>
                                        <div class='seat-body'>
                                            C4
                                            <span class='seat-handle-left'></span>
                                            <span class='seat-handle-right'></span>
                                            <span class='seat-bottom'></span>
                                        </div>
                                    </div>
                                </div>
                                @endif
                            </div>
                            <div class='row'>
                                @if(in_array("D1", $actual_seat))
                                <div class='col-2'>
                                    <div class='seat ladies last-seat seat occupied'>
                                        <div class='seat-body'>
                                            D1
                                            <span class='seat-handle-left'></span>
                                            <span class='seat-handle-right'></span>
                                            <span class='seat-bottom'></span>
                                        </div>
                                    </div>
                                </div>
                                @else
                                <div class='col-2'>
                                    <div class='seat occupied ChooseSeat ' data-item=''>
                                        <div class='seat-body'>
                                            D1
                                            <span class='seat-handle-left'></span>
                                            <span class='seat-handle-right'></span>
                                            <span class='seat-bottom'></span>
                                        </div>
                                    </div>
                                </div>
                                @endif

                                @if(in_array("D2", $actual_seat))
                                <div class='col-2'>
                                    <div class='seat ladies last-seat seat occupied'>
                                        <div class='seat-body'>
                                            D2
                                            <span class='seat-handle-left'></span>
                                            <span class='seat-handle-right'></span>
                                            <span class='seat-bottom'></span>
                                        </div>
                                    </div>
                                </div>
                                @else
                                <div class='col-2'>
                                    <div class='seat occupied ChooseSeat ' data-item=''>
                                        <div class='seat-body'>
                                            D2
                                            <span class='seat-handle-left'></span>
                                            <span class='seat-handle-right'></span>
                                            <span class='seat-bottom'></span>
                                        </div>
                                    </div>
                                </div>
                                @endif
                                <div class='col-2'>&nbsp;</div>
                                @if(in_array("D3", $actual_seat))
                                <div class='col-2'>
                                    <div class='seat ladies last-seat seat occupied'>
                                        <div class='seat-body'>
                                            D3
                                            <span class='seat-handle-left'></span>
                                            <span class='seat-handle-right'></span>
                                            <span class='seat-bottom'></span>
                                        </div>
                                    </div>
                                </div>
                                @else
                                <div class='col-2'>
                                    <div class='seat occupied ChooseSeat ' data-item=''>
                                        <div class='seat-body'>
                                            D3
                                            <span class='seat-handle-left'></span>
                                            <span class='seat-handle-right'></span>
                                            <span class='seat-bottom'></span>
                                        </div>
                                    </div>
                                </div>
                                @endif
                                
                                @if(in_array("D4", $actual_seat))
                                <div class='col-2'>
                                    <div class='seat ladies last-seat seat occupied'>
                                        <div class='seat-body'>
                                            D4
                                            <span class='seat-handle-left'></span>
                                            <span class='seat-handle-right'></span>
                                            <span class='seat-bottom'></span>
                                        </div>
                                    </div>
                                </div>
                                @else
                                <div class='col-2'>
                                    <div class='seat occupied ChooseSeat ' data-item=''>
                                        <div class='seat-body'>
                                            D4
                                            <span class='seat-handle-left'></span>
                                            <span class='seat-handle-right'></span>
                                            <span class='seat-bottom'></span>
                                        </div>
                                    </div>
                                </div>
                                @endif
                            </div>
                            <div class='row'>
                                @if(in_array("E1", $actual_seat))
                                <div class='col-2'>
                                    <div class='seat ladies last-seat seat occupied'>
                                        <div class='seat-body'>
                                            E1
                                            <span class='seat-handle-left'></span>
                                            <span class='seat-handle-right'></span>
                                            <span class='seat-bottom'></span>
                                        </div>
                                    </div>
                                </div>
                                @else
                                <div class='col-2'>
                                    <div class='seat occupied ChooseSeat ' data-item=''>
                                        <div class='seat-body'>
                                            E1
                                            <span class='seat-handle-left'></span>
                                            <span class='seat-handle-right'></span>
                                            <span class='seat-bottom'></span>
                                        </div>
                                    </div>
                                </div>
                                @endif
                                @if(in_array("E2", $actual_seat))
                                <div class='col-2'>
                                    <div class='seat ladies last-seat seat occupied'>
                                        <div class='seat-body'>
                                            E2
                                            <span class='seat-handle-left'></span>
                                            <span class='seat-handle-right'></span>
                                            <span class='seat-bottom'></span>
                                        </div>
                                    </div>
                                </div>
                                @else
                                <div class='col-2'>
                                    <div class='seat occupied ChooseSeat ' data-item=''>
                                        <div class='seat-body'>
                                            E2
                                            <span class='seat-handle-left'></span>
                                            <span class='seat-handle-right'></span>
                                            <span class='seat-bottom'></span>
                                        </div>
                                    </div>
                                </div>
                                @endif
                                <div class='col-2'>&nbsp;</div>
                                @if(in_array("E3", $actual_seat))
                                <div class='col-2'>
                                    <div class='seat ladies last-seat seat occupied'>
                                        <div class='seat-body'>
                                            E3
                                            <span class='seat-handle-left'></span>
                                            <span class='seat-handle-right'></span>
                                            <span class='seat-bottom'></span>
                                        </div>
                                    </div>
                                </div>
                                @else
                                <div class='col-2'>
                                    <div class='seat occupied ChooseSeat ' data-item=''>
                                        <div class='seat-body'>
                                            E3
                                            <span class='seat-handle-left'></span>
                                            <span class='seat-handle-right'></span>
                                            <span class='seat-bottom'></span>
                                        </div>
                                    </div>
                                </div>
                                @endif
                                @if(in_array("E4", $actual_seat))
                                <div class='col-2'>
                                    <div class='seat ladies last-seat seat occupied'>
                                        <div class='seat-body'>
                                            E4
                                            <span class='seat-handle-left'></span>
                                            <span class='seat-handle-right'></span>
                                            <span class='seat-bottom'></span>
                                        </div>
                                    </div>
                                </div>
                                @else
                                <div class='col-2'>
                                    <div class='seat occupied ChooseSeat ' data-item=''>
                                        <div class='seat-body'>
                                            E4
                                            <span class='seat-handle-left'></span>
                                            <span class='seat-handle-right'></span>
                                            <span class='seat-bottom'></span>
                                        </div>
                                    </div>
                                </div>
                                @endif
                            </div>
                            <div class='row'>
                                @if(in_array("F1", $actual_seat))
                                <div class='col-2'>
                                    <div class='seat ladies last-seat seat occupied'>
                                        <div class='seat-body'>
                                            F1
                                            <span class='seat-handle-left'></span>
                                            <span class='seat-handle-right'></span>
                                            <span class='seat-bottom'></span>
                                        </div>
                                    </div>
                                </div>
                                @else
                                <div class='col-2'>
                                    <div class='seat occupied ChooseSeat ' data-item=''>
                                        <div class='seat-body'>
                                            F1
                                            <span class='seat-handle-left'></span>
                                            <span class='seat-handle-right'></span>
                                            <span class='seat-bottom'></span>
                                        </div>
                                    </div>
                                </div>
                                @endif
                                @if(in_array("F2", $actual_seat))
                                <div class='col-2'>
                                    <div class='seat ladies last-seat seat occupied'>
                                        <div class='seat-body'>
                                            F2
                                            <span class='seat-handle-left'></span>
                                            <span class='seat-handle-right'></span>
                                            <span class='seat-bottom'></span>
                                        </div>
                                    </div>
                                </div>
                                @else
                                <div class='col-2'>
                                    <div class='seat occupied ChooseSeat ' data-item=''>
                                        <div class='seat-body'>
                                            F2
                                            <span class='seat-handle-left'></span>
                                            <span class='seat-handle-right'></span>
                                            <span class='seat-bottom'></span>
                                        </div>
                                    </div>
                                </div>
                                @endif
                                <div class='col-2'>&nbsp;</div>
                                @if(in_array("F3", $actual_seat))
                                <div class='col-2'>
                                    <div class='seat ladies last-seat seat occupied'>
                                        <div class='seat-body'>
                                            F3
                                            <span class='seat-handle-left'></span>
                                            <span class='seat-handle-right'></span>
                                            <span class='seat-bottom'></span>
                                        </div>
                                    </div>
                                </div>
                                @else
                                <div class='col-2'>
                                    <div class='seat occupied ChooseSeat ' data-item=''>
                                        <div class='seat-body'>
                                            F3
                                            <span class='seat-handle-left'></span>
                                            <span class='seat-handle-right'></span>
                                            <span class='seat-bottom'></span>
                                        </div>
                                    </div>
                                </div>
                                @endif
                                @if(in_array("F4", $actual_seat))
                                <div class='col-2'>
                                    <div class='seat ladies last-seat seat occupied'>
                                        <div class='seat-body'>
                                            F4
                                            <span class='seat-handle-left'></span>
                                            <span class='seat-handle-right'></span>
                                            <span class='seat-bottom'></span>
                                        </div>
                                    </div>
                                </div>
                                @else
                                <div class='col-2'>
                                    <div class='seat occupied ChooseSeat ' data-item=''>
                                        <div class='seat-body'>
                                            F4
                                            <span class='seat-handle-left'></span>
                                            <span class='seat-handle-right'></span>
                                            <span class='seat-bottom'></span>
                                        </div>
                                    </div>
                                </div>
                                @endif
                            </div>
                            <div class='row'>
                                @if(in_array("G1", $actual_seat))
                                <div class='col-2'>
                                    <div class='seat ladies last-seat seat occupied'>
                                        <div class='seat-body'>
                                            G1
                                            <span class='seat-handle-left'></span>
                                            <span class='seat-handle-right'></span>
                                            <span class='seat-bottom'></span>
                                        </div>
                                    </div>
                                </div>
                                @else
                                <div class='col-2'>
                                    <div class='seat occupied ChooseSeat ' data-item=''>
                                        <div class='seat-body'>
                                            G1
                                            <span class='seat-handle-left'></span>
                                            <span class='seat-handle-right'></span>
                                            <span class='seat-bottom'></span>
                                        </div>
                                    </div>
                                </div>
                                @endif
                                @if(in_array("G2", $actual_seat))
                                <div class='col-2'>
                                    <div class='seat ladies last-seat seat occupied'>
                                        <div class='seat-body'>
                                            G2
                                            <span class='seat-handle-left'></span>
                                            <span class='seat-handle-right'></span>
                                            <span class='seat-bottom'></span>
                                        </div>
                                    </div>
                                </div>
                                @else
                                <div class='col-2'>
                                    <div class='seat occupied ChooseSeat ' data-item=''>
                                        <div class='seat-body'>
                                            G2
                                            <span class='seat-handle-left'></span>
                                            <span class='seat-handle-right'></span>
                                            <span class='seat-bottom'></span>
                                        </div>
                                    </div>
                                </div>
                                @endif
                                <div class='col-2'>&nbsp;</div>
                                @if(in_array("G3", $actual_seat))
                                <div class='col-2'>
                                    <div class='seat ladies last-seat seat occupied'>
                                        <div class='seat-body'>
                                            G3
                                            <span class='seat-handle-left'></span>
                                            <span class='seat-handle-right'></span>
                                            <span class='seat-bottom'></span>
                                        </div>
                                    </div>
                                </div>
                                @else
                                <div class='col-2'>
                                    <div class='seat occupied ChooseSeat ' data-item=''>
                                        <div class='seat-body'>
                                            G3
                                            <span class='seat-handle-left'></span>
                                            <span class='seat-handle-right'></span>
                                            <span class='seat-bottom'></span>
                                        </div>
                                    </div>
                                </div>
                                @endif
                                @if(in_array("G4", $actual_seat))
                                <div class='col-2'>
                                    <div class='seat ladies last-seat seat occupied'>
                                        <div class='seat-body'>
                                            G4
                                            <span class='seat-handle-left'></span>
                                            <span class='seat-handle-right'></span>
                                            <span class='seat-bottom'></span>
                                        </div>
                                    </div>
                                </div>
                                @else
                                <div class='col-2'>
                                    <div class='seat occupied ChooseSeat ' data-item=''>
                                        <div class='seat-body'>
                                            G4
                                            <span class='seat-handle-left'></span>
                                            <span class='seat-handle-right'></span>
                                            <span class='seat-bottom'></span>
                                        </div>
                                    </div>
                                </div>
                                @endif
                            </div>
                            <div class='row'>
                                @if(in_array("H1", $actual_seat))
                                <div class='col-2'>
                                    <div class='seat ladies last-seat seat occupied'>
                                        <div class='seat-body'>
                                            H1
                                            <span class='seat-handle-left'></span>
                                            <span class='seat-handle-right'></span>
                                            <span class='seat-bottom'></span>
                                        </div>
                                    </div>
                                </div>
                                @else
                                <div class='col-2'>
                                    <div class='seat occupied ChooseSeat ' data-item=''>
                                        <div class='seat-body'>
                                            H1
                                            <span class='seat-handle-left'></span>
                                            <span class='seat-handle-right'></span>
                                            <span class='seat-bottom'></span>
                                        </div>
                                    </div>
                                </div>
                                @endif
                                @if(in_array("H2", $actual_seat))
                                <div class='col-2'>
                                    <div class='seat ladies last-seat seat occupied'>
                                        <div class='seat-body'>
                                            H2
                                            <span class='seat-handle-left'></span>
                                            <span class='seat-handle-right'></span>
                                            <span class='seat-bottom'></span>
                                        </div>
                                    </div>
                                </div>
                                @else
                                <div class='col-2'>
                                    <div class='seat occupied ChooseSeat ' data-item=''>
                                        <div class='seat-body'>
                                            H2
                                            <span class='seat-handle-left'></span>
                                            <span class='seat-handle-right'></span>
                                            <span class='seat-bottom'></span>
                                        </div>
                                    </div>
                                </div>
                                @endif
                                <div class='col-2'>&nbsp;</div>
                                @if(in_array("H3", $actual_seat))
                                <div class='col-2'>
                                    <div class='seat ladies last-seat seat occupied'>
                                        <div class='seat-body'>
                                            H3
                                            <span class='seat-handle-left'></span>
                                            <span class='seat-handle-right'></span>
                                            <span class='seat-bottom'></span>
                                        </div>
                                    </div>
                                </div>
                                @else
                                <div class='col-2'>
                                    <div class='seat occupied ChooseSeat ' data-item=''>
                                        <div class='seat-body'>
                                            H3
                                            <span class='seat-handle-left'></span>
                                            <span class='seat-handle-right'></span>
                                            <span class='seat-bottom'></span>
                                        </div>
                                    </div>
                                </div>
                                @endif
                                @if(in_array("H4", $actual_seat))
                                <div class='col-2'>
                                    <div class='seat ladies last-seat seat occupied'>
                                        <div class='seat-body'>
                                            H4
                                            <span class='seat-handle-left'></span>
                                            <span class='seat-handle-right'></span>
                                            <span class='seat-bottom'></span>
                                        </div>
                                    </div>
                                </div>
                                @else
                                <div class='col-2'>
                                    <div class='seat occupied ChooseSeat ' data-item=''>
                                        <div class='seat-body'>
                                            H4
                                            <span class='seat-handle-left'></span>
                                            <span class='seat-handle-right'></span>
                                            <span class='seat-bottom'></span>
                                        </div>
                                    </div>
                                </div>
                                @endif
                            </div>
                            <div class='row'>
                                @if(in_array("I1", $actual_seat))
                                <div class='col-2'>
                                    <div class='seat ladies last-seat seat occupied'>
                                        <div class='seat-body'>
                                            I1
                                            <span class='seat-handle-left'></span>
                                            <span class='seat-handle-right'></span>
                                            <span class='seat-bottom'></span>
                                        </div>
                                    </div>
                                </div>
                                @else
                                <div class='col-2'>
                                    <div class='seat occupied ChooseSeat ' data-item=''>
                                        <div class='seat-body'>
                                            I1
                                            <span class='seat-handle-left'></span>
                                            <span class='seat-handle-right'></span>
                                            <span class='seat-bottom'></span>
                                        </div>
                                    </div>
                                </div>
                                @endif
                                @if(in_array("I2", $actual_seat))
                                <div class='col-2'>
                                    <div class='seat ladies last-seat seat occupied'>
                                        <div class='seat-body'>
                                            I2
                                            <span class='seat-handle-left'></span>
                                            <span class='seat-handle-right'></span>
                                            <span class='seat-bottom'></span>
                                        </div>
                                    </div>
                                </div>
                                @else
                                <div class='col-2'>
                                    <div class='seat occupied ChooseSeat ' data-item=''>
                                        <div class='seat-body'>
                                            I2
                                            <span class='seat-handle-left'></span>
                                            <span class='seat-handle-right'></span>
                                            <span class='seat-bottom'></span>
                                        </div>
                                    </div>
                                </div>
                                @endif
                                <div class='col-2'>&nbsp;</div>
                                @if(in_array("I3", $actual_seat))
                                <div class='col-2'>
                                    <div class='seat ladies last-seat seat occupied'>
                                        <div class='seat-body'>
                                            I3
                                            <span class='seat-handle-left'></span>
                                            <span class='seat-handle-right'></span>
                                            <span class='seat-bottom'></span>
                                        </div>
                                    </div>
                                </div>
                                @else
                                <div class='col-2'>
                                    <div class='seat occupied ChooseSeat ' data-item=''>
                                        <div class='seat-body'>
                                            I3
                                            <span class='seat-handle-left'></span>
                                            <span class='seat-handle-right'></span>
                                            <span class='seat-bottom'></span>
                                        </div>
                                    </div>
                                </div>
                                @endif
                                @if(in_array("I4", $actual_seat))
                                <div class='col-2'>
                                    <div class='seat ladies last-seat seat occupied'>
                                        <div class='seat-body'>
                                            I4
                                            <span class='seat-handle-left'></span>
                                            <span class='seat-handle-right'></span>
                                            <span class='seat-bottom'></span>
                                        </div>
                                    </div>
                                </div>
                                @else
                                <div class='col-2'>
                                    <div class='seat occupied ChooseSeat ' data-item=''>
                                        <div class='seat-body'>
                                            I4
                                            <span class='seat-handle-left'></span>
                                            <span class='seat-handle-right'></span>
                                            <span class='seat-bottom'></span>
                                        </div>
                                    </div>
                                </div>
                                @endif
                            </div>
                            <div class='row'>
                                @if(in_array("J1", $actual_seat))
                                <div class='col-2'>
                                    <div class='seat ladies last-seat seat occupied'>
                                        <div class='seat-body'>
                                            J1
                                            <span class='seat-handle-left'></span>
                                            <span class='seat-handle-right'></span>
                                            <span class='seat-bottom'></span>
                                        </div>
                                    </div>
                                </div>
                                @else
                                <div class='col-2'>
                                    <div class='seat occupied ChooseSeat ' data-item=''>
                                        <div class='seat-body'>
                                            J1
                                            <span class='seat-handle-left'></span>
                                            <span class='seat-handle-right'></span>
                                            <span class='seat-bottom'></span>
                                        </div>
                                    </div>
                                </div>
                                @endif
                                @if(in_array("J2", $actual_seat))
                                <div class='col-2'>
                                    <div class='seat ladies last-seat seat occupied'>
                                        <div class='seat-body'>
                                            J2
                                            <span class='seat-handle-left'></span>
                                            <span class='seat-handle-right'></span>
                                            <span class='seat-bottom'></span>
                                        </div>
                                    </div>
                                </div>
                                @else
                                <div class='col-2'>
                                    <div class='seat occupied ChooseSeat ' data-item=''>
                                        <div class='seat-body'>
                                            J2
                                            <span class='seat-handle-left'></span>
                                            <span class='seat-handle-right'></span>
                                            <span class='seat-bottom'></span>
                                        </div>
                                    </div>
                                </div>
                                @endif
                                <div class='col-2'>&nbsp;</div>
                                @if(in_array("J3", $actual_seat))
                                <div class='col-2'>
                                    <div class='seat ladies last-seat seat occupied'>
                                        <div class='seat-body'>
                                            J3
                                            <span class='seat-handle-left'></span>
                                            <span class='seat-handle-right'></span>
                                            <span class='seat-bottom'></span>
                                        </div>
                                    </div>
                                </div>
                                @else
                                <div class='col-2'>
                                    <div class='seat occupied ChooseSeat ' data-item=''>
                                        <div class='seat-body'>
                                            J3
                                            <span class='seat-handle-left'></span>
                                            <span class='seat-handle-right'></span>
                                            <span class='seat-bottom'></span>
                                        </div>
                                    </div>
                                </div>
                                @endif
                                @if(in_array("J4", $actual_seat))
                                <div class='col-2'>
                                    <div class='seat ladies last-seat seat occupied'>
                                        <div class='seat-body'>
                                            J4
                                            <span class='seat-handle-left'></span>
                                            <span class='seat-handle-right'></span>
                                            <span class='seat-bottom'></span>
                                        </div>
                                    </div>
                                </div>
                                @else
                                <div class='col-2'>
                                    <div class='seat occupied ChooseSeat ' data-item=''>
                                        <div class='seat-body'>
                                            J4
                                            <span class='seat-handle-left'></span>
                                            <span class='seat-handle-right'></span>
                                            <span class='seat-bottom'></span>
                                        </div>
                                    </div>
                                </div>
                                @endif
                            </div>
                            <!-- <div class='row'>
                                @if(in_array("M", $actual_seat))
                                <div class='col-2'>
                                    <div class='seat ladies last-seat seat occupied last-seat-21'>
                                        <div class='seat-body'>
                                            M
                                            <span class='seat-handle-left'></span>
                                            <span class='seat-handle-right'></span>
                                            <span class='seat-bottom'></span>
                                        </div>
                                    </div>
                                </div>
                                @else
                                <div class='col-2'>
                                    <div class='seat occupied ChooseSeat last-seat-21 ' data-item=''>
                                        <div class='seat-body'>
                                            M
                                            <span class='seat-handle-left'></span>
                                            <span class='seat-handle-right'></span>
                                            <span class='seat-bottom'></span>
                                        </div>
                                    </div>
                                </div>
                                @endif
                                
                    </div> -->
                </div>
               </div>
            

            <div class="col-md-6 col-sm-12">
                <form action="{{ route('buy_ticket_user') }}" class="price-details" id="bookingFrm" method="post" accept-charset="utf-8">
                    @csrf
                    <!-- <input type="hidden" name="_token" value="NIDL433gqQP8cjIVDuTF4VoNMFBUvBERPPkBSOHS"> -->
                    <div class="form-group">
                        <label><strong>Choose Boarding Point <span class="text-danger">*</span></strong></label>
                    <select name="boarding_point_id" id="stoppage" class="form-control form-control-lg boarding_point">
                        <option value="">Boarding Point</option>
                        @foreach($boarding_point as $boardings)
                        <option value="{{ $boardings->reg_terminal_id }}">{{ App\Terminal::findOrFail($boardings->reg_terminal_id)->terminal_name }}</option>
                        @endforeach
                    </select>
                    </div>
                    <!-- <input type="text" name="boarding_point" value="{{ $boarding_point }}"> -->


                    <div class="form-group">
                            <h4> Facilities</h4>
                            <div id="facilities">
                             <div class="funkyradio">
                                    <div class="funkyradio-default">
                                         <input type="radio" checked/>
                                         <label>Free Breakfast</label>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    
                    <div class="table-responsive ">
                        <table class="table table table-bordered table-striped">
                            <tbody>
                            <tr>
                                <td class="text-right" style="width: 30%;">Seat(s)</td>
                                <th id="seatPreview">---</th>
                            </tr>
                            <tr>
                                <td class="text-right"><b> Total</b></td>
                                <th id="grandTotalPreview">0</th>
                            </tr>
                            </tbody>
                        </table>

                        <input type="hidden" name="price" value="{{ $ticket_price }}">
                        <input type="hidden" name="customer_name" value="{{ $customer }}">
                        <input type="hidden" name="phone_id" value="{{ $customer_phone }}">
                        <input type="hidden" name="operator" value="{{ $bus_name }}">
                        <input type="hidden" name="coach_type" value="{{ $Bus_coach }}">
                        <input type="hidden" name="journey_date_id" value="{{ $bus_date }}">
                        <input type="hidden" name="time_id" value="{{ $bus_time }}">
                        <input type="hidden" name="departure" value="{{ $bus_depearture }}">
                        <input type="hidden" name="destination" value="{{ $bus_destination }}">

                        <input type="hidden" name="bus_name" value="{{ $bus_name }}">
                       <!--  <input type="text" name="boarding_point_id" value="{{ $boarding_point }}"> -->
                        <input type="hidden" name="seat_number" value="">
                        <input type="hidden" name="total_seat" value="{{  $total_seat_id }}">
                        
                        <input type="hidden" name="total_fare" value="">
                        <input type="hidden" name="dura_chassis_num" value="{{ $chassis_no_dura }}">
                        <input type="hidden" name="payment_status" value="">
                        <input type="hidden" name="ticket_token" value="">
                       
                        


                       <!--  <input type="hidden" name="trip_route_id" value="2">
                        <input type="hidden" name="fleet_registration_id"
                               value="1">
                        <input type="hidden" name="trip_id_no" value="1148">
                        <input type="hidden" name="id_no" value="1571202625">
                        <input type="hidden" name="fleet_type_id"
                               value="1">
                        <input type="hidden" name="total_seat">
                        <input type="hidden" name="seat_number">
                        
                        <input type="hidden" name="total_fare">
                        <input type="hidden" name="booking_date" value="2019-10-26 11:00:03"> -->

                    </div>
                    <button id="submit-btn" class="btn btn-block">Continue</button>
                </form>

                
                
        </div>


    </div>
    </div>
    <!-- =========== Main Ticket Booking Area End ===================== -->
    <div class="margin-bottom-60"></div>


    <!-- footer part start -->
<footer id="contact" class="theme-footer-one">
    <div class="bottom-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-6  col-sm-12 text-center">
                    <p>&copy; BlueBUS 2019. All Right Reserved.</p>
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
    <script src="{{ asset('frontend/assets/admin/js/select2.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/front/js/flatpickr.js') }}"></script>
<!--Owl Carousel JS-->
<script src="{{ asset('frontend/assets/front/js/plugins/owl.carousel.min.js') }}"></script>
<!--Venobox JS-->
<script src="{{ asset('frontend/assets/front/js/plugins/venobox.min.js') }}"></script>
<!--Slick Slider JS-->
<script src="{{ asset('frontend/assets/front/js/plugins/slick.min.js') }}"></script>
<!--Main-->
<script src="{{ asset('frontend/assets/front/js/custom.js') }}"></script>

<!-- {{ asset('frontend/') }} -->

    <script>
        $(document).ready(function () {

            $('.boarding_point').select2();


            /*
            *------------------------------------------------------
            * @function: findBookingInformation()
            * @return    : location, facilities, seatsList
            *------------------------------------------------------
            */
            var total_seat = $('input[name=total_seat]');
            var total_fare = $('input[name=total_fare]');
            var seat_number = $('input[name=seat_number]');

            var price = $('input[name=price]').val();
            // var booking_date = $('input[name=booking_date]');

            var seatPreview = $('#seatPreview');
            var pricePreview = $('#pricePreview');
            var grandTotalPreview = $('#grandTotalPreview');
            var outputPreview = $('#outputPreview');

            if (total_seat.val() == '') {
                $("#submit-btn").attr('disabled', true);
            }

            /*
            *------------------------------------------------------
            * Choose seat(s)
            * @function: findPriceBySeat
            * @return  : selected seat(s), price and group price
            *------------------------------------------------------
            */

            $('body').on('click', '.ChooseSeat', function () {
                var seat = $(this);
                if (seat.attr('data-item') != "selected") {
                    seat.removeClass('occupied').addClass('selected').attr('data-item', 'selected');
                } else if (seat.attr('data-item') == "selected") {
                    seat.removeClass('selected').addClass('occupied').attr('data-item', '');
                }
                //reset seat serial for each click
                var seatSerial = "";
                var countSeats = 0;

                $("div[data-item=selected]").each(function (i, x) {
                    countSeats = i + 1;
                    seatSerial += $(this).text().trim() + ", ";
                });

                total_fare.val(countSeats * price);
                $("#grandTotalPreview").text((countSeats * price) + " TAKA");
                total_seat.val(countSeats);
                seat_number.val(seatSerial);
                seatPreview.html(seatSerial);

                if (countSeats > 0) {
                    $("#submit-btn").attr('disabled', false);
                } else {
                    $("#submit-btn").attr('disabled', true);
                }
            });


            
        });
    </script>



</body>



</html>