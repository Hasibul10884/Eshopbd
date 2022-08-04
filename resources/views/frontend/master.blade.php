<!DOCTYPE html>
<html>
   <head>
      <!-- Basic -->
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <!-- Mobile Metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <!-- Site Metas -->
      <meta name="keywords" content="" />
      <meta name="description" content="" />
      <meta name="author" content="" />
      <link rel="shortcut icon" href="{{url('frontend/images/favicon.png')}}" type="">
      <title>EshopBd</title>
      <!-- bootstrap core css -->
      <link rel="stylesheet" type="text/css" href="{{url('frontend/css/bootstrap.css')}}" />
      <!-- font awesome style -->
      <link href="{{url('frontend/css/font-awesome.min.css')}}" rel="stylesheet" />
      <!-- Custom styles for this template -->
      <link href="{{url('frontend/css/style.css')}}" rel="stylesheet" />
      <!-- responsive style -->
      <link href="{{url('frontend/css/responsive.css')}}" rel="stylesheet" />
   </head>
   <body>
      <div class="hero_area">
         <!-- header section strats -->
         @include('frontend.fixed.header')
         <!-- end header section -->
         <!-- slider section -->
         @include('frontend.fixed.slider')
         <!-- end slider section -->
      </div>
      <!-- why section -->
      @include('frontend.fixed.why')
      <!-- end why section -->
      
      <!-- arrival section -->
      @include('frontend.fixed.arrival')
      <!-- end arrival section -->
      
      <!-- product section -->
      @include('frontend.fixed.product')
      <!-- end product section -->
      @yield('frontend_content')
      <!-- subscribe section -->
      @include('frontend.fixed.subscribe')
      <!-- end subscribe section -->
      <!-- client section -->
      @include('frontend.fixed.client')
      <!-- end client section -->
      <!-- footer start -->
      @include('frontend.fixed.footer')
      <!-- jQery -->
      <script src="{{url('frontend/js/jquery-3.4.1.min.js')}}"></script>
      <!-- popper js -->
      <script src="{{url('frontend/js/popper.min.js')}}"></script>
      <!-- bootstrap js -->
      <script src="{{url('frontend/js/bootstrap.js')}}"></script>
      <!-- custom js -->
      <script src="{{url('frontend/js/custom.js')}}"></script>
   </body>
</html>