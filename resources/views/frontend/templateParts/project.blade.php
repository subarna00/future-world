<section id="team" class="team section-bg">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h3>Our <span>Projects</span></h3>
            <h2 class="mt-3"><a href="{{ route('projects') }}">View All Projects</a></h2>
            {{-- <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque
                vitae autem.</p> --}}
        </div>

        <div class="row">
            @foreach (App\Models\Project::latest()->limit(4)->get()
    as $project)
                <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                    <div class="member">
                        <div class="member-img">
                            <img src="{{ asset('images/' . $project->image) }}" class="img-fluid" alt="">

                        </div>
                        <div class="member-info">
                            <h4>{{ $project->title }}</h4>
                            {{-- <span>Chief Executive Officer</span> --}}
                        </div>
                    </div>
                </div>
            @endforeach

        </div>

    </div>
</section><!-- End Team Section -->
