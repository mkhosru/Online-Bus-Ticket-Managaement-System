.@extends('dashboardpages.dashboardhome.app')

@section('title')
OBTMS dashboard
@endsection

@section('content')

@if (session('success'))
   <div class="alert alert-success">
       {{ session('success') }}
   </div>
   @endif


<section id="contact-main">

<div class="contact-form">
 <div class="container">
   <div class="row contact-form-area">
      <div class="col-lg-8 offset-2 contact-form">
                                                
      <form id="c-form" class="custom-margin" action="{{ route('bus_busname_insert') }}" method="post">

        	
            @csrf

            
          <div class="row">
                <div class="col-md-4">
                  <div class="form-group">
                       <h5>Operator</h5>
                         <input type="text" value="" name="operator_name" id="operator_name"  class="form-control" placeholder="Operator Name" autocomplete="off">
                      </div>

                        <div>
                          <button class="btn btn-primary BusSubmit" type="submit">Submit</button>
                        </div>

                  </div>

              <div class="col-7">
                    <table class="table table-striped">
                          <thead>
                                <tr>
                                  <th scope="col">ID</th>
                                  <th scope="col">Operator Name</th>
                                  <th scope="col">Action</th>
                                  <th scope="col">Action</th>
                                </tr>
                          </thead>
                          <tbody>
                                @foreach($all_bus_names as $bus_names)
                                <tr>
                                      <th scope="row">{{ $bus_names->id }}</th>
                                      <td>{{ $bus_names->operator_name }}</td>
                                      <td>
                                        <a href="{{ url('/admin/busname/edit') }}\{{ $bus_names->id }}" class="btn btn-primary">Edit</a>
                                      </td>

                                      <td>
                                        <a href="{{ url('/admin/busname/delete') }}\{{ $bus_names->id }}" class="btn btn-primary delete_btn">Delete</a>
                                      </td>
                                </tr>
                                @endforeach
                           </tbody>
                        </table>
                    </div>
                    
               </div>

 		       </form>

                
       </div> 
     </div>
         


      
   </div>
  </div> 
 </section>
   






@endsection