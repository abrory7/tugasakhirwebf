<!DOCTYPE html>
<html lang="en">
<head>
<title>Avision</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Demo project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="{{ asset('res/styles/bootstrap4/bootstrap.min.css') }}">
<link href="{{ asset('res/plugins/font-awesome-4.7.0/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="{{ asset('res/plugins/OwlCarousel2-2.2.1/owl.carousel.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('res/plugins/OwlCarousel2-2.2.1/owl.theme.default.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('res/plugins/OwlCarousel2-2.2.1/animate.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('res/plugins/jquery.mb.YTPlayer-3.1.12/jquery.mb.YTPlayer.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('res/styles/main_styles.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('res/styles/responsive.css') }}">
</head>
<body>

<div class="super_container">

	<!-- Header -->
    
    @include('layouts.header')
	
	<!-- Home -->

	
	
    <!-- Page Content -->

    <div class="page_content">
        <div class="container">
            <div class="row row-lg-eq-height">
                <!-- Main Content -->
                
                @yield('content')

                <!-- Sidebar -->

                @include('layouts.sidebar')
                
            </div>
        </div>
    </div>

    <!-- Footer -->
    
    @include('layouts.footer')
            