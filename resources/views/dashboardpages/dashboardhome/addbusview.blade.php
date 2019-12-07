@extends('dashboardpages.dashboardhome.app')

@section('title')
OBTMS dashboard
@endsection

@section('content')

<!-- <section id="contact-main">

<div class="contact-form">
 <div class="container">
   <div class="row contact-form-area">
      <div class="col-lg-8 offset-2 contact-form">
                                                
        

        	
           

            
                    <div class="row">
                        

                      <div class="col-7">
              <table class="table table-striped new_mar"> -->
      <div id="ticket-booking">
        <div class="container">
            <div class="row">
                <div class="col-12">
                	<div class="card mb-3 shadow no-b r-0 mar_new_new">
                		<div class="card-header col-md-12 white ">
                      <div class="col-md-2"><div class="clearfix"></div></div>

                			<div class="col-md-10 float-right">
                        <h6>View Bus Information List</h6>
                      
                    <div class="table-responsive">
                        <table class="table table-bordered ">
                          <thead>
                                <tr>
                                  <th scope="col">ID</th>
                                  <th scope="col">Operator Name</th>
                                  <th scope="col">From</th>
                                  <th scope="col">To</th>
                                  <th scope="col">Coach Type</th>
                                  <th scope="col">Date</th>
                                  <th scope="col">Time</th>
                                  <th scope="col">Duration</th>
                                  <th scope="col">Total Seat</th>
                                  <th scope="col">Price</th>
                                  <th scope="col">Action</th>
                                 
                                </tr>
                          </thead>
                <tbody>
                  @foreach($all_addbus as $addbus)
                               
                  <tr>
                    <th scope="row">{{ $addbus->id }}</th>
                    <th scope="row">{{ $addbus->relationbetweenBusName->operator_name }}</th>
                    <th scope="row">{{ $addbus->relationbetweenDeparture->departure_name }}</th>
                    <th scope="row">{{ $addbus->relationbetweenDestination->destination_palce }}</th>
                    <th scope="row">{{ $addbus->relationbetweenCoachType->coach_type }}</th>
                    <th scope="row">{{ $addbus->relationbetweenDate->date }}</th>
                    <th scope="row">{{ $addbus->relationbetweenTime->time }}</th>
                    <th scope="row">{{ $addbus->relationbetweenDuration->duration }}</th>
                    <th scope="row">{{ $addbus->realtionbetweenTotalseat->total_seat }}</th>
                    <th scope="row">{{ $addbus->relationbetweenPrice->price }}</th>

                                    
                                    <!-- <td>{{ $addbus->relationbetweenBusName->operator_name }}</td> -->
                                   
                                      

                               <td>
                                 <a href="{{ url('/admin/buslist/Edit') }}/{{ $addbus->id }}" class="btn btn-primary">Edit</a>

                                 <a href="{{ url('/admin/buslist/delete/') }}\{{ $addbus->id }}" class="btn btn-primary delete_btn">Delete</a>
                               </td>
                      </tr>
                @endforeach
              </tbody>
         </table>
                     </div>   
                      </div>

                   
                   </div>
              </div>

     

                
           </div> 
          </div>
        </div>
      <!-- </div> 
 </section> -->  




@endsection