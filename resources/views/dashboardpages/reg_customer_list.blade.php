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
                        <button class="btn btn-primary BusSubmit " onclick="myFunction()">Print</button>

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
                         	@foreach($single_user as $users)
						           
                         	<tr>
                         		<td>{{ $users->id }}</td>
                         		<td>{{ $users->username }}</td>
                         		<td>{{ $users->PhoneNumber }}</td>
                         		<td>{{ $users->email }}</td>


                                
                         		   <td>
                                 <a href="#" class="btn btn-primary delete_btn">Delete</a>

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



<script>
function myFunction() {
  window.print();
}
</script>







@endsection