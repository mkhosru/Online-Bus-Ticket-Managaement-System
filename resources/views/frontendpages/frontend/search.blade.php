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
            <form role="search" action="/search" method="post">
                @csrf
        <div class="form-row">
            <div class="col-12 col-md-3 col">
               <select name="start_point" class="form-control">

                        @foreach($departures as $departure)
                            <option value="{{ $departure->id }}" >{{ $departure->departure_name }}</option>
                          @endforeach

               </select>
            </div>
            <div class="col-12 col-md-3 col">
               
               <select name="end_point" class="form-control">

                        @foreach($destinations as $destination)
                            <option value="{{ $destination->id }}" >{{ $destination->destination_palce }}</option>
                            @endforeach

               </select>

            </div>

                     <div class="col-12 col-md-3 col">
               
               <select name="date" class="form-control">

                       @foreach($dates as $date)
                            <option value="{{ $date->id }}" >{{ $date->date }}</option>
                            @endforeach

               </select>

            </div>

            <!-- <div class="col-12 col-md-3 col">
                <input type="text" name="date" id="datetimepicker2"
                       value="26 Oct 2019" class="form-control"
                       placeholder="Date">

            </div> -->
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
                                <th>ID</th>
                                <th>Operator name</th>
                                <th>From</th>
                                <th>To</th>
                                <th>Coach Type</td>
                                <th>Date</th>
                                <th>Time</th>
                                <th>Duration</th>
                                <th>Total Seat</th>
                                <th>Price</th>
                                <th>View Seats</th>
                            </tr>
                        </thead>

                            <tbody>
                                @foreach($all_addbus as $addbus)
                               
                              <tr>
                                <td scope="row">{{ $addbus->id }}</td>

                                <td scope="row">{{ $addbus->relationbetweenBusName->operator_name }}</td>
                                <td scope="row">{{ $addbus->relationbetweenDeparture->departure_name }}</td>
                                <td scope="row">{{ $addbus->relationbetweenDestination->destination_palce }}</td>
                                <td scope="row">{{ $addbus->relationbetweenCoachType->coach_type }}</td>
                                <td scope="row">{{ $addbus->relationbetweenDate->date }}</td>
                                <td scope="row">{{ $addbus->relationbetweenTime->time }}</td>
                                <td scope="row">{{ $addbus->relationbetweenDuration->duration }}</td>
                                <td scope="row">{{ $addbus->realtionbetweenTotalseat->total_seat }}</td>
                                <td scope="row">{{ $addbus->relationbetweenPrice->price }}</td>
                                    <th>
                                        <a href="{{ url('/frontendpages/seat') }}\{{ $addbus->id }}" class="btn btn-primary">View
                                            Seats</a>
                                    </th>
                                </tr>
                              @endforeach       
                        </tbody>
                    </table>
                </div>


                </div>
            </div>
        </div>
    </div>
    <!-- =========== Main Ticket Booking Area End ===================== -->


@endsection