@extends('dashboardpages.dashboardhome.app')

@section('title')
OBTMS dashboard
@endsection

@section('content')


        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="content-page">
            <!-- Start content -->
            <div class="content">
                <div class="container-fluid">
                    <div class="page-title-box">
                        <div class="row align-items-center">
                            <div class="col-sm-6">
                                <h4 class="page-title">Dashboard</h4>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item active">Welcome to Online Bus Ticket Management System Dashboard</li>
                                </ol>
                            </div>
                            <!-- <div class="col-sm-6">
                                <div class="float-right d-none d-md-block">
                                    <div class="dropdown"><button class="btn btn-primary dropdown-toggle arrow-none waves-effect waves-light" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="mdi mdi-settings mr-2"></i> Settings</button>
                                        <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="#">Action</a> <a class="dropdown-item" href="#">Another action</a> <a class="dropdown-item" href="#">Something else here</a>
                                            <div class="dropdown-divider"></div><a class="dropdown-item" href="#">Separated link</a>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                    </div><!-- end row -->
                    <div class="row">
                        <div class="col-xl-3 col-md-6">
                            <div class="card mini-stat bg-primary text-white">
                                <div class="card-body">
                                    <div class="mb-4">
                                        <div class="float-left mini-stat-img mr-4"><img src="assets/images/services-icon/01.png" alt=""></div>
                                        <h5 class="font-16 text-uppercase mt-0 text-white-50">All users</h5>
                                        <h4 class="font-500">{{App\user::count()}}</h4>
                                        <div class="mini-stat-label bg-success">
                                           <!--  <p class="mb-0">+ 12%</p> -->
                                        </div>
                                    </div>
                                    <div class="pt-2">
                                        <div class="float-right"><a href="#" class="text-white-50"><!-- <i class="mdi mdi-arrow-right h5"></i> --></a></div>
                                        <p class="text-white-50 mb-0">All user list</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card mini-stat bg-primary text-white">
                                <div class="card-body">
                                    <div class="mb-4">
                                        <div class="float-left mini-stat-img mr-4"><img src="assets/images/services-icon/02.png" alt=""></div>
                                        <h5 class="font-16 text-uppercase mt-0 text-white-50">sold Ticket</h5>
                                        <h4 class="font-500">{{ App\BuyTicket::sum('total_seat') }}</h4>
                                        <div class="mini-stat-label bg-danger">
                                           <!--  <p class="mb-0">- 28%</p> -->
                                        </div>
                                    </div>
                                    <div class="pt-2">
                                        <div class="float-right"></a></div>
                                        <p class="text-white-50 mb-0">Overall All sold Tickets</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card mini-stat bg-primary text-white">
                                <div class="card-body">
                                    <div class="mb-4">
                                        <div class="float-left mini-stat-img mr-4"><img src="assets/images/services-icon/03.png" alt=""></div>
                                        <h5 class="font-16 text-uppercase mt-0 text-white-50">Total Price</h5>
                                        <h4 class="font-500">{{ App\BuyTicket::sum('total_fare') }}৳</h4>
                                        <div class="mini-stat-label bg-info">
                                            <!-- <p class="mb-0">00%</p> -->
                                        </div>
                                    </div>
                                    <div class="pt-2">
                                        <div class="float-right"><a href="#" class="text-white-50"></a></div>
                                        <p class="text-white-50 mb-0">Overall Total Price</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="col-xl-3 col-md-6">
                            <div class="card mini-stat bg-primary text-white">
                                <div class="card-body">
                                    <div class="mb-4">
                                        <div class="float-left mini-stat-img mr-4"><img src="assets/images/services-icon/04.png" alt=""></div>
                                        <h5 class="font-16 text-uppercase mt-0 text-white-50">Bus name</h5>
                                        <h4 class="font-500">Tisha 36 </h4>
                                        <div class="mini-stat-label bg-warning">
                                            
                                        </div>
                                    </div>
                                    <div class="pt-2">
                                        <div class="float-right"><a href="#" class="text-white-50"></a></div>
                                       
                                    </div>
                                </div>
                            </div>
                        </div> -->
                 
                  
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="mt-0 header-title mb-4">Latest Trasaction</h4>
                                    <div class="table-responsive">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Id</th>
                                                    <th scope="col">Name</th>
                                                    <th scope="col">Operator</th>
                                                    <th scope="col">chassis</th>
                                                    <th scope="col">Date</th>
                                                    <th scope="col">time</th>
                                                    <th scope="col">Status</th>
                                                    <th scope="col">Cancel Ticket</th>
                                                    <th scope="col"> Booked date and time</th>
                                                    
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($all_booked_ticket as $booked)
                                                <tr>
                                                    <th scope="row">{{ $booked->id }}</th>
                                                    <th scope="row">{{ $booked->customer_name }}</th>
                                                    <th scope="row">{{ $booked->operator }}</th>
                                                    <th scope="row">{{ $booked->dura_chassis_num }}</th>
                                                    <th scope="row">{{ $booked->journey_date }}</th>
                                                    <th scope="row">{{ $booked->time }}</th>
                                                    
                                                    @if($booked->payment_status==1)
                                                    <td><span class="btn btn-primary">Paid</span></td>
                                                    @else
                                                    <td><span class="btn btn-primary due">Due</span></td>
                                                    @endif

                                                    
                                                    <td>
                                        <a href="{{ url('/ticket/delete') }}\{{ $booked->id }}" class="btn btn-primary delete_btn">Cancel</a>
                                    </td>

                                               <th scope="row">{{ $booked->updated_at }}</th>

                                                    
                                                </tr>
                                                
                                                
                                                
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div><!-- end row -->
                </div><!-- container-fluid -->
            </div><!-- content -->
           

@endsection