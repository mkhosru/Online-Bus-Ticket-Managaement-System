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
                    <h6>Search By Bus Chassis Number</h6>
                </div>
                <div class="card-body">
					<form method="post" action="/report">

						@csrf
						<div class="form-group row">
					    <label for="operator_id" class="col-sm-2 col-form-label">Chassis Number</label>
					    <div class="col-sm-10">
					      <select name="chassis" id="chassis" class="form-control" required>
					      	<option >Select</option>
					      	@php
							$id= null;
					      	@endphp

					      	@foreach($report as $reports)

					      	@if($id==null)

					      	@php
							$id =$reports->dura_chassis_num;
					      	@endphp
					      		<option value="{{ $id }}" >{{ $id }}</option>

					      		@else

					      		@if($id!= $reports->dura_chassis_num)

					      		@php
					      		$id =$reports->dura_chassis_num;
					      		@endphp
					      		<option value="{{ $id }}" >{{ $id }}</option>

					      		@endif

				      		@endif

					      	@endforeach
					     
					      	
					      
					      </select>
					    </div>
					</div>
							<div>
                            	
                                <button class="btn btn-primary BusSubmit mar-left" type="submit">Search</button>

                            </div>
					
				</form>
			</div>
		</div>
	</div>
</div>
</div>





@endsection