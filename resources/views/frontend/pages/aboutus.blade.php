@extends('frontend.layout.master')
@section('content')
    @foreach (App\Models\AboutUs::latest()->get() as $about)
        <div class="container">
            <h1 class="text-center my-4 about-head">An Understanding About Us</h1>
            <div class="about mt-3 mb-5">
                <div class="row justify-center items-center">
                    <div class="col-md-4">
                        <img src="{{ asset('images/' . $about->image) }}" alt="" style="height: auto">
                    </div>
                    <div class="col-md-8">
                        {!! $about->description !!}
                    </div>
                </div>
            </div>
        </div>
    @endforeach

    <section id="team" class="team section-bg">
        <div class="container">



            <div class="row">

                @foreach (App\Models\AboutInfo::latest()->get() as $info)
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
                        <div class="member">
                            <div class="member-img">
                                <img src="{{ asset('images/' . $info->image) }}" class="img-fluid" alt="">

                            </div>
                            <div class="member-info">
                                <h4>{{ $info->title }}</h4>
                                <span>{!! $info->description !!}</span>
                            </div>
                        </div>
                    </div>
                @endforeach




            </div>

        </div>
    </section><!-- End Team Section -->






    @include('frontend.templateParts.teams');
@endsection
