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
                            <div class="col-sm-6">
                                <div class="float-right d-none d-md-block">
                                    <div class="dropdown"><button class="btn btn-primary dropdown-toggle arrow-none waves-effect waves-light" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="mdi mdi-settings mr-2"></i> Settings</button>
                                        <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="#">Action</a> <a class="dropdown-item" href="#">Another action</a> <a class="dropdown-item" href="#">Something else here</a>
                                            <div class="dropdown-divider"></div><a class="dropdown-item" href="#">Separated link</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- end row -->
                    <div class="row">
                        <div class="col-xl-3 col-md-6">
                            <div class="card mini-stat bg-primary text-white">
                                <div class="card-body">
                                    <div class="mb-4">
                                        <div class="float-left mini-stat-img mr-4"><img src="assets/images/services-icon/01.png" alt=""></div>
                                        <h5 class="font-16 text-uppercase mt-0 text-white-50">Orders</h5>
                                        <h4 class="font-500">1,685 <i class="mdi mdi-arrow-up text-success ml-2"></i></h4>
                                        <div class="mini-stat-label bg-success">
                                            <p class="mb-0">+ 12%</p>
                                        </div>
                                    </div>
                                    <div class="pt-2">
                                        <div class="float-right"><a href="#" class="text-white-50"><i class="mdi mdi-arrow-right h5"></i></a></div>
                                        <p class="text-white-50 mb-0">Since last month</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card mini-stat bg-primary text-white">
                                <div class="card-body">
                                    <div class="mb-4">
                                        <div class="float-left mini-stat-img mr-4"><img src="assets/images/services-icon/02.png" alt=""></div>
                                        <h5 class="font-16 text-uppercase mt-0 text-white-50">Revenue</h5>
                                        <h4 class="font-500">52,368 <i class="mdi mdi-arrow-down text-danger ml-2"></i></h4>
                                        <div class="mini-stat-label bg-danger">
                                            <p class="mb-0">- 28%</p>
                                        </div>
                                    </div>
                                    <div class="pt-2">
                                        <div class="float-right"><a href="#" class="text-white-50"><i class="mdi mdi-arrow-right h5"></i></a></div>
                                        <p class="text-white-50 mb-0">Since last month</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card mini-stat bg-primary text-white">
                                <div class="card-body">
                                    <div class="mb-4">
                                        <div class="float-left mini-stat-img mr-4"><img src="assets/images/services-icon/03.png" alt=""></div>
                                        <h5 class="font-16 text-uppercase mt-0 text-white-50">Average Price</h5>
                                        <h4 class="font-500">15.8 <i class="mdi mdi-arrow-up text-success ml-2"></i></h4>
                                        <div class="mini-stat-label bg-info">
                                            <p class="mb-0">00%</p>
                                        </div>
                                    </div>
                                    <div class="pt-2">
                                        <div class="float-right"><a href="#" class="text-white-50"><i class="mdi mdi-arrow-right h5"></i></a></div>
                                        <p class="text-white-50 mb-0">Since last month</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card mini-stat bg-primary text-white">
                                <div class="card-body">
                                    <div class="mb-4">
                                        <div class="float-left mini-stat-img mr-4"><img src="assets/images/services-icon/04.png" alt=""></div>
                                        <h5 class="font-16 text-uppercase mt-0 text-white-50">Product Sold</h5>
                                        <h4 class="font-500">2436 <i class="mdi mdi-arrow-up text-success ml-2"></i></h4>
                                        <div class="mini-stat-label bg-warning">
                                            <p class="mb-0">+ 84%</p>
                                        </div>
                                    </div>
                                    <div class="pt-2">
                                        <div class="float-right"><a href="#" class="text-white-50"><i class="mdi mdi-arrow-right h5"></i></a></div>
                                        <p class="text-white-50 mb-0">Since last month</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                 
                  
                    <div class="row">
                        <div class="col-xl-8">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="mt-0 header-title mb-4">Latest Trasaction</h4>
                                    <div class="table-responsive">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th scope="col">(#) Id</th>
                                                    <th scope="col">Name</th>
                                                    <th scope="col">Date</th>
                                                    <th scope="col">Amount</th>
                                                    <th scope="col" colspan="2">Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">#14256</th>
                                                    <td>
                                                        <div><img src="assets/images/users/user-2.jpg" alt="" class="thumb-md rounded-circle mr-2"> Philip Smead</div>
                                                    </td>
                                                    <td>15/1/2018</td>
                                                    <td>$94</td>
                                                    <td><span class="badge badge-success">Delivered</span></td>
                                                    <td>
                                                        <div><a href="#" class="btn btn-primary btn-sm">Edit</a></div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">#14257</th>
                                                    <td>
                                                        <div><img src="assets/images/users/user-3.jpg" alt="" class="thumb-md rounded-circle mr-2"> Brent Shipley</div>
                                                    </td>
                                                    <td>16/1/2019</td>
                                                    <td>$112</td>
                                                    <td><span class="badge badge-warning">Pending</span></td>
                                                    <td>
                                                        <div><a href="#" class="btn btn-primary btn-sm">Edit</a></div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">#14258</th>
                                                    <td>
                                                        <div><img src="assets/images/users/user-4.jpg" alt="" class="thumb-md rounded-circle mr-2"> Robert Sitton</div>
                                                    </td>
                                                    <td>17/1/2019</td>
                                                    <td>$116</td>
                                                    <td><span class="badge badge-success">Delivered</span></td>
                                                    <td>
                                                        <div><a href="#" class="btn btn-primary btn-sm">Edit</a></div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">#14259</th>
                                                    <td>
                                                        <div><img src="assets/images/users/user-5.jpg" alt="" class="thumb-md rounded-circle mr-2"> Alberto Jackson</div>
                                                    </td>
                                                    <td>18/1/2019</td>
                                                    <td>$109</td>
                                                    <td><span class="badge badge-danger">Cancel</span></td>
                                                    <td>
                                                        <div><a href="#" class="btn btn-primary btn-sm">Edit</a></div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">#14260</th>
                                                    <td>
                                                        <div><img src="assets/images/users/user-6.jpg" alt="" class="thumb-md rounded-circle mr-2"> David Sanchez</div>
                                                    </td>
                                                    <td>19/1/2019</td>
                                                    <td>$120</td>
                                                    <td><span class="badge badge-success">Delivered</span></td>
                                                    <td>
                                                        <div><a href="#" class="btn btn-primary btn-sm">Edit</a></div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="mt-0 header-title mb-4">Chat</h4>
                                    <div class="chat-conversation">
                                        <ul class="conversation-list slimscroll" style="max-height: 400px;">
                                            <li class="clearfix">
                                                <div class="chat-avatar"><img src="assets/images/users/user-2.jpg" alt="male"> <span class="time">10:00</span></div>
                                                <div class="conversation-text">
                                                    <div class="ctext-wrap"><span class="user-name">John Deo</span>
                                                        <p>Hello!</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="clearfix odd">
                                                <div class="chat-avatar"><img src="assets/images/users/user-3.jpg" alt="Female"> <span class="time">10:01</span></div>
                                                <div class="conversation-text">
                                                    <div class="ctext-wrap"><span class="user-name">Smith</span>
                                                        <p>Hi, How are you? What about our next meeting?</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="clearfix">
                                                <div class="chat-avatar"><img src="assets/images/users/user-2.jpg" alt="male"> <span class="time">10:04</span></div>
                                                <div class="conversation-text">
                                                    <div class="ctext-wrap"><span class="user-name">John Deo</span>
                                                        <p>Yeah everything is fine</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="clearfix odd">
                                                <div class="chat-avatar"><img src="assets/images/users/user-3.jpg" alt="male"> <span class="time">10:05</span></div>
                                                <div class="conversation-text">
                                                    <div class="ctext-wrap"><span class="user-name">Smith</span>
                                                        <p>Wow that's great</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="clearfix odd">
                                                <div class="chat-avatar"><img src="assets/images/users/user-3.jpg" alt="male"> <span class="time">10:08</span></div>
                                                <div class="conversation-text">
                                                    <div class="ctext-wrap"><span class="user-name mb-2">Smith</span> <img src="assets/images/small/img-1.jpg" alt="" height="48px" class="rounded mr-2"> <img src="assets/images/small/img-2.jpg" alt="" height="48px" class="rounded"></div>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="row">
                                            <div class="col-sm-9 col-8 chat-inputbar"><input type="text" class="form-control chat-input" placeholder="Enter your text"></div>
                                            <div class="col-sm-3 col-4 chat-send"><button type="submit" class="btn btn-success btn-block">Send</button></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- end row -->
                </div><!-- container-fluid -->
            </div><!-- content -->
           

@endsection