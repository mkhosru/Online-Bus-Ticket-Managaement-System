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
                                                
        <form id="c-form" class="custom-margin" action="{{ route('bus_price_insert') }}" method="post">

        	
            @csrf

            
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">

                                <h5>Price</h5>
                             <input type="number" value="" name="price" id="price"  class="form-control" placeholder="price" autocomplete="off">
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
                              
                                 @foreach($all_price as $all_prices)
                               
                                        <tr>
                                            <th scope="row">{{ $all_prices->id }}</th>
                                            
                                           <td>{{ $all_prices->price }}</td>
                                            <td>
                                              <a href="{{ url('/admin/price/edit/') }}\{{ $all_prices->id }}" class="btn btn-primary">Edit</a>
                                            </td>

                                            <td>
                                              <a href="{{ url('/admin/price/delete/') }}\{{ $all_prices->id }}" class="btn btn-primary">Delete</a>
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