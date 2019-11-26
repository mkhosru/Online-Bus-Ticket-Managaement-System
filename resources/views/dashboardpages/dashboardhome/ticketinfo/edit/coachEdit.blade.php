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
                                                
        <form id="c-form" class="custom-margin" action="{{ route('bus_coach_update') }}" method="post">

        	
            @csrf

            
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">

                                <h5>Coach Type</h5>
                             <input type="text" value="{{ $single_coach->coach_type }}" name="coach_type" id="coach_type"  class="form-control" placeholder="Coach Type" autocomplete="off">

                             <input type="hidden" value="{{ $single_coach->id }}" name="id" id="coach_type"  class="form-control" placeholder="Coach Type" autocomplete="off">
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