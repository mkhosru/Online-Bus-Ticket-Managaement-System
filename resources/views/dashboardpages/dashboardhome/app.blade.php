<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0,minimal-ui">
    <title>

    @yield('title')

    </title>
    <meta content="Admin Dashboard" name="description">
    <meta content="Themesbrand" name="author">
    <link rel="shortcut icon" href="{{ asset('backend/assets/images/favicon.ico') }}">
    <!--Chartist Chart CSS -->
    <link rel="stylesheet" href="{{ asset('backend/plugins/chartist/css/chartist.min.css') }}">
    <link href="{{ asset('backend/assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('backend/assets/css/metismenu.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('backend/assets/css/icons.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('backend/assets/css/style.css') }}" rel="stylesheet" type="text/css">

    
</head>

<body>
    <!-- Begin page -->
    <div id="wrapper">
        <!-- Top Bar Start -->
        <div class="topbar">
            <!-- LOGO -->
            <div class="topbar-left">
                <a href="index.html" class="logo">
                <span>
                   <!--  <img src="assets/images/logo-light.png" alt="" height="18"> -->
                </span>
                <i>
                    <img src="assets/images/logo-sm.png" alt="" height="22">
                </i>
            </a>
        </div>
            <nav class="navbar-custom">
                <ul class="navbar-right list-inline float-right mb-0">
                    <li class="dropdown notification-list list-inline-item d-none d-md-inline-block">
                        <form role="search" class="app-search">
                            <div class="form-group mb-0"><input type="text" class="form-control" placeholder="Search.."> <button type="submit"><i class="fa fa-search"></i></button></div>
                        </form>
                    </li>

                    <!-- language-->
                    <!-- <li class="dropdown notification-list list-inline-item d-none d-md-inline-block"><a class="nav-link dropdown-toggle arrow-none waves-effect" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false"><img src="assets/images/flags/us_flag.jpg" class="mr-2" height="12" alt=""> English <span class="mdi mdi-chevron-down"></span></a>
                        <div class="dropdown-menu dropdown-menu-right language-switch"><a class="dropdown-item" href="#"><img src="assets/images/flags/germany_flag.jpg" alt="" height="16"><span>German </span></a><a class="dropdown-item" href="#"><img src="assets/images/flags/italy_flag.jpg" alt="" height="16"><span>Italian </span></a><a class="dropdown-item" href="#"><img src="assets/images/flags/french_flag.jpg" alt="" height="16"><span>French </span></a><a class="dropdown-item" href="#"><img src="assets/images/flags/spain_flag.jpg" alt="" height="16"><span>Spanish </span></a><a class="dropdown-item" href="#"><img src="assets/images/flags/russia_flag.jpg" alt="" height="16"><span>Russian</span></a></div>
                    </li> -->


                    <!-- full screen -->
                    <li class="dropdown notification-list list-inline-item d-none d-md-inline-block"><a class="nav-link waves-effect" href="#" id="btn-fullscreen"><i class="mdi mdi-fullscreen noti-icon"></i></a></li>

					<!-- Message -->
					
					<!-- <li class="dropdown notification-list list-inline-item d-none d-md-inline-block"><a class="nav-link waves-effect" href="#" id="btn-fullscreen"><i class="ti-email"></i>
                    <span class="badge badge-pill badge-danger noti-icon-badge">3</span>
                    </a>
                </li> -->


                <!-- ----------------Message--------- -->
                <li class="dropdown notification-list list-inline-item"><a class="nav-link dropdown-toggle arrow-none waves-effect" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false"> <i class="ti-email"></i></i> <span class="badge badge-pill badge-danger noti-icon-badge">{{ App\Contact::count() }}</span></a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg">
                            <!-- item-->
                            <h6 class="dropdown-item-text">Message</h6>
                            <div class="slimscroll notification-item-list">
                                @forelse(App\Contact::all() as $contacts)
                               
                                <a href="javascript:void(0);" class="dropdown-item notify-item active">
                                    <div class="notify-icon bg-success"><i class="mdi mdi-message-text"></i></div>
                                    <p class="notify-details">{{ $contacts->name }}<span class="text-muted">{{ $contacts->enquiry }}</span></p>
                                </a>
                                @empty
                                @endforelse


                              

                            </div>


                            <!-- All--> <!-- <a href="javascript:void(0);" class="dropdown-item text-center text-primary">View all <i class="fi-arrow-right"></i></a> -->
                        </div>
                    </li>
                <!-- ----------------message--------- -->




                    <!-- notification -->
                    <li class="dropdown notification-list list-inline-item"><a class="nav-link dropdown-toggle arrow-none waves-effect" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false"><i class="mdi mdi-bell-outline noti-icon"></i> <span class="badge badge-pill badge-danger noti-icon-badge">{{ App\BuyTicket::count() }}</span></a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg">
                            <!-- item-->
                            <h6 class="dropdown-item-text">Notifications {{ App\BuyTicket::count() }}</h6>
                            <div class="slimscroll notification-item-list">

                               @forelse(App\BuyTicket::all() as $notification)
                                <a href="javascript:void(0);" class="dropdown-item notify-item active">
                                    <div class="notify-icon bg-success"><i class="mdi mdi-cart-outline"></i></div>
                                    <p class="notify-details">{{ $notification->customer_name }}<span class="text-muted">Booked new ticket</span></p>
                                </a>
                                @empty
                                @endforelse


                              

                            </div>


                            <!-- All--> <!-- <a href="javascript:void(0);" class="dropdown-item text-center text-primary">View all <i class="fi-arrow-right"></i></a> -->
                        </div>
                    </li>






    <li class="dropdown notification-list list-inline-item">
        <div class="dropdown notification-list nav-pro-img">
            <a class="dropdown-toggle nav-link arrow-none waves-effect nav-user" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                <img src="https://image.flaticon.com/icons/png/512/147/premium/147133.png" alt="user" class="rounded-circle"></a>
                    <div class="dropdown-menu dropdown-menu-right profile-dropdown">
            <a class="dropdown-item" href="#"><i class="mdi mdi-account-circle m-r-5"></i>{{ Auth::user()->FirstName }}</a>
            
            
                <div class="dropdown-divider"></div>
                <a class="dropdown-item text-danger" href="http://127.0.0.1:8000/logout" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                <i class="mdi mdi-power text-danger"></i> Logout</a>

                <form id="logout-form" action="http://127.0.0.1:8000/logout" method="POST" style="display: none;">
                        @csrf
                    </form>
                 
                 </li>














                </ul>
                <ul class="list-inline menu-left mb-0">
                    <li class="float-left"><button class="button-menu-mobile open-left waves-effect"><i class="mdi mdi-menu"></i></button></li>
                    <li class="d-none d-sm-block">

                        <div class="dropdown pt-3 d-inline-block">
                            <a class="btn btn-light dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Create Bus List</a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <a class="dropdown-item" href="{{ route('bus_add') }}">Add Bus</a> 
                                <a class="dropdown-item" href="{{ route('list_view') }}">View Bus List</a>
                                <a class="dropdown-item" href="{{ route('bus_terminal_reg') }}">Register Terminal</a>  
                                
                                
                               
                            </div>
                        </div>
                    </li>
                </ul>
            </nav>
        </div><!-- Top Bar End -->
        <!-- ========== Left Sidebar Start ========== -->
        <div class="left side-menu">
            <div class="slimscroll-menu" id="remove-scroll">
                <!--- Sidemenu -->
                <div id="sidebar-menu">
                    <!-- Left Menu Start -->
                    <ul class="metismenu" id="side-menu">
                       <!--  <li class="menu-title">Main</li> -->

                        <li><a href="{{ route('dashboard_home') }}" class="waves-effect"><i class="ti-home"></i><span class="badge badge-primary badge-pill float-right"></span> <span>Dashboard</span></a></li>

          <li>
            <a href="{{ url('/admin/bus/report') }}" class="waves-effect">
                <i class="ti-clipboard"></i>
                <span class="badge badge-primary badge-pill float-right"></span>
                 <span>Report Generate</span>
             </a>
         </li>


