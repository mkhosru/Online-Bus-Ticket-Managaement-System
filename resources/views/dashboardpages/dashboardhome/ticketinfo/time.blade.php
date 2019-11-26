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
                                                
        <form id="c-form" class="custom-margin" action="{{ route('bus_time_insert') }}" method="post">

        	
            @csrf

            
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">

                                <h5>Time</h5>
                             <input type="time" value="" name="time" id="time"  class="form-control" placeholder="Time" autocomplete="off">
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
                                  <th scope="col">Date</th>
                                  <th scope="col">Action</th>
                                  <th scope="col">Action</th>
                                </tr>
                          </thead>
                          <tbody>
                               @foreach($all_bus_time as $all_time)

                               
                                        <tr>
                                            <th scope="row">{{ $all_time->id }}</th>
                                            <td>{{ $all_time->time }}</td>
                                           
                                            <td>
                                              <a href="{{ url('/admin/time/edit/') }}\{{ $all_time->id }}" class="btn btn-primary">Edit</a>
                                            </td>

                                            <td>
                                              <a href="{{ url('/admin/time/delete/') }}\{{ $all_time->id }}" class="btn btn-primary">Delete</a>
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