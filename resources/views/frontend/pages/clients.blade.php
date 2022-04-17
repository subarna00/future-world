@extends('frontend.layout.master')
@section('content')
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Clients</h2>

                <ol>
                    <li><a href="/">Home</a></li>
                    <li><a href="#">Clients</a></li>
                </ol>
            </div>
        </div>
    </section>
    <section id="team" class="team section-">
        <div class="container">
            <div class="row">
                @foreach ($clients as $client)
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                        <div class="member">
                            <div class="member-img">
                                <img src="{{ asset('images/' . $client->image) }}" class="img-fluid" alt="">
                            </div>
                            <div class="member-info">
                                <h4>{{ $client->name }}</h4>
                                <span>{{ $client->description }}</span>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
            <div class="d-flex justify-content-center  mt-3">
                {!! $clients->links('pagination::bootstrap-4') !!}
            </div>

        </div>
    </section><!-- End Team Section -->
@endsection
