<?php
$banners = App\Models\Banner::where("status","active")->latest()->take(1)->get();
?>
@if(count($banners) > 0)
@foreach ($banners as $banner)

<div class="infotechno-hero infotechno-bg">
    <div class="container-fluid">
        <div class="row align-items-center">
            <!--baseline-->
            <div class="col-lg-6 col-md-6">
                <div class="infotechno-hero-text  wow move-up">
                    <h6>Future World Information and technology </h6>
                    <h1 class="font-weight--reguler mb-15">{{$banner->title}} </p>
                    <div class="hero-button  mt-30">
                        <a href="#" class="ht-btn ht-btn-md">Get details</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="infotechno-hero-inner-images" style="margin-top: 0px">
                    <div class="infotechno-inner-one">
                        {{-- <img class="img-fluid" src="assets/images/hero/home-infotechno-main-slider-slide-01-image-01.webp" alt=""> --}}
                    </div>
                    <div class="infotechno-inner-two  wow move-up">
                        <img class="img-fluid" src="{{asset('images/'.$banner->image)}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach

@endif
