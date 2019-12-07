@extends('dashboardpages.dashboardhome.app')

@section('title')
OBTMS dashboard
@endsection

@section('content')



<div class="container-fluid my-3">
    <div class="d-flex row mar-top">
    	<div class="col-md-4"></div>
        <div class="col-md-6">
          
            <div class="card mb-3 shadow no-b r-0">

                <div class="card-header white">
                    <h6>Add Register Rerminal <a href="{{ url('/admin/reg_terminal/list') }}" class="btn btn-primary">View List</a></h6>
                </div>

                <div class="card-body">
					<form method="post" action="{{ route('register_terminal_insert') }}">

						@csrf
						<div class="form-group row">
					    <label for="operator_id" class="col-sm-2 col-form-label">Bus Name</label>
					    <div class="col-sm-10">
					      <select name="reg_operator_id" id="operator_id" class="form-control" required>
					      	<option >Select</option>

					       @foreach($only_bus as $buses)
					      	<option value="{{ $buses->id }}" >{{ $buses->relationbetweenBusName->operator_name }}</option>
					       @endforeach
					      
					      </select>
					    </div>
					</div>

					<div class="form-group row">
					    <label for="from_id" class="col-sm-2 col-form-label">Terminal</label>
					    <div class="col-sm-10">
					      <select name="reg_terminal_id" id="reg_terminal_id" class="form-control" required>
					      	<option >Select</option>

					    @foreach($only_terminal as $terminals)
					     <option value="{{ $terminals->id }}" >{{ $terminals->terminal_name }}</option>
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