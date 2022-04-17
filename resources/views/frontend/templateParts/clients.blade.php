<?php $clients = App\Models\Client::latest()
    ->limit(4)
    ->get();
$clientCount = count($clients);
?>
@if ($clientCount > 0)
    <section id="team" class="team section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h3>Our Precious<span>Clients</span></h3>
                <h2><a href="{{ route('clients') }}">View All Clients</a></h2>

            </div>

            <div class="row">
                @foreach ($clients as $client)
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                        <div class="member">
                            <div class="member-img">
                                <img src="{{ asset('images/' . $client->image) }}" class="img-fluid" alt="">

                            </div>
                            <div class="member-info">
                                <h4>{{ $client->name }}</h4>
                                <span>{{ substr($client->description, 0, 25) }}</span>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </section>
@endif
