<section id="about" class="about section-bg">
    <div class="container" data-aos="fade-up">

        @foreach (App\Models\AboutUs::latest()->get() as $about)
            <div class="row">
                <div class="col-lg-6 d-flex justify-content-center align-items-center" data-aos="fade-right"
                    data-aos-delay="100">
                    <img src="{{ asset('images/' . $about->image) }}" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 py-5 pt-lg-0 content d-flex flex-column justify-content-center" data-aos="fade-up"
                    data-aos-delay="100">
                    <div class="section-title">
                        <h3>Find Out More <span>About Us</span></h3>
                    </div>
                    <p class="fst-italic text-center">
                        {!! $about->short_description !!}
                    </p>
                    {{-- <ul>
                    <li>
                        <i class="bx bx-store-alt"></i>
                        <div>
                            <h5>Ullamco laboris nisi ut aliquip consequat</h5>
                            <p>Magni facilis facilis repellendus cum excepturi quaerat praesentium libre trade</p>
                        </div>
                    </li>
                    <li>
                        <i class="bx bx-images"></i>
                        <div>
                            <h5>Magnam soluta odio exercitationem reprehenderi</h5>
                            <p>Quo totam dolorum at pariatur aut distinctio dolorum laudantium illo direna pasata redi
                            </p>
                        </div>
                    </li>
                </ul> --}}

                </div>
            </div>
        @endforeach

    </div>
</section>
