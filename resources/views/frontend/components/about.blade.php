<?php
    $abouts = App\Models\AboutUs::latest()->take(1)->get();
?>
@if (count($abouts) > 0)
<div class="section-space--ptb_100 infotechno-section-bg-01">

    <div class="our-experience-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="section-title small-mb__40 tablet-mb__40">
                        <h6 class="section-sub-title mb-20">Our company</h6>
                        <h3 class="heading">We’ve been thriving in <span class="text-color-primary">{{session()->get("experience")}}</span></h3>
                        <p class="text mt-20">{{$abouts[0]->short_description}}</p>

                        <div class="sider-title-button-box mt-30">
                            <a href="#" class="ht-btn ht-btn-md">Learn More</a>
                        </div>

                    </div>
                </div>

                <div class="col-lg-5 offset-lg-2">
                    <div class="ht-list style-auto-numbered-02">
                        <img src="{{asset('images/'.$abouts[0]->image)}}" alt="" class="img-fluid w-100">
                        {{-- <div class="list-item">
                            <a class="link" href="#">
                                <div class="list-header">
                                    <div class="marker">
                                        01
                                    </div>
                                    <div class="title-wrap">
                                        <h6 class="title">How we can help your business? </h6>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="list-item">
                            <a class="link" href="#">
                                <div class="list-header">
                                    <div class="marker">
                                        02
                                    </div>
                                    <div class="title-wrap">
                                        <h6 class="title">Why become our partner? </h6>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="list-item">
                            <a class="link" href="#">
                                <div class="list-header">
                                    <div class="marker"> 03</div>
                                    <div class="title-wrap">
                                        <h6 class="title"> What are the best of Mitech? </h6>
                                    </div>
                                </div>
                            </a>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--===========  feature-large-images-wrapper  Start =============-->

    <!--===========  feature-large-images-wrapper  End =============-->


</div>
@endif

