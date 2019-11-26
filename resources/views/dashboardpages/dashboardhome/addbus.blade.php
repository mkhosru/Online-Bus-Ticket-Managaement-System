@extends('dashboardpages.dashboardhome.app')

@section('title')
OBTMS dashboard
@endsection

@section('content')



<div class="container-fluid my-3">
    <div class="d-flex row mar-top">
    	<div class="col-md-4"></div>
        <div class="col-md-6">
            <!-- Basic Validation -->
            <div class="card mb-3 shadow no-b r-0">
                <div class="card-header white">
                    <h6>Create Bus Informations</h6>
                </div>
                <div class="card-body">
					<form method="post" action="#">

						@csrf
						<div class="form-group row">
					    <label for="form" class="col-sm-2 col-form-label">Bus Name</label>
					    <div class="col-sm-10">
					      <select name="form_id" id="" class="form-control" required>
					      	<option >Select</option>
					      	@foreach($busnames as $busname)
					      		<option value="{{ $busname->id }}" >{{ $busname->operator_name }}</option>
					      	@endforeach
					      
					      </select>
					    </div>
					</div>

					<div class="form-group row">
					    <label for="form" class="col-sm-2 col-form-label">From</label>
					    <div class="col-sm-10">
					      <select name="form_id" id="" class="form-control" required>
					      	<option >Select</option>

					     @foreach($departures as $departure)
					      	<option value="{{ $departure->id }}" >{{ $departure->departure_name }}</option>
					      @endforeach
					      
					      </select>
					    </div>
					</div>

					<div class="form-group row">
					    <label for="form" class="col-sm-2 col-form-label">To</label>
					    <div class="col-sm-10">
					      <select name="form_id" id="" class="form-control" required>
					      	<option >Select</option>
					      	
					      	@foreach($destinations as $destination)
					      	<option value="{{ $destination->id }}" >{{ $destination->destination_palce }}</option>
					        @endforeach

					      </select>
					    </div>
					</div>

					<div class="form-group row">
					    <label for="form" class="col-sm-2 col-form-label">Coach Type</label>
					    <div class="col-sm-10">
					      <select name="form_id" id="" class="form-control" required>
					      	<option >Select</option>
					      	@foreach($coachs as $coach)
					      	<option value="{{ $coach->id }}" >{{ $coach->coach_type }}</option>
					        @endforeach
					      </select>
					    </div>
					</div>

					<div class="form-group row">
					    <label for="form" class="col-sm-2 col-form-label">Date</label>
					    <div class="col-sm-10">
					      <select name="form_id" id="" class="form-control" required>
					      	<option >Select</option>

					      	@foreach($dates as $date)
					      	<option value="{{ $date->id }}" >{{ $date->date }}</option>
					        @endforeach

					      </select>
					    </div>
					</div>

					<div class="form-group row">
					    <label for="form" class="col-sm-2 col-form-label">Time</label>
					    <div class="col-sm-10">
					      <select name="form_id" id="" class="form-control" required>
					      	<option >Select</option>
					      	@foreach($times as $time)
					      	<option value="{{ $time->id }}" >{{ $time->time }}</option>
					        @endforeach
					      </select>
					    </div>
					</div>

					<div class="form-group row">
					    <label for="form" class="col-sm-2 col-form-label">Duration</label>
					    <div class="col-sm-10">
					      <select name="form_id" id="" class="form-control" required>
					      	<option >Select</option>
					      	
							@foreach($durations as $duration)
					      	<option value="{{ $duration->id }}" >{{ $duration->duration }}</option>
					        @endforeach

					      </select>
					    </div>
					</div>

					<div class="form-group row">
					    <label for="form" class="col-sm-2 col-form-label">Total Seat</label>
					    <div class="col-sm-10">
					      <select name="form_id" id="" class="form-control" required>
					      	<option >Select</option>

					      	@foreach($totalseats as $totalseat)	
					      	<option value="{{ $totalseat->id }}" >{{ $totalseat->total_seat }}</option>
					        @endforeach 

					      </select>
					    </div>
					</div>

					<div class="form-group row">
					    <label for="form" class="col-sm-2 col-form-label">Price</label>
					    <div class="col-sm-10">
					      <select name="form_id" id="" class="form-control" required>
					      	<option >Select</option>
					      	
					      	@foreach($prices as $price)
					      	<option value="{{ $price->id }}" >{{ $price->price }}</option>
					        @endforeach

					      </select>
					    </div>
					</div>

					      <div>
                            	
                                <button class="btn btn-primary BusSubmit mar-left" type="submit">Submit</button>

                            </div>

					 
					</form>
				</div>
			</div>
		</div>
	</div>
</div>			










@endsection