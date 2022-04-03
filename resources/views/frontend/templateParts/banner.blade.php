@foreach (App\Models\Banner::where('status','active')->get() as  $banner)
<section id="hero" class="d-flex align-items-center" style="background: url({{asset('images/'.$banner->image)}})   no-repeat center  center/cover ">
    <div class="container" data-aos="zoom-out" data-aos-delay="100">
      <h1>Welcome to <span>SwastaGhar</span></h1>
      <h2>{{$banner->title}}</h2>
      <p>{{$banner->description}}</p>
      <div class="d-flex">
        <a href="#about" class="btn-get-started scrollto">Get Started</a>
        <a href="{{$siteInfo->youtube}}" class="glightbox btn-watch-video"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
      </div>
    </div>
  </section><!-- End Hero -->
  @endforeach