<!-- Authentication -->


<!-- @if(Auth::user()->roleid == 1) -->
        <li>
            <a href="{{ route('Reg_list_customer')}}" class="waves-effect">
                <i class="ti-user"></i>
                <span class="badge badge-primary badge-pill float-right"></span>
                 <span>view user info</span>
             </a>
         </li>
       <!--  @endif -->
                  
<!-- Authentication -->
                    






                        <!-- <li><a href="calendar.html" class="waves-effect"><i class="ti-calendar"></i><span> Calendar</span></a></li> -->

                        <li><a href="javascript:void(0);" class="waves-effect"><i class="ti-email"></i><span>Individual Bus Info <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span></span></a>
                            <ul class="submenu">
                                <li><a href="{{ route('bus_busname') }}">Operator Name</a></li>
                                <li><a href="{{ route('bus_coach') }}">Coach Type</a></li>
                                <li><a href="{{ route('bus_date') }}">Date</a></li>
                                <li><a href="{{ route('bus_time') }}">Time</a></li>
                                <li><a href="{{ route('bus_departure') }}">Departure Place</a></li>
                                <li><a href="{{ route('bus_destination') }}">Destination Place</a></li>
                                <li><a href="{{ route('bus_terminal') }}">Terminal Name</a></li>
                                <li><a href="{{ route('bus_duration') }}">Chassis Number</a></li>
                                <li><a href="{{ route('bus_totalseat') }}">Total Seat</a></li>
                                <li><a href="{{ route('bus_price') }}">Price</a></li>
                                
                            </ul>
                        </li>

                         <li>
            <!-- <a href="{{ route('list_cancel') }}" class="waves-effect">
                <i class="ti-user"></i>
                <span class="badge badge-primary badge-pill float-right"></span>
                 <span>Ticket Cancelled List</span>
             </a> -->
         </li>

                        <!-- <li class="menu-title">Components</li>
                        <li><a href="javascript:void(0);" class="waves-effect"><i class="ti-package"></i> <span>UI Elements <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span></span></a>
                            <ul class="submenu">
                                <li><a href="ui-alerts.html">Alerts</a></li>
                                <li><a href="ui-buttons.html">Buttons</a></li>
                                <li><a href="ui-cards.html">Cards</a></li>
                                <li><a href="ui-carousel.html">Carousel</a></li>
                                <li><a href="ui-dropdowns.html">Dropdowns</a></li>
                                <li><a href="ui-grid.html">Grid</a></li>
                                <li><a href="ui-images.html">Images</a></li>
                                <li><a href="ui-lightbox.html">Lightbox</a></li>
                                <li><a href="ui-modals.html">Modals</a></li>
                                <li><a href="ui-rangeslider.html">Range Slider</a></li>
                                <li><a href="ui-session-timeout.html">Session Timeout</a></li>
                                <li><a href="ui-progressbars.html">Progress Bars</a></li>
                                <li><a href="ui-sweet-alert.html">Sweet-Alert</a></li>
                                <li><a href="ui-tabs-accordions.html">Tabs & Accordions</a></li>
                                <li><a href="ui-typography.html">Typography</a></li>
                                <li><a href="ui-video.html">Video</a></li>
                                <li><a href="ui-general.html">General</a></li>
                                <li><a href="ui-colors.html">Colors</a></li>
                                <li><a href="ui-rating.html">Rating</a></li>
                            </ul>
                        </li>
                        <li><a href="javascript:void(0);" class="waves-effect"><i class="ti-receipt"></i><span> Forms <span class="badge badge-pill badge-success float-right">9</span></span></a>
                            <ul class="submenu">
                                <li><a href="form-elements.html">Form Elements</a></li>
                                <li><a href="form-validation.html">Form Validation</a></li>
                                <li><a href="form-advanced.html">Form Advanced</a></li>
                                <li><a href="form-editors.html">Form Editors</a></li>
                                <li><a href="form-uploads.html">Form File Upload</a></li>
                                <li><a href="form-xeditable.html">Form Xeditable</a></li>
                                <li><a href="form-repeater.html">Form Repeater</a></li>
                                <li><a href="form-wizard.html">Form Wizard</a></li>
                                <li><a href="form-mask.html">Form Mask</a></li>
                            </ul>
                        </li>
                        <li><a href="javascript:void(0);" class="waves-effect"><i class="ti-pie-chart"></i><span> Charts <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span></span></a>
                            <ul class="submenu">
                                <li><a href="charts-morris.html">Morris Chart</a></li>
                                <li><a href="charts-chartist.html">Chartist Chart</a></li>
                                <li><a href="charts-chartjs.html">Chartjs Chart</a></li>
                                <li><a href="charts-flot.html">Flot Chart</a></li>
                                <li><a href="charts-knob.html">Jquery Knob Chart</a></li>
                                <li><a href="charts-echart.html">E - Chart</a></li>
                                <li><a href="charts-sparkline.html">Sparkline Chart</a></li>
                            </ul>
                        </li>
                        <li><a href="javascript:void(0);" class="waves-effect"><i class="ti-view-grid"></i><span> Tables <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span></span></a>
                            <ul class="submenu">
                                <li><a href="tables-basic.html">Basic Tables</a></li>
                                <li><a href="tables-datatable.html">Data Table</a></li>
                                <li><a href="tables-responsive.html">Responsive Table</a></li>
                                <li><a href="tables-editable.html">Editable Table</a></li>
                            </ul>
                        </li>
                        <li><a href="javascript:void(0);" class="waves-effect"><i class="ti-face-smile"></i> <span>Icons <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span></span></a>
                            <ul class="submenu">
                                <li><a href="icons-material.html">Material Design</a></li>
                                <li><a href="icons-fontawesome.html">Font Awesome</a></li>
                                <li><a href="icons-ion.html">Ion Icons</a></li>
                                <li><a href="icons-themify.html">Themify Icons</a></li>
                                <li><a href="icons-dripicons.html">Dripicons</a></li>
                                <li><a href="icons-typicons.html">Typicons Icons</a></li>
                            </ul>
                        </li>
                        <li><a href="javascript:void(0);" class="waves-effect"><i class="ti-location-pin"></i><span> Maps <span class="badge badge-pill badge-danger float-right">2</span></span></a>
                            <ul class="submenu">
                                <li><a href="maps-google.html">Google Map</a></li>
                                <li><a href="maps-vector.html">Vector Map</a></li>
                            </ul>
                        </li>
                        <li class="menu-title">Extras</li>
                        <li><a href="javascript:void(0);" class="waves-effect"><i class="ti-archive"></i><span> Authentication <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span></span></a>
                            <ul class="submenu">
                                <li><a href="pages-login.html">Login 1</a></li>
                                <li><a href="pages-login-2.html">Login 2</a></li>
                                <li><a href="pages-register.html">Register 1</a></li>
                                <li><a href="pages-register-2.html">Register 2</a></li>
                                <li><a href="pages-recoverpw.html">Recover Password 1</a></li>
                                <li><a href="pages-recoverpw-2.html">Recover Password 2</a></li>
                                <li><a href="pages-lock-screen.html">Lock Screen 1</a></li>
                                <li><a href="pages-lock-screen-2.html">Lock Screen 2</a></li>
                            </ul>
                        </li>
                        <li><a href="javascript:void(0);" class="waves-effect"><i class="ti-support"></i><span> Extra Pages <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span></span></a>
                            <ul class="submenu">
                                <li><a href="pages-timeline.html">Timeline</a></li>
                                <li><a href="pages-invoice.html">Invoice</a></li>
                                <li><a href="pages-directory.html">Directory</a></li>
                                <li><a href="pages-blank.html">Blank Page</a></li>
                                <li><a href="pages-404.html">Error 404</a></li>
                                <li><a href="pages-500.html">Error 500</a></li>
                                <li><a href="pages-pricing.html">Pricing</a></li>
                                <li><a href="pages-gallery.html">Gallery</a></li>
                                <li><a href="pages-maintenance.html">Maintenance</a></li>
                                <li><a href="pages-comingsoon.html">Coming Soon</a></li>
                                <li><a href="pages-faq.html">Faq</a></li>
                            </ul>
                        </li>
                        <li><a href="javascript:void(0);" class="waves-effect"><i class="ti-bookmark-alt"></i><span> Email Templates <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span></span></a>
                            <ul class="submenu">
                                <li><a href="email-template-basic.html">Basic Action Email</a></li>
                                <li><a href="email-template-Alert.html">Alert Email</a></li>
                                <li><a href="email-template-Billing.html">Billing Email</a></li>
                            </ul>
                        </li> -->
                    </ul>
                </div><!-- Sidebar -->
                <div class="clearfix"></div>
            </div><!-- Sidebar -left -->
        </div><!-- Left Sidebar End -->

   <!-- ============================================== -->

        @yield('content')

  <!-- ============================================== -->


 <footer class="footer">© 2019 OBTMS <span class="d-none d-sm-inline-block">- Online Bus Ticket Management System <i class="mdi mdi-heart text-danger"></i> by OBTMS</span>.</footer>
        </div><!-- ============================================================== -->
        <!-- End Right content here -->
        <!-- ============================================================== -->
    </div><!-- END wrapper -->
    <!-- jQuery  -->
    <script src="{{ asset('backend/assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/metisMenu.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/jquery.slimscroll.js') }}"></script>
    <script src="{{ asset('backend/assets/js/waves.min.js') }}"></script>
    <!--Chartist Chart-->
    <script src="{{ asset('backend/plugins/chartist/js/chartist.min.js') }}"></script>
    <script src="{{ asset('backend/plugins/chartist/js/chartist-plugin-tooltip.min.js') }}"></script><!-- peity JS -->
    <script src="{{ asset('backend/plugins/peity-chart/jquery.peity.min.js') }}"></script>
    <script src="{{ asset('backend/assets/pages/dashboard.js') }}"></script><!-- App js -->
    <script src="{{ asset('backend/assets/js/app.js') }}"></script>
        
        
        <!-- Sweet Aleart -->
 <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/8.11.8/sweetalert2.all.js"></script>

        <script>
            @include('sweetalert::alert')
        </script>


        
</body>


</html>