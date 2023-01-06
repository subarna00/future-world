@extends('frontend.layouts.master')
@section('content')
    <div class="container">
        @if (Session::has('msg'))
            <div class="alert alert-success alert-dismissible fade show mt-5" role="alert">
                {{ session()->get('msg') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <div class="row my-5">
            <div class="col-md-8">
                <div class="d-flex  mb-5">

                    <img src="{{ asset('images/' . $course->image) }}" alt="" height="100px">
                    <div class="mx-4">

                        <p class="text-center underlined"
                            style="    margin-bottom: 0px;
    text-align: left !important;
    font-size: 30px;
    font-weight: 600;
    font-family: 'Font Awesome 5 Brands';
    color: #000000d6;">
                            {{ $course->title }}</p>
                        <p>Duration: {{ $course->duration }}</p>
                    </div>
                </div>
                <nav>
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home"
                            type="button" role="tab" aria-controls="nav-home" aria-selected="true">Overview</button>
                        <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile"
                            type="button" role="tab" aria-controls="nav-profile"
                            aria-selected="false">Description</button>
                        <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact"
                            type="button" role="tab" aria-controls="nav-contact"
                            aria-selected="false">Syllabus</button>
                    </div>
                </nav>
                <div class="tab-content mt-2" id="nav-tabContent"
                    style="    border: 1px solid #dee2e6;
    margin-top: 0px !important;
    padding: 10px;">
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                        {!! $course->overview !!}
                    </div>
                    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                        {!! $course->description !!}</div>
                    <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                        {!! $course->syllabus !!}</div>
                </div>
            </div>
            <div class="col-md-4">
                <div
                    style="border: 1px solid lightgrey;
    padding: 25px;
    border-radius: 5px;
    box-shadow: 0px 0px 4px 2px lightgrey;">

                    <form action="{{ route('sendQuery') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Full Name</label>
                            <input type="text" class="form-control" required name="name">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                            <input type="email" name="email" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Phone Number</label>
                            <input type="number" name="number" required class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp">
                        </div>
                        <input type="hidden" name="course" value="{{ $course->title }}">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Message</label>
                            <textarea type="text" name="message" class="form-control" required id="exampleInputEmail1"
                                aria-describedby="emailHelp"></textarea>
                        </div>


                        <button type="submit" class="btn-sm btn-primary w-100 border-none">Submit</button>
                    </form>
                </div>
            </div>
        </div>

    </div>
@endsection
