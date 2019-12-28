@extends('frontendpages.frontend.app')

@section('title')
OBTMS-Home
@endsection

@section('content')




 
        <section id="breadcrumb">
    <div class="overly"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-10 text-center">
                <div class="breadcrumbinfo">
                    <article>
                        <h2>Check Your All info and confirm the payment</h2>
                        
                    </article>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- ----------------------------------------------------- -->



<div id="ticket-booking">
        <div class="">
            <div class="row">
                <div class="col-12">
                <div class="table-responsive">
                   

              

                
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Operator name</th>
                                <th>From</th>
                                <th>To</th>
                                <th>Coach Type</th>
                                <th>Date</th>
                                <th>Time</th>
                                <th>Duration</th>
                                <th>Total Seat</th>
                                <th>total fare</th>
                                <th>seat number</th>
                                <th>boarding</th>
                                <th>Status</th>
                                <th>Cancel</th>
                                <th>booked</th>
                            </tr>
                        </thead>

                         <tbody>
                            @foreach($single_ticket as $only_ticket)
                            @if(Auth::user()->PhoneNumber==$only_ticket->phone)
                           
                             <tr>
                                <td scope="">{{ $only_ticket->id }}</td>
                                <td scope="">{{ $only_ticket->customer_name }}</td>
                                <td scope="">{{ $only_ticket->phone }}</td>
                                <td scope="">{{ $only_ticket->operator }}</td>
                                <td scope="">{{ $only_ticket->departure }}</td>
                                <td scope="">{{ $only_ticket->destination }}</td>
                                <td scope="">{{ $only_ticket->coach_type }}</td>
                                <td scope="">{{ $only_ticket->journey_date }}</td>
                                <td scope="">{{ $only_ticket->time }}</td>
                                <td scope="">{{ $only_ticket->dura_chassis_num }}</td>
                                <td scope="">{{ $only_ticket->total_seat }}</td>
                                <td scope="">{{ $only_ticket->total_fare }}</td>
                                <td scope="">{{ $only_ticket->seat_number }}</td>
                                <td scope="">{{ $only_ticket->boarding_point }}</td>

                                              @if($only_ticket->payment_status==1)
                                                    <td><span class="btn btn-primary">Paid</span></td>
                                                    @else
                                                    <td><span class="btn btn-primary front_due">Due</span></td>
                                                    @endif
                                     <td>
                                        <a href="{{ url('/ticket/delete') }}\{{ $only_ticket->id }}" class="btn btn-primary front_delete_btn">Cancel</a>
                                    </td>
                                    <td scope="">{{ $only_ticket->updated_at }}</td>
                            </tr>
                            @endif
                            
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>










@endsection