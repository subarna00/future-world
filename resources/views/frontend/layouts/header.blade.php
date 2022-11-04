<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>{{session()->get("title") ?? "Future World"}}</title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Favicon -->
<link rel="icon" href="{{asset('images/'.session()->get('logo'))}}">

<!-- CSS
    ============================================ -->

<!-- Vendor & Plugins CSS (Please remove the comment from below vendor.min.css & plugins.min.css for better website load performance and remove css files from avobe) -->

<link rel="stylesheet" href="{{asset('assets/css/vendor/vendor.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/plugins/plugins.min.css')}}">

<!-- Main Style CSS -->
<link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
{{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> --}}
