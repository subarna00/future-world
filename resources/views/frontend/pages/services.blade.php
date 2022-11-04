@extends("frontend.layouts.master")
@section("content")
<section class="breadcrumb breadcrumb_bg align-items-center">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="col-sm-6">
                <div class="breadcrumb_tittle text-left">
                    <h2>services</h2>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="breadcrumb_content text-right">
                    <p>Home<span>/</span>services</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb start-->

<!--services part start-->
<section class="our_service section_padding single_page_services" style="padding: 0px !important;">
    <div class="container">
        {{-- <div class="row">
            <div class="col-xl-5">
                <div class="section_tittle">
                    <h2>our services</h2>
                </div>
            </div>
        </div> --}}
        <div class="row mb-5">
            @foreach (App\Models\Service::latest()->get() as $service )

            <div class="col-sm-6 col-xl-4">
                <a href="{{route("serviceDetailPAge",$service->slug)}}">
                <div class="single_feature">
                    <div class="single_service">
                        <img src="{{asset('images/'.$service->image)}}" class="mb-2" alt="">
                        <h4>{{$service->title}}</h4>
                        <p>{{$service->short_description}}</p>
                        <a href="{{route("serviceDetailPAge",$service->slug)}}" class="btn_3">read more</a>
                    </div>
                </div>
            </a>
            </div>

            @endforeach


        </div>
    </div>
</section>

@endsection
