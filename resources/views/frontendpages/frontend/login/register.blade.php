@extends('frontendpages.frontend.app')

@section('title')
OBTMS-Register
@endsection

@section('content')



        <section id="breadcrumb">
    <div class="overly"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-10 text-center">
                <div class="breadcrumbinfo">
                    <article>
                        <h2>Register</h2>
                        <a href="#">Home</a> <span>/</span>
                        <a class="active" href="#">Sign Up</a>
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
           


    @if ($errors->any())
   <div class="alert alert-danger">
       <ul>
       @foreach ($errors->all() as $error)
       <li>{{ $error }}</li>
       @endforeach
       </ul>
   </div><br />
   @endif
   

        <form id="c-form" action="{{ route('create_register') }}" method="post">
            <!-- {{ csrf_field() }} -->
            @csrf

            <input type="hidden" name="_token" value="NIDL433gqQP8cjIVDuTF4VoNMFBUvBERPPkBSOHS">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <h5>First Name</h5>
                             <input type="text" value="" name="fname" id="fname"  class="form-control" placeholder="First Name" autocomplete="off">
                             </div>
                         </div>


                                <div class="col-md-6">
                                    <div class="form-group">
                                        <h5>Last Name</h5>
                                        <input type="text" value="" name="lname" id="lname"  class="form-control" placeholder="Last Name" autocomplete="off">
                                      </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="margin-bottom-20"></div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <h5>Username</h5>
                                        <input type="text" value="" name="username" id="username"  class="form-control checkUsername" placeholder="Username" autocomplete="off">
                                        
                                        <span class="checkUsernameMsg text-danger"></span>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <h5>Contact Number</h5>
                                        <input type="text" value="" name="phone" id="phone"  class="form-control" placeholder="Phone" autocomplete="off">
                                                                            </div>
                                </div>


                                <div class="col-md-12">
                                    <div class="margin-bottom-20"></div>
                                </div>


                                <div class="col-md-12">
                                    <div class="form-group">
                                        <h5>E-mail Address</h5>
                                        <input type="email" value="" name="email" id="email"  class="form-control checkUserEmail" placeholder="E-mail Address" autocomplete="off">
                                     <span class="checkUserEmailMsg text-danger"></span>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="margin-bottom-20"></div>
                                </div>


                                <div class="col-md-6">
                                    <h5>Password</h5>
                                    <input type="password" name="password" class="form-control" placeholder="Enter Password">
                                </div>

                                <div class="col-md-6">
                                    <h5>Confirm Password</h5>
                                    <input type="password" name="password_confirmation" class="form-control" placeholder="Enter Password">
                                </div>

                                <div class="col-md-12">
                                    <div class="margin-bottom-30"></div>
                                    <button type="submit" class="btn btn-contact btn-continue btn-block">Sign Up</button>
                                </div>
                            </div>



                            <div class="form-row  margin-top-30">
                                <div class="col-md-6">
                                    <span>Already Registered <a href="{{ url('/frontendpages/sign') }}" class="lostpass">Sign In</a></span>
                                </div>
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
   