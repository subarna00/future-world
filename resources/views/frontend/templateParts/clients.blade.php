<?php $clients = App\Models\Client::where('status', 'active')
    ->latest()
    ->get(); ?>
@if (count($clients) > 0)
    <section id="clients" class="clients section-bg">
        <div class="container">

            <div class="row">
                @foreach ($clients as $client)
                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="{{ asset('images/' . $client->image) }}" class="img-fluid" alt="">
                    </div>
                @endforeach


            </div>

        </div>
    </section><!-- End Clients Section -->
@endif
