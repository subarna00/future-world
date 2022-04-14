@extends('frontend.layout.master')
@section('content')
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Our Services</h2>

                <ol>
                    <li><a href="/">Home</a></li>
                    <li><a href="/services">Services</a></li>
                </ol>
            </div>
        </div>
    </section>

    @include('frontend.templateParts.contactus')

@endsection
