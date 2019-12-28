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
                                                
        <form id="c-form" class="custom-margin" action="{{ route('bus_destination_inseart') }}" method="post">

        	
            @csrf

            
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">

                                <h5>Destination</h5>
                             <input type="text" value="" name="destination" id="destination"  class="form-control" placeholder="Destination" autocomplete="off">
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
                                  <th scope="col">Destination</th>
                                  <th scope="col">Action</th>
                                  <th scope="col">Action</th>
                                </tr>
                          </thead>
                          <tbody>
                              @foreach($all_destination_name as $destination_name)
                               
                                  <tr>
                                      <th scope="row">{{ $destination_name->id }}</th>
                                      <td>{{ $destination_name->destination_palce }}</td>
                                    
                                      <td>
                                        <a href="{{ url('/admin/destination/edit/') }}\{{ $destination_name->id }}" class="btn btn-primary">Edit</a>
                                      </td>

                                      <td>
                                        <a href="{{ url('/admin/destination/delete') }}\{{ $destination_name->id }}" class="btn btn-primary">Delete</a>
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