@extends('frontend.layout.master')
@section('content')
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Our News</h2>

                <ol>
                    <li><a href="/">Home</a></li>
                    <li><a href="/news">News</a></li>
                </ol>
            </div>
        </div>
    </section>
    <section id="services" class="services">
        <div class="container" data-aos="fade-up">

          <div class="section-title">
            <h3>Check our <span>News </span></h3>
            {{--  <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>  --}}
          </div>

          <div class="row">
              @foreach ($news as $key=> $new)
              <div
              @if ($key > 2)
              class="col-lg-4 col-md-6 d-flex  mt-4"
            @else
              class="col-lg-4 col-md-6 d-flex align-items-stretch "
              @endif

              data-aos="zoom-in" data-aos-delay="100">
              <a href="{{$new->link}}">
                <div class="icon-box" style="cursor: pointer">
                  <div class="ico"><img src="{{asset('images/'.$new->image)}}" alt="" style="width: 100%"></div>
                  <h4><a href="">{{$new->title}}</a></h4>
                  {{--  <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>  --}}
                </div>
            </a>
              </div>

              @endforeach


          </div>

        </div>
      </section><!-- End newss Section -->

@endsection
