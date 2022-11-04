@extends("frontend.layouts.master")
@section("content")

@if (count($blogs) > 0)

<div class="blog-section-wrapper section-space--pt_100  section-space--pb_70">
    <div class="container">
        <div class="row">

@foreach ($blogs as $blog)

            <div class="col-lg-4 col-md-6 wow move-up mb-2">
                <!--======= Single Blog Item Start ========-->
                <div class="single-blog-item blog-grid">
                    <!-- Post Feature Start -->
                    <div class="post-feature blog-thumbnail">
                        <a href="blog-post-layout-one.html">
                            <img class="img-fluid" src="{{asset('images/'.$blog->image)}}" alt="Blog Images">
                        </a>
                    </div>
                    <!-- Post Feature End -->

                    <!-- Post info Start -->
                    <div class="post-info lg-blog-post-info">
                        <div class="post-meta">
                            <div class="post-date">
                                <span class="far fa-calendar meta-icon"></span>
                                {{\Carbon\Carbon::parse($blog->created_at)->diffForHumans()}}                            </div>
                        </div>

                        <h5 class="post-title font-weight--bold">
                            <a href="#">{{$blog->title}}</a>
                        </h5>


                        <div class="btn-text">
                            <a href="#">Read more <i class="ml-1 button-icon far fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                    <!-- Post info End -->
                </div>
                <!--===== Single Blog Item End =========-->

            </div>
            @endforeach


        </div>
    </div>
</div>
@endif

@endsection
