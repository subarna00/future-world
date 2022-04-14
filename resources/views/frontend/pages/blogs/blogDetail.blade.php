@extends('frontend.layout.master')
@section('content')
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>{{ $blog->title }}</h2>

                <ol>
                    <li><a href="/">Home</a></li>
                    <li><a href="/blogs">Blogs</a></li>
                    <li>Blog Details</li>
                </ol>
            </div>
        </div>
    </section>
    <section class="serviceDetails">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mb-5">
                    <img src="{{ asset('images/' . $blog->image) }}" alt="" class="img-fluid">
                 <div class="my-3">
                     {!! $blog->description !!}
                 </div>
                 @if($blog->blogContents)
                 @foreach ($blog->blogContents as $content)

                 <div class="blog_content mb-3">
                     <div class="row">
                         <div class="col-md-8">
                             <h3>{{$content->content_title}}</h3>
                             <p>{!! $content->content !!}</p>
                         </div>
                         <div class="com-md-4">
                             <img src="{{asset('images/'.$content->blog_content_image)}}" alt="" style="min-height: 100%" class="img-fluid">
                         </div>
                     </div>
                 </div>
                 @endforeach

                 @endif
                 <div class="fb-like" data-href="https://developers.facebook.com/docs/plugins/" data-width="" data-layout="standard" data-action="like" data-size="small" data-share="true"></div>
                 <div class="fb-comments" data-href="https://developers.facebook.com/docs/plugins/comments#configurator" data-width="100%" data-numposts="5" ></div>
                </div>

                <div class="col-md-4">
                    <h2 style="background: #a53a3c;
                        color: white;
                        text-align: center;
                        padding: 10px;
                        margin-bottom: 15px;">Our Latest Blogs</h2>
                    @foreach (App\Models\Blog::where('status', 'active')->latest()->limit(10)->get()
        as $blog)
                        <div class="card mb-3" style="max-width: 540px;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="{{asset('images/'.$blog->image)}}" class="img-fluid rounded-start" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">{{$blog->title}}</h5>
                                        <p class="card-text"><small class="text-muted">{{$blog->created_at->diffForHumans()}}</small></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>

        </div>
    </section>
@endsection
