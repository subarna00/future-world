<?php
    $brands = App\Models\Partner::where("status","active")->latest()->get();
?>
@if (count($brands) > 0)

<div class="brand-logo-slider-area section-space--ptb_60">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- brand logo slider -->
                @foreach ($brands as $brand)

                <div class="brand-logo-slider__container-area">
                    <div class="swiper-container brand-logo-slider__container">
                        <div class="swiper-wrapper brand-logo-slider__one">
                            <div class="swiper-slide brand-logo brand-logo--slider">
                                <a href="#">
                                    <div class="brand-logo__image">
                                        <img src="{{asset('images/'.$brand->image)}}" class="img-fluid" alt="">
                                    </div>
                                    <div class="brand-logo__image-hover">
                                        <img src="{{asset('images/'.$brand->image)}}" class="img-fluid" alt="">
                                    </div>
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </div>
</div>
@endif
