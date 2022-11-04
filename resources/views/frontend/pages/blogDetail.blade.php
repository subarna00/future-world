@extends('frontend.layouts.master')
@section('content')
    <style>
        .blog_right_sidebar .single_sidebar_widget {
            background: #fbf9ff;
            padding: 30px;
            margin-bottom: 30px;
        }

        .blog_right_sidebar .widget_title {
            font-size: 20px;
            margin-bottom: 40px;
        }

        ul {
            list-style: none;
            margin: 0;
            padding: 0;
        }

        .media {
            display: flex;
            align-items: flex-start;
        }

        .blog_right_sidebar .popular_post_widget .post_item .media-body {
            justify-content: center;
            align-self: center;
            padding-left: 20px;
        }

        .blog_area a {
            color: #83868c !important;
            text-decoration: none;
            -webkit-transition: 0.5s;
            transition: 0.5s;
        }

        .blog_right_sidebar .popular_post_widget .post_item .media-body p {
            font-size: 14px;
            line-height: 21px;
            margin-bottom: 0px;
        }
    </style>
    <section class=" mt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 posts-list">
                    <div class="single-post">
                        <div class="feature-img">
                            <img class="img-fluid" src="{{ asset('images/' . $blog->image) }}" alt="">
                        </div>
                        <div class="blog_details">
                            <h2 class="mt-3" style="color: black;font-size:34px;font-weight:600">{{ $blog->title }}
                            </h2>
                            <ul class="blog-info-link  mb-4">
                                <li><a href="#"><i class="far fa-user"></i> {{ $blog->blogType->type_title }}</a></li>
                            </ul>
                            <p class="excert">
                                {!! $blog->description !!}
                            </p>


                        </div>
                    </div>

                </div>
                <div class="col-lg-4">
                    <div class="blog_right_sidebar">
                        {{-- <aside class="single_sidebar_widget search_widget">
                        <form action="#">
                           <div class="form-group">
                              <div class="input-group mb-3">
                                 <input type="text" class="form-control" placeholder='Search Keyword'
                                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'Search Keyword'">
                                 <div class="input-group-append">
                                    <button class="btn" type="button"><i class="ti-search"></i></button>
                                 </div>
                              </div>
                           </div>
                           <button class="button rounded-0 primary-bg text-white w-100 btn_1" type="submit">Search</button>
                        </form>
                     </aside> --}}

                        <aside class="single_sidebar_widget post_category_widget">
                            <h4 class="widget_title">Category</h4>
                            <hr>
                            <ul class="list cat-list">
                                @foreach (App\Models\BlogType::latest()->get() as $blogType)
                                    <li>
                                        <a href="{{ route('blogCategory', $blogType->slug) }}" class="d-flex">
                                            <p>{{ $blogType->type_title }}</p>
                                            <p> ({{ count($blogType->blogs) }})</p>
                                        </a>
                                        <hr>
                                    </li>
                                @endforeach


                            </ul>
                        </aside>

                        <aside class="single_sidebar_widget popular_post_widget">
                            <h3 class="widget_title">Recent Post</h3>
                            @foreach ($recentBlogs as $rblog)
                                <div class="media post_item mb-4">
                                    <div class="row">
                                        <div class="col-6">
                                            <img src="{{ asset('images/' . $rblog->image) }}" alt="post"
                                                style="width:100%;">
                                        </div>
                                        <div class="col-6">

                                            <div class="media-body">
                                                <a href="single-blog.html">
                                                    <p style="font-size:20px;font-weight-bold;color:black">
                                                        {{ $rblog->title }}</p>
                                                </a>
                                                <p>{{ Carbon\Carbon::parse($rblog->created_at)->diffForHumans() }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================Blog Area =================-->
@endsection
