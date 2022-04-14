<?php $testimonials = App\Models\Testimonial::latest()->get(); ?>
{{-- <div class="container py-5">
    <div class="section-title">
        <h2>Team</h2>
        <h3>Our Hardworking <span>Team</span></h3>
        <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae
            autem.</p>
    </div>
    <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            @foreach ($testimonials as $key => $testimonial)
                <div class="carousel-item @if ($key <= 0) active @endif">
                    <div class="container">
                        <img src="{{ asset('/images/' . $testimonial->image) }}" class="d-block w-50" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>First slide label</h5>
                            <p>Some representative placeholder content for the first slide.</p>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div> --}}


<section id="team" class="team ">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Testimonials</h2>
            <h3>Our <span>Testimonials</span></h3>
            {{-- <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque
                vitae autem.</p> --}}
        </div>
        <div id="carouselExampleDark" class="carousel carousel-dark slide " data-bs-ride="carousel">

            <div class="carousel-inner">
                @foreach ($testimonials as $key => $testimonial)
                    <div class="carousel-item @if ($key <= 0) active @endif">
                        <div class="car">
                            <div class="row">
                                <div class="col-md-6">
                                    <img src="{{ asset('/images/' . $testimonial->image) }}" class="d-block p-2"
                                        alt="...">

                                </div>
                                <div class="col-md-6">
                                    <h5 class="test-head">First slide label</h5>
                                    <span class="test-designation">{{ $testimonial->designation }}</span>
                                    <p class="my-3">{{ $testimonial->description }}</p>
                                </div>
                            </div>

                        </div>
                    </div>
                @endforeach

            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

    </div>
</section><!-- End Team Section -->
