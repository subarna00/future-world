@extends("frontend.layouts.master")
@section('content')
<section class="about_part experiance_part section_padding">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="col-md-6 col-lg-6">
                <div class="about_part_text">
                    <h2>{{$service->title}}</h2>
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


@endsection
