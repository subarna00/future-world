<section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope d-flex align-items-center"><a href="#"> {{$siteInfo->email}}</a></i>
        <i class="bi bi-phone d-flex align-items-center ms-4"><span> +977 {{$siteInfo->phone_number}}</span></i>
      </div>
      <div class="social-links d-none d-md-flex align-items-center">
        <a href="{{$siteInfo->twitter}}" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="{{$siteInfo->facebook}}" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="{{$siteInfo->instagram}}" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="{{$siteInfo->youtube}}" class="linkedin"><i class="bi bi-youtube"></i></a>
      </div>
    </div>
  </section>
