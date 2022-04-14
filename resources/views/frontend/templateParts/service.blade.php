<section id="services" class="services">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Services</h2>
            <h3>Check our <span>Services</span></h3>
            <p>We keep a customer demands as much skill as to win one.</p>
        </div>

        <div class="row">
            @foreach (App\Models\Service::latest()->limit(6)->get()
    as $key => $service)
                <div @if ($key > 2) class="col-lg-4 col-md-6 d-flex  mt-4"
        @else
          class="col-lg-4 col-md-6 d-flex align-items-stretch " @endif
                    data-aos="zoom-in" data-aos-delay="100">
                    <a href="{{ route('serviceDetailPAge', $service->slug) }}">
                        <div class="icon-box" style="cursor: pointer">
                            <div class="ico"><img src="{{ asset('images/' . $service->image) }}" alt=""
                                    style="width: 100%"></div>
                            <h4><a href="{{ route('serviceDetailPAge', $service->slug) }}">{{ $service->title }}</a></h4>
                            <p>{!! $service->short_description !!}</p>
                        </div>
                    </a>
                </div>
            @endforeach


        </div>

    </div>
</section><!-- End Services Section -->
