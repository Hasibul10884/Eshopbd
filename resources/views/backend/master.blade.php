<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="admin, dashboard">
    <meta name="author" content="DexignZone">
    <meta name="robots" content="index, follow">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Dompet : Payment Admin Template">
    <meta property="og:title" content="Dompet : Payment Admin Template">
    <meta property="og:description" content="Dompet : Payment Admin Template">
    <meta property="og:image" content="https://dompet.dexignlab.com/xhtml/social-image.png">
    <meta name="format-detection" content="telephone=no">

    <!-- PAGE TITLE HERE -->
    <title>Eshop Bd : Ecommerce Admin Template</title>

    <!-- FAVICONS ICON -->
    <link rel="shortcut icon" type="image/png" href="{{url('frontend/images/favicon.png')}}">

    <link href="{{url('backend/vendor/jquery-nice-select/css/nice-select.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{url('backend/vendor/nouislider/nouislider.min.css')}}">
    <!-- Style css -->
    <link href="{{url('backend/css/style.css')}}" rel="stylesheet">

</head>

<body>

{{--     
    <div id="preloader">
        <div class="waviy">
            <span style="--i:1">L</span>
            <span style="--i:2">o</span>
            <span style="--i:3">a</span>
            <span style="--i:4">d</span>
            <span style="--i:5">i</span>
            <span style="--i:6">n</span>
            <span style="--i:7">g</span>
            <span style="--i:8">.</span>
            <span style="--i:9">.</span>
            <span style="--i:10">.</span>
        </div>
    </div> --}}
    <!--*******************
        Preloader end
    ********************-->

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">
        
        <!--**********************************
            Nav header start
        ***********************************-->
        @include('backend.fixed.navbar')
        <!--**********************************
            Nav header end
        ***********************************-->

        
        
        

        

        @include('backend.fixed.header')


        <!--**********************************
            Sidebar start
        ***********************************-->
        @include('backend.fixed.Sidebar')
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        
        
        <div class="content-body">
            <!-- row -->
            <div class="container-fluid">
                
                @yield('backend_content')  
            </div>
        </div>



            

        @include('backend.fixed.footer')


    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="{{url('backend/vendor/global/global.min.js')}}"></script>
    <script src="{{url('backend/vendor/chart.js/Chart.bundle.min.js')}}"></script>
    <script src="{{url('backend/vendor/jquery-nice-select/js/jquery.nice-select.min.js')}}"></script>

    <!-- Apex Chart -->
    <script src="{{url('backend/vendor/apexchart/apexchart.js')}}"></script>
    <script src="{{url('backend/vendor/nouislider/nouislider.min.js')}}"></script>
    <script src="{{url('backend/vendor/wnumb/wNumb.js')}}"></script>

    <!-- Dashboard 1 -->
    <script src="{{url('backend/js/dashboard/dashboard-1.js')}}"></script>

    <script src="{{url('backend/js/custom.min.js')}}"></script>
    <script src="{{url('backend/js/dlabnav-init.js')}}"></script>
    <script src="{{url('backend/js/demo.js')}}"></script>
    <script src="{{url('backend/js/styleSwitcher.js')}}"></script>

</body>

</html>