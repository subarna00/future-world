<?php
$siteInfos = App\Models\SiteSetting::where('status', 'active')->first();
?>
<section id="contact" class="contact">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Contact</h2>
            <h3><span>Contact Us</span></h3>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
            <div class="col-lg-6">
                <div class="info-box mb-4">
                    <i class="bx bx-map"></i>
                    <h3>Our Address</h3>
                    <p>{{ $siteInfos->address }}</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="info-box  mb-4">
                    <i class="bx bx-envelope"></i>
                    <h3>Email Us</h3>
                    <p>{{ $siteInfos->email }}</p>

                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="info-box  mb-4">
                    <i class="bx bx-phone-call"></i>
                    <h3>Call Us</h3>
                    <p>{{ $siteInfos->phone_number }}</p>
                </div>
            </div>

        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">

            <div class="col-lg-6 ">

                <div class="mapouter">
                    <div class="gmap_canvas"><iframe width="600" height="500" id="gmap_canvas"
                            src="https://maps.google.com/maps?q=swastha%20ghar%20sifal&t=&z=13&ie=UTF8&iwloc=&output=embed"
                            frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a
                            href="https://putlocker-is.org"></a><br>
                        <style>
                            .mapouter {
                                position: relative;
                                text-align: right;
                                height: 500px;
                                width: 600px;
                            }

                        </style><a href="https://www.embedgooglemap.net">google make your own map</a>
                        <style>
                            .gmap_canvas {
                                overflow: hidden;
                                background: none !important;
                                height: 500px;
                                width: 600px;
                            }

                        </style>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <form action="{{ route('sendMessage') }}" method="POST" class="php-email-forms">
                    @csrf
                    <div class="row">
                        <div class="col form-group">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name"
                                required>
                        </div>
                        <div class="col form-group">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email"
                                required>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="number" id="subject" placeholder="Phone Number"
                            required>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                    </div>

                    <div class="text-center"><button type="submit">Send Message</button></div>
                </form>
            </div>

        </div>

    </div>
</section><!-- End Contact Section -->
