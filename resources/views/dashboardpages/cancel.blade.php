@extends('dashboardpages.dashboardhome.app')

@section('title')
OBTMS dashboard
@endsection

@section('content')



<div class="container-fluid my-3">
    <div class="d-flex row mar-top">
    	<div class="col-md-3"></div>
        <div class="col-md-7">
          
            <div class="card mb-3 shadow no-b r-0">
              
                <div class="card-header white">
                    <h6>User List </h6>
                      <div class="user_list_lol">
                        <a href="{{ url('/frontendpages/register') }}" class="btn btn-primary">Create user</a>

                        

                      </div>
                </div>

                <div class="card-body">
				
				
                	<table class="table table-striped">
                          <thead>

                                <tr>
                                  <th scope="col">ID</th>
                                  <th scope="col">User Name</th>
                                  <th scope="col">Contact Number</th>
                                  <th scope="col">Email</th>
                                  <th scope="col">Action</th>
                                 
                                 
                                </tr>
                          </thead>
                          
                         <tbody>
                         	
						           
                         	<tr>
                         		<td></td>
                         		<td></td>
                         		


                                
                         		   
                         	</tr>

                      
                          
                         </tbody>
                        

                      </table>

				
				</div>
			</div>
		</div>
	</div>
</div>			











@endsection