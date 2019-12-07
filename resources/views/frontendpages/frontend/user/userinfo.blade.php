@extends('frontendpages.frontend.app')

@section('title')
OBTMS-Home
@endsection

@section('content')









        <section id="breadcrumb">
    <div class="overly"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-10 text-center">
                <div class="breadcrumbinfo">
                    <article>
                        <h2>Check Your All info and confirm the payment</h2>
                        
                    </article>
                </div>
            </div>
        </div>
    </div>
</section>


    <!--================================
        contact us  part start
    =====================================-->
<section id="contact-main">

<div class="contact-form">
 <div class="container">
   <div class="row contact-form-area">
      <div class="col-lg-8 offset-2 contact-form">
           


   
   <div class="#">
       <form id="c-form" action="{{ route('ticket_buy') }}" method="post">
            <!-- {{ csrf_field() }} -->
            @csrf

        
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <h5>Your Name</h5>
                     <input type="text" name="customer_name" id="name"  class="form-control" value="{{ $single_ticket_info->customer_name }}" autocomplete="off">
                     </div>
                 </div>

               <div class="col-md-6">
                    <div class="form-group">
                        <h5>Contact Number</h5>
                        <input type="text" value="{{ $single_ticket_info->phone_id }}" name="phone" id="phone"  class="form-control" autocomplete="off">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <h5>Operator Name</h5>
                        <input type="text" value="{{ $single_ticket_info->bus_name }}" name="operator" id="operator_name"  class="form-control" autocomplete="off">
                      </div>
                 </div>
                 <div class="col-md-6">
                    <div class="form-group">
                        <h5>Coach Type</h5>
                        <input type="text" value="{{ $single_ticket_info->coach_type }}" name="coach_type" id="coach_type"  class="form-control" value="" autocomplete="off">
                      </div>
                 </div> 
                 <div class="col-md-6">
                    <div class="form-group">
                        <h5>Jourey Date</h5>
                        <input type="text" value="{{ $single_ticket_info->journey_date_id }}" name="journey_date" id="date"  class="form-control" autocomplete="off">
                      </div>
                 </div>
                 <div class="col-md-6">
                    <div class="form-group">
                        <h5>Jourey Time</h5>
                        <input type="text" value="{{ $single_ticket_info->time_id }}" name="time" id="time"  class="form-control" value="" autocomplete="off">
                      </div>
                 </div>
				<div class="col-md-6">
                    <div class="form-group">
                        <h5>Journey from</h5>
                        <input type="text" value="{{ $single_ticket_info->departure }}" name="departure" id="from"  class="form-control" autocomplete="off">
                      </div>
                 </div>

                 <div class="col-md-6">
                    <div class="form-group">
                        <h5>Destination</h5>
                        <input type="text" value="{{ $single_ticket_info->destination }}" name="destination" id="destiation"  class="form-control" autocomplete="off">
                      </div>
                 </div>
                 <div class="col-md-6">
                    <div class="form-group">
                        <h5>Boarding Point</h5>
                        <input type="text" value="{{ App\Terminal::findOrFail($single_ticket_info->boarding_point_id)->terminal_name }}" name="boarding_point" id="bprding_point"  class="form-control" autocomplete="off">
                      </div>

                      
                 </div>
                  <div class="col-md-6">
                    <div class="form-group">
                        <h5>Seat number</h5>
                        <input type="text" value="{{ $single_ticket_info->seat_number }}" name="seat_number" id="bprding_point"  class="form-control" value="" autocomplete="off">
                      </div>
                 </div>
                 
                 
                 
                 
                 <div class="col-md-6">
                    <div class="form-group">
                        <h5>Price</h5>
                        <input type="text" value="{{ $single_ticket_info->price }}" name="price" id="price"  class="form-control" value="" autocomplete="off">
                      </div>
                 </div>
                 <div class="col-md-6">
                    <div class="form-group">
                        <h5>Total Price</h5>
                        <input type="text" value="{{ $single_ticket_info->total_fare }}" name="total_fare" id="total_price"  class="form-control"  autocomplete="off">
                      </div>
                 </div>
                 <div class="col-md-6">
                    <div class="form-group">
                        <h5>Total Seat</h5>
                        <input type="text" value="{{ $single_ticket_info->total_seat}}" name="total_seat" id="total_price"  class="form-control" autocomplete="off">
                      </div>
                 </div>


                 <!-- hidden data -->
                 <div class="col-md-6">
                    <div class="form-group">
                        <h5>chassis Number</h5>
                        <input type="text" value="{{ $single_ticket_info->dura_chassis_num}}" name="dura_chassis_num" id="total_price"  class="form-control" autocomplete="off">
                      </div>
                 </div>
                 
                 <!-- hidden data -->
                                


							<div>
                            	
                                <button class="btn btn-primary " type="submit">Payment</button>

                            </div>
                               



                            


                        </form>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!--================================
        contact us part end
    =====================================-->











@endsection
