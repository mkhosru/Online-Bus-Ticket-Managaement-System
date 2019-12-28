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
                                                
        <form id="c-form" class="custom-margin" action="{{ route('bus_terminal_insert') }}" method="post">

        	
            @csrf

            
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">

                                <h5>Terminal Name</h5>
                             <input type="text" value="" name="terminal_name" id="terminal"  class="form-control" placeholder="Terminal Name" autocomplete="off">
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
                                  <th scope="col">Terminal</th>
                                  <th scope="col">Action</th>
                                  <th scope="col">Action</th>
                                </tr>
                          </thead>
                          <tbody>
                              @foreach($all_terminal as $only_terminal)
                               
                                  <tr>
                                      <th scope="row">{{ $only_terminal->id }}</th>
                                     <td>{{ $only_terminal->terminal_name }}</td>
                                    
                                      <td>
                                        <a href="{{ url('/admin/terminal/edit/') }}\{{ $only_terminal->id }}" class="btn btn-primary">Edit</a>
                                      </td>

                                      <td>
                                        <a href="{{ url('/admin/terminal/delete/') }}\{{ $only_terminal->id }}" class="btn btn-primary delete_btn">Delete</a>
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