@extends("frontend.layouts.master")
@section('content')
<section class="about_part experiance_part section_padding">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="col-md-6 col-lg-6">
                <div class="about_part_text">
                    <h2>{{$service->type}}</h2>
                    <p>{!! $service->description !!}</p>

                </div>
            </div>
            <div class="col-md-6 col-lg-6">
                <div class="about_part_img">
                    <img src="{{asset("images/".$service->image)}}" alt="">
                </div>
            </div>
        </div>
    </div>


</section>
<section class="our_service my-5">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="section_tittle text-center" style="margin-bottom: 40px !important">
                    <h2>{{$service->type}} <span style="color: red">Types</span></h2>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach ($service->types as $typ )

            <div class="col-sm-6 col-xl-4">
                <a href="{{route("serviceSubTypeDetailPage",[$service->service->slug,$service->slug,$typ->slug])}}">
                <div class="single_feature">
                    <div class="single_service">
                        <img src="{{asset('images/'.$typ->image)}}" class="mb-2" alt="">
                        <h4>{{$typ->title}}</h4>
                        <p>{{$typ->short_description}}</p>
                        <a href="{{route("serviceSubTypeDetailPage",[$service->service->slug,$service->slug,$typ->slug])}}" class="btn_3">read more</a>
                    </div>
                </div>
            </a>
            </div>

            @endforeach

        </div>
    </div>
</section>

@endsection
