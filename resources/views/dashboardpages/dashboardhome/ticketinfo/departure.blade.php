@extends('dashboardpages.dashboardhome.app')

@section('title')
OBTMS dashboard
@endsection

@section('content')



<section id="contact-main">

<div class="contact-form">
 <div class="container">
   <div class="row contact-form-area">
      <div class="col-lg-8 offset-2 contact-form">
                                                
        <form id="c-form" class="custom-margin" action="{{ route('bus_departure_insert') }}" method="post">

        	
            @csrf

            
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">

                                <h5>Departure</h5>
                             <input type="text" value="" name="departure" id="departure"  class="form-control" placeholder="Departure" autocomplete="off">
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
                                  <th scope="col">Departure</th>
                                  <th scope="col">Action</th>
                                  <th scope="col">Action</th>
                                </tr>
                          </thead>
                          <tbody>
                              @foreach($all_departure_name as $all_departure)

                               
                                  <tr>
                                      <th scope="row">{{ $all_departure->id }}</th>
                                      <td>{{ $all_departure->departure_name }}</td>
                                      <td>
                                        <a href="{{ url('/admin/departure/edit') }}\{{ $all_departure->id }}" class="btn btn-primary">Edit</a>
                                      </td>

                                      <td>
                                        <a href="{{ url('/admin/departure/delete') }}\{{ $all_departure->id }}" class="btn btn-primary delete_btn">Delete</a>
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