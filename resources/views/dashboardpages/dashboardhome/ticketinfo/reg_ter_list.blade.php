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
                    <h6>Register Rerminal List</h6>
                </div>

                <div class="card-body">
				
				
                	<table class="table table-striped">
                          <thead>
                                <tr>
                                  <th scope="col">ID</th>
                                  <th scope="col">Operator Name</th>
                                  <th scope="col">terminal Name</th>
                                 
                                </tr>
                          </thead>
                          
                         <tbody>
						              @foreach($Reg_terminals as $Reg_terminal)
                         	<tr>
                         		<td>{{ $Reg_terminal->id }}</td>
                         		<td>{{ App\BusName::findOrFail($Reg_terminal->reg_operator_id)->operator_name }}</td>
                         		<td>{{ App\Terminal::findOrFail($Reg_terminal->reg_terminal_id)->terminal_name }}</td>

                         	</tr>
                         @endforeach
                          
                         </tbody>

                      </table>
				
				</div>
			</div>
		</div>
	</div>
</div>			










@endsection