<div class="footer-area-wrapper bg-gray">
    <div class="footer-area section-space--ptb_80">
        <div class="container">
            <div class="row footer-widget-wrapper">
                <div class="col-lg-6 col-md-6 col-sm-6 footer-widget">
                    <div class="footer-widget__logo mb-30">
                        <img src="{{asset("images/".session()->get("logo"))}}" width="160" height="48" class="img-fluid" alt="">
                    </div>
                    <ul class="footer-widget__list">
                        <li>{{session()->get("address")}}</li>
                        <li><a href="mailto:contact@aeroland.com" class="hover-style-link">{{session()->get("email")}}</a></li>
                        <li><a href="tel:123344556" class="hover-style-link text-black font-weight--bold">{{session()->get("phone_number")}}</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 footer-widget">
                    <h6 class="footer-widget__title mb-20">IT Services</h6>
                    <ul class="footer-widget__list">
                        @foreach (App\Models\Service::latest()->take(6)->get() as $service)

                        <li><a href="#" class="hover-style-link">{{$service->title}}</a></li>

                        @endforeach

                    </ul>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 footer-widget">
                    <h6 class="footer-widget__title mb-20">Projects</h6>
                    <ul class="footer-widget__list">
                        @foreach (App\Models\Project::latest()->take(6)->get() as $project)

                        <li><a href="/" class="hover-style-link">{{$project->title}}</a></li>

                        @endforeach

                    </ul>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 footer-widget">
                    <h6 class="footer-widget__title mb-20">Quick links</h6>
                    <ul class="footer-widget__list">

                        <li><a href="/" class="hover-style-link">Home</a></li>
                        <li><a href="/courses" class="hover-style-link">Courses</a></li>
                        <li><a href="/projects" class="hover-style-link">Projects</a></li>
                        <li><a href="/blogs" class="hover-style-link">Blogs</a></li>
                        <li><a href="contact-us" class="hover-style-link">Contact Us</a></li>

                    </ul>
                </div>


            </div>
        </div>
    </div>
    <div class="footer-copyright-area section-space--pb_30">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 text-center text-md-start">
                    <p>  <span class="copyright-text">&copy; 2021 Future World All Rights Reserved.</span></p>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <ul class="list ht-social-networks solid-rounded-icon">

                        <li class="item">
                            <a href="{{session()->get('twitter')}}" target="_blank" aria-label="Twitter" class="social-link hint--bounce hint--top hint--primary">
                                <i class="fab fa-twitter link-icon"></i>
                            </a>
                        </li>
                        <li class="item">
                            <a href="{{session()->get('facebook')}}" target="_blank" aria-label="Facebook" class="social-link hint--bounce hint--top hint--primary">
                                <i class="fab fa-facebook-f link-icon"></i>
                            </a>
                        </li>
                        <li class="item">
                            <a href="{{session()->get('instagram')}}" target="_blank" aria-label="Instagram" class="social-link hint--bounce hint--top hint--primary">
                                <i class="fab fa-instagram link-icon"></i>
                            </a>
                        </li>
                        <li class="item">
                            <a href="{{session()->get('linkdin')}}" target="_blank" aria-label="Linkedin" class="social-link hint--bounce hint--top hint--primary">
                                <i class="fab fa-linkedin link-icon"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
