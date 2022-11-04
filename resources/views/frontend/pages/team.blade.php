@extends("frontend.layouts.master")
@section('content')
<section class="our_service padding_top" style="padding-top: 50px !important">
    <div class="container">
        <div class="row">
            <div class="col-xl-5">
                <div class="section_tittle" style="margin-bottom: 40px !important">
                    <h2>our <span style="color: red !important">teams</span></h2>
                </div>
            </div>
        </div>
        <div class="row mb-5">
            @foreach ($teams as $team )

            <div class="col-sm-6 col-xl-4">
                <div class="single_feature">
                    <div class="single_service">
                        <img src="{{asset('images/'.$team->image)}}" class="mb-2" alt="">
                        {{-- <span class="flaticon-ui"></span> --}}
                        <h4>{{$team->name}}</h4>
                        <p>{{$team->description}}</p>
                        <a href="javascript:void(0)"  class="btn_3">{{$team->designation}}</a>
                    </div>
                </div>
            </div>

            @endforeach

        </div>
    </div>
</section>

@endsection
