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
                                                
        <form id="c-form" class="custom-margin" action="{{ route('bus_departure_update') }}" method="post">

        	
            @csrf

            
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">

                                <h5>Destination</h5>
                             <input type="text" value="{{ $single_destination->destination_palce }}" name="destination" id="destination"  class="form-control"  autocomplete="off">
                             

                             <input type="hidden" value="{{ $single_destination->id }}" name="id" id="destination"  class="form-control"  autocomplete="off">
                             </div>

                             <div>
                            	
                                <button class="btn btn-primary BusSubmit" type="submit">Submit</button>

                            </div>
                        </div>

                    

                    
              </div>

      </form>

                
           </div> 
          </div>
        </div>
      </div> 
 </section>  






@endsection