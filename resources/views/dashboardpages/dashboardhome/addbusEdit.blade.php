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
                    <h6>Edit New Bus Informations</h6>
                </div>
                <div class="card-body">
					<form method="post" action="{{ route('bus_list_update') }}">

						@csrf
						<input type="hidden" name="bus_id" value="{{ $single_bus_edit->id }}">
						<div class="form-group row">
					    <label for="operator_id" class="col-sm-2 col-form-label">Bus Name</label>
					    <div class="col-sm-10">
					      <select name="operator_id" id="operator_id" class="form-control" required>
					      	<option value="{{ $single_bus_edit->operator_id }}">{{ $single_bus_edit->relationbetweenBusName->operator_name }}</option>
					      	@foreach($busnames as $busname)
					      		<option value="{{ $busname->id }}" >{{ $busname->operator_name }}</option>
					      	@endforeach
					      
					      </select>
					    </div>
					</div>
					





					<div class="form-group row">
					    <label for="from_id" class="col-sm-2 col-form-label">From</label>
					    <div class="col-sm-10">
					      <select name="from_id" id="from_id" class="form-control" required>
					      	<option value="{{ $single_bus_edit->from_id }}">{{ $single_bus_edit->relationbetweenDeparture->departure_name }}</option>

					     @foreach($departures as $departure)
					      	<option value="{{ $departure->id }}" >{{ $departure->departure_name }}</option>
					      @endforeach
					      
					      </select>
					    </div>
					</div>
							
					<div class="form-group row">
					    <label for="to_id" class="col-sm-2 col-form-label">To</label>
					    <div class="col-sm-10">
					      <select name="to_id" id="to_id" class="form-control" required>
					      	<option value="{{ $single_bus_edit->to_id }}">{{ $single_bus_edit->relationbetweenDestination->destination_palce }}</option>

							@foreach($destinations as $destination)
					      	<option value="{{ $destination->id }}" >{{ $destination->destination_palce }}</option>
					        @endforeach
					      	

					      </select>
					    </div>
					</div>

				

					<div class="form-group row">
					    <label for="coach_type_id" class="col-sm-2 col-form-label">Coach Type</label>
					    <div class="col-sm-10">
					      <select name="coach_type_id" id="coach_type_id" class="form-control" required>
					      	<option value="{{ $single_bus_edit->coach_type_id }}">{{ $single_bus_edit->relationbetweenCoachType->coach_type }}</option>
					      	@foreach($coachs as $coach)
					      	<option value="{{ $coach->id }}">{{ $coach->coach_type }}</option>
					        @endforeach
					      </select>
					    </div>
					</div>

					<div class="form-group row">
					    <label for="date_id" class="col-sm-2 col-form-label">Date</label>
					    <div class="col-sm-10">
					      <select name="date_id" id="date_id" class="form-control" required>
					      	<option value="{{ $single_bus_edit->date_id }}">{{ $single_bus_edit->relationbetweenDate->date }}</option>

					      	@foreach($dates as $date)
					      	<option value="{{ $date->id }}">{{ $date->date }}</option>
					        @endforeach

					      </select>
					    </div>
					</div>

					<div class="form-group row">
					    <label for="time_id" class="col-sm-2 col-form-label">Time</label>
					    <div class="col-sm-10">
					      <select name="time_id" id="time_id" class="form-control" required>
					      	<option value="{{ $single_bus_edit->time_id }}">{{ $single_bus_edit->relationbetweenTime->time }}</option>
					      	@foreach($times as $time)
					      	<option value="{{ $time->id }}">{{ $time->time }}</option>
					        @endforeach
					      </select>
					    </div>
					</div>

					<div class="form-group row">
					    <label for="duration_id" class="col-sm-2 col-form-label">Duration</label>
					    <div class="col-sm-10">
					      <select name="duration_id" id="duration_id" class="form-control" required>
					      	<option value="{{ $single_bus_edit->duration_id }}">{{ $single_bus_edit->relationbetweenDuration->duration }}</option>
					      	
							@foreach($durations as $duration)
					      	<option value="{{ $duration->id }}">{{ $duration->duration }}</option>
					        @endforeach

					      </select>
					    </div>
					</div>

					<div class="form-group row">
					    <label for="totalseat_id" class="col-sm-2 col-form-label">Total Seat</label>
					    <div class="col-sm-10">
					      <select name="totalseat_id" id="totalseat_id" class="form-control" required>
					      	<option value="{{ $single_bus_edit->totalseat_id }}">{{ $single_bus_edit->realtionbetweenTotalseat->total_seat }}</option>

					      	@foreach($totalseats as $totalseat)	
					      	<option value="{{ $totalseat->id }}">{{ $totalseat->total_seat }}</option>
					        @endforeach 

					      </select>
					    </div>
					</div>

					<div class="form-group row">
					    <label for="price_id" class="col-sm-2 col-form-label">Price</label>
					    <div class="col-sm-10">
					      <select name="price_id" id="price_id" class="form-control" required>
					      	<option value="{{ $single_bus_edit->price_id }}">{{ $single_bus_edit->relationbetweenPrice->price }}</option>

					      	<!-- option value value="{{ $single_bus_edit->price_id }}" -->

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