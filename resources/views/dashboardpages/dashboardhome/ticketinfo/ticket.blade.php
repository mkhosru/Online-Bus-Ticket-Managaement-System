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
                                                
        <form id="c-form" class="custom-margin" action="#" method="post">

        	
            @csrf

            
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">

                                <h5>Ticket</h5>
                             <input type="text" value="" name="ticket" id="ticket"  class="form-control" placeholder="ticket" autocomplete="off">
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