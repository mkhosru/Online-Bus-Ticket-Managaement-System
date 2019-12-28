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
                        <h2>Blog Page</h2>
                        
                    </article>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- ----------------------------------------------------- -->


 <!-- =============== Latest News Area Start ============================ -->
    <section id="latest_news">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7 col-md-10 text-center">
                    <h2 class="section-heading">Blog Page</h2>
                    <p class="section-paragraph">There are many variations of passages of Lorem Ipsum available but the majority have suffered alteration in some form injected humour.</p>
                </div>
            </div>
            <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="c-box c-box1">
                            <div class="img">
                                <img class="img-fluid" src="../frontend/assets/images/post/post_thumb1550128400.jpg" alt="...">
                            </div>
                            <article>
                                <a href="#">
                                    <h4>It is a long established fact that a reader will be distracted</h4>
                                </a>
                                <div class="b-c">
                                    <ul>
                                        <li>
                                            <i class="fa fa-clock-o"></i> 12 Jun, 2018
                                        </li>
                                        <li><span class="span">|</span></li>
                                        <li><i class="fa fa-eye"></i> 286 Views</li>
                                    </ul>
                                </div>
                                <p>     It is a long established fact that a reader will be distracted by the readable content of a page whe...</p>
                            </article>
                        </div>
                    </div>
                                    <div class="col-lg-4 col-md-6">
                        <div class="c-box c-box1">
                            <div class="img">
                                <img class="img-fluid" src="../frontend/assets/images/post/post_thumb1550128633.jpg" alt="...">
                            </div>
                            <article>
                                <a href="#">
                                    <h4>labore et dolore magna aliqua Ut enim ad minim veniam</h4>
                                </a>
                                <div class="b-c">
                                    <ul>
                                        <li>
                                            <i class="fa fa-clock-o"></i> 10 Jun, 2018
                                        </li>
                                        <li><span class="span">|</span></li>
                                        <li><i class="fa fa-eye"></i> 270 Views</li>
                                    </ul>
                                </div>
                                <p>     It is a long established fact that a reader will be distracted by the readable content of a page whe...</p>
                            </article>
                        </div>
                    </div>
                                    <div class="col-lg-4 col-md-6">
                        <div class="c-box c-box1">
                            <div class="img">
                                <img class="img-fluid" src="../frontend/assets/images/post/post_thumb1550128621.jpg" alt="...">
                            </div>
                            <article>
                                <a href="#">
                                    <h4>There is no one who loves pain itself, who seeks after it and wants to have it,</h4>
                                </a>
                                <div class="b-c">
                                    <ul>
                                        <li>
                                            <i class="fa fa-clock-o"></i> 10 Jun, 2018
                                        </li>
                                        <li><span class="span">|</span></li>
                                        <li><i class="fa fa-eye"></i> 167 Views</li>
                                    </ul>
                                </div>
                                <p>     It is a long established fact that a reader will be distracted by the readable content of a page whe...</p>
                            </article>
                        </div>
                    </div>
                            </div>
        </div>
    </section>
    <!-- =============== Latest News Area End ============================ -->

    @endsection