@extends('frontend.layout.master')
@section('content')
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Our Services</h2>

                <ol>
                    <li><a href="/">Home</a></li>
                    <li><a href="/services">Services</a></li>
                </ol>
            </div>
        </div>
    </section>
    <section id="services" class="services">
        <div class="container" data-aos="fade-up">

          <div class="section-title">
            <h3>Check our <span>Services</span></h3>
            <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>
          </div>

          <div class="row">
              @foreach (App\Models\Service::latest()->get() as $key=> $service)
              <div
              @if ($key > 2)
              class="col-lg-4 col-md-6 d-flex  mt-4"
            @else
              class="col-lg-4 col-md-6 d-flex align-items-stretch "
              @endif

              data-aos="zoom-in" data-aos-delay="100">
              <a href="{{route('serviceDetailPAge',$service->slug)}}">
                <div class="icon-box" style="cursor: pointer">
                  <div class="ico"><img src="{{asset('images/'.$service->image)}}" alt="" style="width: 100%"></div>
                  <h4><a href="">Lorem Ipsum {{$key}}</a></h4>
                  <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
                </div>
            </a>
              </div>

              @endforeach


          </div>

        </div>
      </section><!-- End Services Section -->

@endsection
