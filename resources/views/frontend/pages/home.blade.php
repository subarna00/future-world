@extends("frontend.layouts.master")
@section("content")
@include('frontend.components.banner')
<!--============ Infotechno Hero End ============-->
<!--====================  brand logo slider area ====================-->
@include('frontend.components.brand')
<!--====================  End of brand logo slider area  ====================-->
<!--===========  feature-images-wrapper  Start =============-->
@include('frontend.components.homeService')
<!--===========  feature-images-wrapper  End =============-->

<!-- ============ Our Experience Wrapper Start =============== -->
@include('frontend.components.about')
@include("frontend.components.courses")
<!-- ============ Our Experience Wrapper End =============== -->
<!--=========== fun fact Wrapper Start ==========-->
@include('frontend.components.counter')

@include('frontend.components.projects')
<!--===========  Projects wrapper End =============-->

<!--====================  testimonial section ====================-->
@include('frontend.components.review')
<!--====================  End of testimonial section  ====================-->


<!--====================  Blog Section Start ====================-->
@include('frontend.components.homeBlog')
@endsection
