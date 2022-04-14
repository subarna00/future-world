@extends('frontend.layout.master')
@section('content')
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>{{ $service->title }}</h2>

                <ol>
                    <li><a href="/">Home</a></li>
                    <li><a href="/services">Services</a></li>
                    <li>Service Details</li>
                </ol>
            </div>
        </div>
    </section>
    <section class="serviceDetails">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    {!! $service->short_description !!}
                    <br>
                    {!! $service->description !!}
                </div>
                <div class="col-md-4">
                    <img src="{{asset('images/'.$service->image)}}" alt="" class="img-fluid">
                </div>
            </div>

        </div>
    </section>
    <div class="serviceInquery">
        <div class="container send">
            <h4 class="text-center ">Schedule a Inspection</h4>
            <div class="my-3">
                <form action="{{route('sendQuery')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name">Full Name</label>
                                <input type="text" name="name" required class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name">Email</label>
                                <input type="email" name="email" required class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name">Phone Number</label>
                                <input type="number" name="number" required class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name">Address</label>
                                <input type="text" name="address" required class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="form-group mt-3">
                        <label for="">Message</label>
                        <textarea name="message" rows="5" cols="10" class=" form-control">

                        </textarea>
                    </div>
                    <button type="submit" class="btn btn-success w-100 mt-3" style="    background: #a23234;
                    border-color: #a23234;">Schedule a Inspection</button>
                </form>
            </div>
        </div>
    </div>
@endsection
