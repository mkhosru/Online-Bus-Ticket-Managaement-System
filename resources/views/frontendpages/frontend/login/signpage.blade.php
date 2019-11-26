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
                        <h2>Sign In</h2>
                        <a href="#">Home</a> <span>/</span>
                        <a class="active" href="#">Sign In</a>
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


                                                                        
                        <form id="c-form" action="{{ route('login') }}" method="post">
                            @csrf
                          
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <h5>Username</h5>
                                        <input type="text" name="email" value="" class="form-control @error('email') is-invalid @enderror" placeholder="Enter email">
                                        @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                                                            </div>
                                </div>

                                <div class="col-md-12">
                                    <h5>Password</h5>
                                    <input type="password" name="password" class="form-control  @error('email') is-invalid @enderror" placeholder="Enter Password">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                                                    </div>
                                <div class="col-12"> 
                                    <button type="submit" class="btn btn-contact btn-block">Sign In</button>
                                </div>
                            </div>



                            <div class="form-row  margin-top-30">
                                <div class="col-md-6">
                                    <a href="password/reset.html" class="lostpass">Forgot Password</a>
                                </div>
                                <div class="col-6 text-center">
                                    <a href="{{ url('/frontendpages/register') }}" class="loginwith">Create an Account</a>
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

 