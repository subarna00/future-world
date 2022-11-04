<?php
$reviews = App\Models\Testimonial::latest()->get();
?>
@if(count($reviews)> 0)
<div class="testimonial-slider-area section-space--ptb_120 bg-gray-3">
    <div class="container-fluid container-fluid--cp-80">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title-wrap text-center section-space--mb_60">
                    <h6 class="section-sub-title mb-20">Testimonials</h6>
                    <h3 class="heading">Why do people praise about<span class="text-color-primary"> Future World</span></h3>
                </div>
                <div class="testimonial-slider">
                    <div class="swiper-container testimonial-slider__container-two">
                        <div class="swiper-wrapper testimonial-slider__wrapper">
                            @foreach ($reviews as $review)

                            <div class="swiper-slide">
                                <div class="testimonial-slider__single wow move-up">
                                    {{-- <h6 class="testimonial-subject">The Mitech team works really hard to ensure high level of quality</h6> --}}
                                    <div class="testimonial-slider__text">{{$review->description}} </div>
                                    <div class="author-info">
                                        <div class="testimonial-slider__media">
                                            <img src="{{asset("images/".$review->image)}}" class="img-fluid" style="height:70px;width:70px;object-fit:cover" alt="">
                                        </div>
                                        <div class="testimonial-slider__author">
                                            <h6 class="name">{{$review->name}}</h6>
                                            <span class="designation">{{$review->designation}}</span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            @endforeach

                        </div>
                    </div>
                    <div class="swiper-pagination swiper-pagination-t0 section-space--mt_40"></div>
                </div>
            </div>
        </div>
    </div>
</div>
@endif
