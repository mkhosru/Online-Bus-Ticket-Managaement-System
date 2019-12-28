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
                        <h2>Contact Pages</h2>
                        
                    </article>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- ----------------------------------------------------- -->
 <!---=========================== Start Enquiry  =============================--->
    <section id="contact-main">

        <div class="contact-form-area-padding">
            <div class="container">
                <div class="row contact-form-area">
                    <div class="col-lg-6">
                        <div class="img">

                        </div>
                    </div>
                    <div class="col-lg-6 contact-form">
                        <div class="row">
                            <div class="col-12">
                                <div class="contact-block-form">
                                    <h4>Enquiry</h4>
                                    <p>There are many variations of passages of Lorem Ipsum available but the majority a have suffered alteration in some form by injected humour or randomised look even slightly believable. </p>
                                </div>
                            </div>
                        </div>
                            <form id="c-form" action="{{ route('customer_contact') }}" method="post">
                            @csrf     
                             <div class="row">
                                <div class="col-md-12">
                                    <input type="text" class="form-control" placeholder="Enter Your Name" name="name" value="">
                                </div>
                                <div class="col-md-12">
                                    <input type="email" class="form-control" placeholder="Enter Your Mail" name="email"
                                           value="">
                                </div>
                                <div class="col-md-12">
                                    <input type="text" class="form-control" placeholder="Phone Number" name="phone"
                                           value="">
                                </div>
                                <div class="col-12">
                                    <textarea class="form-control" rows="3" id="comment" placeholder="Enquiry"
                                              name="enquiry"></textarea>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-contact">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!---=========================== End Enquiry  =============================--->














@endsection