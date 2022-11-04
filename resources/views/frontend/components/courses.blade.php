<?php
$courses = App\Models\Course::where("status","Active")->latest()->take(3)->get();
?>
@if(count($courses) > 0)
<div class="feature-large-images-wrapper pt-5 mb-5">
    <div class="container">

        <div class="row ">
            <div class="col-lg-12">
                <!-- section-title-wrap Start -->
                <div class="section-title-wrap text-center section-space--mb_30">
                    <h6 class="section-sub-title mb-20">Hire us, why not?</h6>
                    <h3 class="heading">Courses we <span class="text-color-primary"> offer</span> you.</h3>
                </div>
                <!-- section-title-wrap Start -->
            </div>
        </div>

        <div class="row mb-5">
            <div class="col-12 mb-5">
                <div class="row row--35">
                    @foreach ($courses as $course)

                    <div class="col-lg-4 col-md-6 mt-30">
                        <!-- Box large image warap Start -->
                        <a href="#" class="box-large-image__wrap wow move-up">
                            <div class="box-large-image__box">
                                <div class="box-large-image__midea">
                                    <div class="images-midea">
                                        <img src="{{asset('images/'.$course->image)}}" width="330" height="330" class="img-fluid" alt="">

                                        <div class="button-wrapper">
                                            <div class="btn tm-button">
                                                <span class="button-text">Read More</span>
                                            </div>
                                        </div>
                                        <div class="heading-wrap">
                                            <h5 class="heading">{{$course->title}}</h5>
                                        </div>

                                    </div>
                                </div>

                                <div class="box-large-image__content mt-30 text-center">
                                   <p>{{$course->description}}</p>
                                </div>
                            </div>
                        </a>
                        <!-- Box large image warap End -->
                    </div>

                    @endforeach

                </div>

                {{-- <div class="section-under-heading text-center section-space--mt_40"><a href="#">Learn more about how we work span <i class="ml-1 button-icon far fa-long-arrow-right"></i></a></div> --}}

            </div>
        </div>
    </div>
</div>
@endif
