<?php
    $services = App\Models\Service::latest()->take(6)->get();
?>
@if(count($services) > 0)

<div class="feature-images-wrapper bg-gray section-space--ptb_100">
    <div class="container">

        <div class="row">
            <div class="col-lg-12">
                <!-- section-title-wrap Start -->
                <div class="section-title-wrap text-center">
                    <h6 class="section-sub-title mb-20">Our services</h6>
                    <h3 class="heading">For your very specific industry, <br> we have <span class="text-color-primary"> highly-tailored IT solutions.</span></h3>
                </div>
                <!-- section-title-wrap Start -->
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="feature-images__one">
                    <div class="row">
                        @foreach ($services as $service)

                        <div class="col-lg-4 col-md-6 wow move-up">
                            <!-- ht-box-icon Start -->
                            <div class="ht-box-images style-01">
                                <div class="image-box-wrap">
                                    <div class="box-image">
                                        <img class="img-fulid w-100" src="{{asset('images/'.$service->image)}}" alt="">
                                    </div>
                                    <div class="content">
                                        <h5 class="heading">{{$service->title}} </h5>
                                        <div class="text">{{$service->short_description}}
                                        </div>
                                        {{-- <div class="circle-arrow">
                                            <div class="middle-dot"></div>
                                            <div class="middle-dot dot-2"></div>
                                            <a href="#">
                                                <i class="far fa-long-arrow-right"></i>
                                            </a>
                                        </div> --}}
                                    </div>
                                </div>
                            </div>
                            <!-- ht-box-icon End -->
                        </div>
                        @endforeach



                    </div>
                </div>

                {{-- <div class="section-under-heading text-center section-space--mt_60 section-space--pt_30">Challenges are just opportunities in disguise. <a href="#">Take the challenge!</a></div> --}}

            </div>
        </div>
    </div>
</div>
@endif


