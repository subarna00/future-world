<div class="footer-top">
    <div class="container">
        <div class="row">

            <div class="col-lg-3 col-md-6 footer-contact">
                <h3>Swastha Ghar<span>.</span></h3>
                <p>
                    {{ $siteInfo->address }}
                    <br>
                    <br>
                    <strong>Phone:</strong> +977 {{ $siteInfo->phone_number }}<br>
                    <strong>Email:</strong> {{ $siteInfo->email }}<br>
                </p>
            </div>

            <div class="col-lg-3 col-md-6 footer-links">
                <h4>Useful Links</h4>
                <ul>
                    <li><i class="bx bx-chevron-right"></i> <a href="/">Home</a></li>
                    <li><i class="bx bx-chevron-right"></i> <a href="#about">About us</a></li>
                    <li><i class="bx bx-chevron-right"></i> <a href="/services">Services</a></li>
                    <li><i class="bx bx-chevron-right"></i> <a href="/blogs">Blogs</a></li>
                    <li><i class="bx bx-chevron-right"></i> <a href="/faqs">FAQs</a></li>
                    <li><i class="bx bx-chevron-right"></i> <a href="/news">News</a></li>
                    <li><i class="bx bx-chevron-right"></i> <a href="/contact">Contact Us</a></li>
                </ul>
            </div>

            <div class="col-lg-3 col-md-6 footer-links">
                <h4>Our Services</h4>
                <ul>
                    @foreach (App\Models\Service::where('status', 'active')->latest()->limit(6)->get() as $service)
                        <li><i class="bx bx-chevron-right"></i> <a href="{{route('serviceDetailPAge',$service->slug)}}">{{$service->title}}</a></li>
                    @endforeach

                </ul>
            </div>

            <div class="col-lg-3 col-md-6 footer-links">
                <h4>Our Social Networks</h4>
                <p>Stay Connected with us through different medias</p>
                <div class="social-links mt-3">
                    <a href="{{$siteInfo->twitter}}" class="twitter"><i class="bx bxl-twitter"></i></a>
                    <a href="{{$siteInfo->facebook}}" class="facebook"><i class="bx bxl-facebook"></i></a>
                    <a href="{{$siteInfo->instagram}}" class="instagram"><i class="bx bxl-instagram"></i></a>
                    <a href="{{$siteInfo->youtube}}" class="youtube"><i class="bx bxl-youtube"></i></a>
                </div>
            </div>

        </div>
    </div>
</div>
