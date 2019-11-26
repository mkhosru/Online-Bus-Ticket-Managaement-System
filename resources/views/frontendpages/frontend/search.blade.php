@extends('frontendpages.frontend.app')

@section('title')
OBTMS-Home
@endsection

@section('content')

    
    <section id="breadcrumb">
        <div class="overly"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10 col-md-12 text-center">
                    <div class="breadcrumbinfo">
                        <article>
                            <span class="b-title">Stop Looking. Start Tracking!</span>
                            <form action="https://ideal.thesoftking.com/bluebus/search" method="get">
                                <div class="form-row">
                                    <div class="col-12 col-md-3 col">
                                        <input type="text" name="start_point" value=""
                                               id="fromAutoComplete" class="form-control" placeholder="Form">
                                    </div>
                                    <div class="col-12 col-md-3 col">
                                        <input type="text" name="end_point" value="" id="toAutoComplete"
                                               class="form-control" placeholder="To">
                                    </div>
                                    <div class="col-12 col-md-3 col">
                                        <input type="text" name="date" id="datetimepicker2"
                                               value="26 Oct 2019" class="form-control"
                                               placeholder="Date">

                                    </div>
                                    <div class="col-12 col-md-3 col">
                                        <button type="submit" class="form-control h-serch">SEARCH</button>
                                    </div>
                                </div>
                            </form>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =========== banner end =========== -->

    <!-- =========== Main Ticket Booking Area Start ===================== -->
    <div id="ticket-booking">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <td>Operator</td>
                                <td>Departure</td>
                                <td>Duration</td>
                                <td>Distance</td>
                                <td>Arrival</td>
                                <td>Total Seat</td>
                                <td>Fare</td>
                                <td>View Seats</td>
                            </tr>
                            </thead>

                            <tbody>
                                                                                                <tr>
                                        <td>
                                            <div class="t-box-1">
                                                <h5>ROUTE 01</h5>
                                                <strong>26 Oct 2019</strong>
                                            </div>
                                        </td>
                                        <td>
                                            <h5>11:03 AM</h5>
                                            <strong class="text-success">Location 1</strong>
                                        </td>
                                        <td>
                                            <div class="media">
                                                <div class="media-body">
                                                    <strong class="text-danger">5.5</strong>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <strong>500</strong>
                                        </td>
                                        <td>
                                            <strong class="text-success">Location 2</strong>
                                        </td>

                                        <td>
                                            <div class="p-img">
                                                <p>41 seats</p>
                                            </div>
                                            <p class="text-success">Coach</p>
                                        </td>
                                        

                                        <td>

                                            <div class="p-img">
                                                                                                    <strong>50.00 USD</strong>

                                                                                            </div>
                                        </td>

                                        <td>
                                            <div class="l-box">
                                                <div class="media">
                                                    <div class="media-body align-self-end">
                                                        <div class="link">
                                                            <a href="view-seat/1147.html" target="_blank">View
                                                                Seats</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                                                    <tr>
                                        <td>
                                            <div class="t-box-1">
                                                <h5>ROUTE 02</h5>
                                                <strong>26 Oct 2019</strong>
                                            </div>
                                        </td>
                                        <td>
                                            <h5>11:03 AM</h5>
                                            <strong class="text-success">Location 2</strong>
                                        </td>
                                        <td>
                                            <div class="media">
                                                <div class="media-body">
                                                    <strong class="text-danger">5.5</strong>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <strong>500</strong>
                                        </td>
                                        <td>
                                            <strong class="text-success">Location 1</strong>
                                        </td>

                                        <td>
                                            <div class="p-img">
                                                <p>41 seats</p>
                                            </div>
                                            <p class="text-success">Coach</p>
                                        </td>
                                        

                                        <td>

                                            <div class="p-img">
                                                                                                    <strong>50.00 USD</strong>

                                                                                            </div>
                                        </td>

                                        <td>
                                            <div class="l-box">
                                                <div class="media">
                                                    <div class="media-body align-self-end">
                                                        <div class="link">
                                                            <a href="view-seat/1148.html" target="_blank">View
                                                                Seats</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                                                    <tr>
                                        <td>
                                            <div class="t-box-1">
                                                <h5>ROUTE 01</h5>
                                                <strong>26 Oct 2019</strong>
                                            </div>
                                        </td>
                                        <td>
                                            <h5>11:03 AM</h5>
                                            <strong class="text-success">Location 1</strong>
                                        </td>
                                        <td>
                                            <div class="media">
                                                <div class="media-body">
                                                    <strong class="text-danger">5.5</strong>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <strong>500</strong>
                                        </td>
                                        <td>
                                            <strong class="text-success">Location 2</strong>
                                        </td>

                                        <td>
                                            <div class="p-img">
                                                <p>31 seats</p>
                                            </div>
                                            <p class="text-success">Classic</p>
                                        </td>
                                        

                                        <td>

                                            <div class="p-img">
                                                                                                    <strong>55.00 USD</strong>

                                                                                            </div>
                                        </td>

                                        <td>
                                            <div class="l-box">
                                                <div class="media">
                                                    <div class="media-body align-self-end">
                                                        <div class="link">
                                                            <a href="view-seat/1149.html" target="_blank">View
                                                                Seats</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                                                    <tr>
                                        <td>
                                            <div class="t-box-1">
                                                <h5>ROUTE 02</h5>
                                                <strong>26 Oct 2019</strong>
                                            </div>
                                        </td>
                                        <td>
                                            <h5>11:03 AM</h5>
                                            <strong class="text-success">Location 2</strong>
                                        </td>
                                        <td>
                                            <div class="media">
                                                <div class="media-body">
                                                    <strong class="text-danger">5.5</strong>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <strong>500</strong>
                                        </td>
                                        <td>
                                            <strong class="text-success">Location 1</strong>
                                        </td>

                                        <td>
                                            <div class="p-img">
                                                <p>31 seats</p>
                                            </div>
                                            <p class="text-success">Classic</p>
                                        </td>
                                        

                                        <td>

                                            <div class="p-img">
                                                                                                    <strong>55.00 USD</strong>

                                                                                            </div>
                                        </td>

                                        <td>
                                            <div class="l-box">
                                                <div class="media">
                                                    <div class="media-body align-self-end">
                                                        <div class="link">
                                                            <a href="view-seat/1150.html" target="_blank">View
                                                                Seats</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                                                    <tr>
                                        <td>
                                            <div class="t-box-1">
                                                <h5>ROUTE 01</h5>
                                                <strong>26 Oct 2019</strong>
                                            </div>
                                        </td>
                                        <td>
                                            <h5>11:03 AM</h5>
                                            <strong class="text-success">Location 1</strong>
                                        </td>
                                        <td>
                                            <div class="media">
                                                <div class="media-body">
                                                    <strong class="text-danger">5.5</strong>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <strong>500</strong>
                                        </td>
                                        <td>
                                            <strong class="text-success">Location 2</strong>
                                        </td>

                                        <td>
                                            <div class="p-img">
                                                <p>20 seats</p>
                                            </div>
                                            <p class="text-success">VIP</p>
                                        </td>
                                        

                                        <td>

                                            <div class="p-img">
                                                                                                    <strong>99.00 USD</strong>

                                                                                            </div>
                                        </td>

                                        <td>
                                            <div class="l-box">
                                                <div class="media">
                                                    <div class="media-body align-self-end">
                                                        <div class="link">
                                                            <a href="view-seat/1151.html" target="_blank">View
                                                                Seats</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                                                    <tr>
                                        <td>
                                            <div class="t-box-1">
                                                <h5>ROUTE 02</h5>
                                                <strong>26 Oct 2019</strong>
                                            </div>
                                        </td>
                                        <td>
                                            <h5>11:03 AM</h5>
                                            <strong class="text-success">Location 2</strong>
                                        </td>
                                        <td>
                                            <div class="media">
                                                <div class="media-body">
                                                    <strong class="text-danger">5.5</strong>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <strong>500</strong>
                                        </td>
                                        <td>
                                            <strong class="text-success">Location 1</strong>
                                        </td>

                                        <td>
                                            <div class="p-img">
                                                <p>20 seats</p>
                                            </div>
                                            <p class="text-success">VIP</p>
                                        </td>
                                        

                                        <td>

                                            <div class="p-img">
                                                                                                    <strong>99.00 USD</strong>

                                                                                            </div>
                                        </td>

                                        <td>
                                            <div class="l-box">
                                                <div class="media">
                                                    <div class="media-body align-self-end">
                                                        <div class="link">
                                                            <a href="view-seat/1152.html" target="_blank">View
                                                                Seats</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                                                                        </tbody>
                        </table>
                    </div>


                </div>
            </div>
        </div>
    </div>
    <!-- =========== Main Ticket Booking Area End ===================== -->


@endsection