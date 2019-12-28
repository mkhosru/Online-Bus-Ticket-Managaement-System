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
                                                
        <form id="c-form" class="custom-margin" action="{{ route('bus_coach_insert') }}" method="post">

        	
            @csrf

            
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">

                                <h5>Coach Type</h5>
                             <input type="text" value="" name="coach_type" id="coach_type"  class="form-control" placeholder="Coach Type" autocomplete="off">
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
                                  <th scope="col">Coach Type</th>
                                  <th scope="col">Action</th>
                                  <th scope="col">Action</th>
                                </tr>
                          </thead>
                          <tbody>
                              @foreach($all_coachs as $all_coach)
                               
                                  <tr>
                                      <th scope="row">{{ $all_coach->id }}</th>
                                      <td>{{ $all_coach->coach_type }}</td>
                                    
                                      <td>
                                        <a href="{{ url('/admin/coach/edit/') }}\{{ $all_coach->id }}" class="btn btn-primary">Edit</a>
                                      </td>

                                      <td>
                                        <a href="{{ url('/admin/coach/delete/') }}\{{ $all_coach->id }}" class="btn btn-primary delete_btn">Delete</a>
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