@extends("frontend.layouts.master")
@section("content")
<div class="breadcrumb-area" style="padding: 50px !important">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb_box text-center">
                    <h2 class="breadcrumb-title">Contact us</h2>
                    <!-- breadcrumb-list start -->
                    <ul class="breadcrumb-list">
                        <li class="breadcrumb-item active">Contact us </li>
                    </ul>
                    <!-- breadcrumb-list end -->
                </div>
            </div>
        </div>
    </div>
</div>
<div id="main-wrapper" >
    <div class="site-wrapper-reveal">
        <!--====================  Conact us Section Start ====================-->
        <div class="contact-us-section-wrappaer section-space--pt_100 section-space--pb_70">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-lg-6">
                        <div class="conact-us-wrap-one mb-30">
                            <h3 class="heading">To make requests for <br>further information, <br><span class="text-color-primary">contact us</span> via our social channels. </h3>
                            <div class="sub-heading">We just need a couple of hours! <br> No more than 2 working days since receiving your issue ticket.</div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-lg-6">
                        <div class="contact-form-wrap">
                            @if (session()->has("msg"))

                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                {{session()->get("msg")}}
                                <button type="button" class="close " data-dismiss="alert" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                            @endif

                            <form  action="{{route("sendMessage")}}" method="post">
                                @csrf
                                <div class="contact-form">
                                    <div class="contact-input">
                                        <div class="contact-inner">
                                            <input name="name" type="text" placeholder="Name *" required>
                                        </div>
                                        <div class="contact-inner">
                                            <input name="email" type="email" placeholder="Email *" required>
                                        </div>
                                    </div>
                                    <div class="contact-inner">
                                        <input name="number" type="number" placeholder="Contact Number *" required>
                                    </div>
                                    <div class="contact-inner contact-message">
                                        <textarea name="message" placeholder="Please describe what you need." required></textarea>
                                    </div>
                                    <div class="submit-btn mt-20">
                                        <button class="ht-btn ht-btn-md" type="submit">Send message</button>
                                        <p class="form-messege"></p>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--====================  Conact us Section End  ====================-->

        <!--====================  Conact us info Start ====================-->

        <!--====================  Conact us info End  ====================-->






        <!--========== Call to Action Area Start ============-->

        <!--========== Call to Action Area End ============-->




    </div>




    <!--====================  footer area ====================-->

    <!--====================  End of footer area  ====================-->









</div>
@include("frontend.components.counter")
@endsection
