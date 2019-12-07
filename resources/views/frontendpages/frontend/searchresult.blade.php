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
        <div class="container">
            <div class="row">
                <div class="col-12">
                <div class="table-responsive">
                    @if(isset($details))

                {{ $query }}

                
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <td>ID</td>
                                <td>Operator name</td>
                                <td>From</td>
                                <td>To</td>
                                <td>Coach Type</td>
                                <td>Date</td>
                                <td>Time</td>
                                <td>Duration</td>
                                <td>Total Seat</td>
                                <td>Price</td>
                                <td>View Seats</td>
                            </tr>
                        </thead>

                         <tbody>
                            @foreach($details as $user)
                        	 <tr>
                                <th scope="row">{{ $user->id }}</th>

                                <th scope="row">{{ $user->relationbetweenBusName->operator_name }}</th>
                                <th scope="row">{{ $user->relationbetweenDeparture->departure_name }}</th>
                                <th scope="row">{{ $user->relationbetweenDestination->destination_palce }}</th>
                                <th scope="row">{{ $user->relationbetweenCoachType->coach_type }}</th>
                                <th scope="row">{{ $user->relationbetweenDate->date }}</th>
                                <th scope="row">{{ $user->relationbetweenTime->time }}</th>
                                <th scope="row">{{ $user->relationbetweenDuration->duration }}</th>
                                <th scope="row">{{ $user->realtionbetweenTotalseat->total_seat }}</th>
                                <th scope="row">{{ $user->relationbetweenPrice->price }}</th>
                                    
                                      <td>
                                        <a href="{{ url('/frontendpages/seat') }}\{{ $user->id }}" class="btn btn-primary" target="_blank">View
                                            Seats</a>
                                    </td>            
                                </tr>
                              
                            @endforeach

                        </tbody>

                       </table>
                @endif
                      </div>
                     </div>
                    </div>
                   </div>
                 </div>




@endsection