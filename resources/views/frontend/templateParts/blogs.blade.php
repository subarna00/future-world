<?php
$blogs = App\Models\Blog::latest()
    ->limit(3)
    ->get();
$blogCount = count($blogs);
?>
@if ($blogCount > 0)

    <section id="services" class="services">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Blogs</h2>
                <h3>Check our <span>Blogs</span></h3>
                {{-- <p>We keep a customer demands as much skill as to win one.</p> --}}
            </div>

            <div class="row">
                @foreach ($blogs as $key => $blog)
                    <div @if ($key > 2) class="col-lg-4 col-md-6 d-flex  mt-4"
        @else
          class="col-lg-4 col-md-6 d-flex align-items-stretch " @endif
                        data-aos="zoom-in" data-aos-delay="100">
                        <a href="{{ route('blogDetailPAge', $blog->slug) }}">
                            <div class="icon-box" style="cursor: pointer;width:100%">
                                <div class="ico"><img src="{{ asset('images/' . $blog->image) }}" alt=""
                                        style="min-width: 100%; max-height:200px;object-fit:cover"></div>
                                <h4><a href="{{ route('blogDetailPAge', $blog->slug) }}">{{ $blog->title }}</a></h4>
                                {{-- <p>{!! $blog->short_description !!}</p> --}}
                            </div>
                        </a>
                    </div>
                @endforeach


            </div>

        </div>
    </section><!-- End Services Section -->
@endif
