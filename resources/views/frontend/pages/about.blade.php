@extends("frontend.layouts.master")
@section("content")
<section class="breadcrumb breadcrumb_bg align-items-center">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="col-sm-6">
                <div class="breadcrumb_tittle text-left">
                    <h2>About Us</h2>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="breadcrumb_content text-right">
                    <p>Home<span>/</span>About Us</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb start-->

<!-- about us start-->
@include("frontend.components.belowBanner")
<!-- about us part end-->

@include("frontend.components.belowHomeService")
@include("frontend.components.counter")
@endsection
