@extends('dashboardpages.dashboardhome.app')

@section('title')
OBTMS dashboard
@endsection

@section('content')

<div class="container-fluid my-3">
    <div class="d-flex row mar-top">
    	<div class="col-md-3"></div>
        <div class="col-md-7">
            <!-- Basic Validation -->
            <div class="card mb-3 shadow no-b r-0">
                <div class="card-header white">
                    <h6>Chassis No:{{$chassis_no}}, Bus Name:{{$bus_name}} All Informations</h6>
                </div>
                <div class="card-body">
            <table class="table table-striped musa">
				  <thead>
				    <tr>
				      <th scope="col">Bus name</th>
				      <th scope="col">{{$bus_name}}</th>			      
				    </tr>
				    <tr>
				      <th scope="col">Coach Type</th>
				      <th scope="col">{{$coach_type}}</th>			      
				    </tr><tr>
				      <th scope="col">Departure</th>
				      <th scope="col">{{$departure}}</th>			      
				    </tr>
				    <tr>
				      <th scope="col">Destination</th>
				      <th scope="col">{{$destination}}</th>			      
				    </tr>
				    <tr>
				      <th scope="col">Date</th>
				      <th scope="col">{{$date}}</th>			      
				    </tr>
				    <tr>
				      <th scope="col">Time</th>
				      <th scope="col">{{$time}}</th>			      
				    </tr>
				    <tr>
				      <th scope="col" class="align-middle">Seat Number</th>
				      <th scope="col">{{$seat_number}}</th>			      
				    </tr>
				    <tr>
				      <th scope="col">Total Seat</th>
				      <th scope="col">{{$total_seat}}</th>			      
				    </tr>
				    <tr>
				      <th scope="col">Chassis No</th>
				      <th scope="col">{{$chassis_no}}</th>			      
				    </tr>
				    <tr>
				      <th scope="col">Total Price</th>
				      <th scope="col">{{ $total_price }}</th>			      
				    </tr>
				   </thead>
				  <tbody>
				</tbody>
			</table>



	

				</div>
				    <button class="btn btn-primary BusSubmit mar-left" onclick="myFunction()">Print</button>

				        <!-- <div>
                            	
                                <button class="btn btn-primary BusSubmit mar-left" type="submit">Search</button>

                            </div> -->
			</div>
		</div>
	</div>
</div>

<script>
function myFunction() {
  window.print();
}
</script>





@endsection