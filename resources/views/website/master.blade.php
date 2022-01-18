<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">

  <title>One Health - Medical Center HTML5 Template</title>

  <link rel="stylesheet" href="{{url('Backend/css/website/maicons.css')}}">

  <link rel="stylesheet" href="{{url('Backend/css/website/bootstrap.min.css')}}">

  <link rel="stylesheet" href="{{url('Backend/css/website/owl.carousel.css')}}">

  <link rel="stylesheet" href="{{url('Backend/css/website/animate.css')}}">

  <link rel="stylesheet" href="{{url('Backend/css/website/theme.css')}}">
</head>
<body>

  
@include('website.fixed.header')


  @yield('content')
 


  @include('website.fixed.footer')

<script src="{{url('Backend/js/website/jquery-3.5.1.min.js')}}"></script>

<script src="{{url('Backend/js/website/bootstrap.bundle.min.js')}}"></script>

<script src="{{url('Backend/js/website/owl.carousel.min.js')}}"></script>

<script src="{{url('Backend/js/website/wow.min.js')}}"></script>

<script src="{{url('Backend/js/website/theme.js')}}"></script>
  
</body>
</html>