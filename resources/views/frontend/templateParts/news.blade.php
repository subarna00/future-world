<section id="team" class="team section-bg">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>News</h2>
            <h3>Our News And <span>Notices</span></h3>
        </div>

        <div class="row">
            @foreach (App\Models\NewsNotice::where('status', 'active')->latest()->limit(8)->get()
    as $news)
                <a href="{{ $news->link }}" class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up"
                    data-aos-delay="100">
                    <div class="member">
                        <div class="member-img">
                            <img src="{{ asset('images/' . $news->image) }}" class="img-fluid" alt=""
                                style="min-height: 260px;object-fit:cover;">
                            {{-- <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div> --}}
                        </div>
                        <div class="member-info">
                            <h4>{{ $news->title }}</h4>
                            {{-- <span>Chief Executive Officer</span> --}}
                        </div>
                    </div>
                </a>
            @endforeach


        </div>

    </div>
</section><!-- End Team Section -->
