@extends("frontend.layouts.master")
@section("content")

@if (count($projects) > 0)
<div class="projects-wrapper projectinfotechno-bg pt-5">
    <div class="container">

        <div class="row">
            <div class="col-lg-12">
                <!-- section-title-wrap Start -->
                <div class="section-title-wrap text-center section-space--mb_40">
                    <h6 class="section-sub-title mb-20">Case studies</h6>
                    <h3 class="heading">Proud projects that<span class="text-color-primary">  make us stand out</span></h3>
                </div>
                <!-- section-title-wrap Start -->
            </div>
        </div>

        <div class="row">
                @foreach ($projects as $project)
                    <div class="col-md-4">

                            <!-- Projects Wrap Start -->
                            <a href="#" class="projects-wrap style-01 wow move-up">
                                <div class="projects-image-box">
                                    <div class="projects-image">
                                        <img class="img-fluid w-100" src="{{asset('images/'.$project->image)}}" alt="">
                                    </div>
                                    <div class="content">
                                        <h6 class="heading">{{$project->title}}</h6>
                                        <div class="post-categories">{{$project->type}}</div>
                                        <div class="text">{{$project->description}}
                                        </div>
                                        {{-- <div class="box-projects-arrow">
                                            <span class="button-text">View case study</span>
                                            <i class="fa fa-long-arrow-right ml-1"></i>
                                        </div> --}}
                                    </div>
                                </div>
                            </a>
                            <!-- Projects Wrap End -->


                        </div>
                        @endforeach

                {{-- <div class="section-under-heading text-center section-space--mt_40">Challenges are just opportunities in disguise. <a href="#">Take the challenge!</a></div> --}}

        </div>
    </div>
</div>
@endif

@endsection
