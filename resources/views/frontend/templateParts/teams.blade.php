<?php
$teams = App\Models\Team::latest()->get();

?>
@if (count($teams) > 0)
    <section id="team" class="team section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Team</h2>
                <h3>Our Hardworking <span>Team</span></h3>

            </div>

            <div class="row">
                @foreach ($teams as $team)
                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                        <div class="member">
                            <div class="member-img">
                                <img src="{{ asset('images/' . $team->image) }}" class="img-fluid" alt="">
                            </div>
                            <div class="member-info">
                                <h4>{{ $team->name }}</h4>
                                <span>{{ $team->designation }}</span>
                                <p>{{ $team->description }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>

        </div>
    </section><!-- End Team Section -->
@endif
