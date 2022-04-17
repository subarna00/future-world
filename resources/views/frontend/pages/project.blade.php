@extends('frontend.layout.master')
@section('content')
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Projects</h2>

                <ol>
                    <li><a href="/">Home</a></li>
                    <li><a href="#">Projects</a></li>
                </ol>
            </div>
        </div>
    </section>
    <section id="team" class="team section-">
        <div class="container" data-aos="fade-up">

            {{-- <div class="section-title"> --}}
            {{-- <h3>Our <span>Projects</span></h3> --}}
            {{-- <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque
                    vitae autem.</p> --}}
            {{-- </div> --}}

            <div class="row">
                @foreach ($projects as $project)
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                        <div class="member">
                            <div class="member-img">
                                <img src="{{ asset('images/' . $project->image) }}" class="img-fluid" alt="">
                            </div>
                            <div class="member-info">
                                <h4>{{ $project->title }}</h4>
                                <span>{{ $project->description }}</span>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
            <div class="d-flex justify-content-center  mt-3">
                {!! $projects->links('pagination::bootstrap-4') !!}
            </div>

        </div>
    </section><!-- End Team Section -->
@endsection
