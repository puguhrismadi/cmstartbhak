<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>@yield('title') - IT Cermat</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('bluetemplate/img/favicon.png')}}" rel="icon">
  <link href="{{ asset('bluetemplate/img/apple-touch-icon.png')}}" rel="apple-touch-icon">
{{-- font awesome add --}}
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('bluetemplate/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('bluetemplate/vendor/icofont/icofont.min.css') }}" rel="stylesheet">
  <link href=" {{ asset('bluetemlate/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('bluetemplate/vendor/owl.carousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
  <link href="{{ asset('bluetemplate/vendor/venobox/venobox.css')}}" rel="stylesheet">
  <link href="{{ asset('bluetemplate/vendor/aos/aos.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('bluetemplate/css/style.css')}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Appland - v2.2.0
  * Template URL: https://bootstrapmade.com/free-bootstrap-app-landing-page-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>
<style>
  .mylogo {
    width: 110px;
    
  }
</style>
<body>

 
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top  header-transparent ">
    <div class="container d-flex align-items-center">

      <div class="logo mr-auto">
        {{-- <h1 class="text-light"><a href="index.html">{{ setting('site.title') }}</a></h1> --}}
        <!-- Uncomment below if you prefer to use an image logo -->
       <a href="index.html"><img src="{{ Voyager::image( setting('site.logo') ) }}" alt="" class="img-fluid mylogo"></a>
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="index.html">Home</a></li>
          <li><a href="#features">App Features</a></li>
          <li><a href="#gallery">Gallery</a></li>
          <li><a href="#pricing">Pricing</a></li>
          <li><a href="#faq">F.A.Q</a></li>
          <li><a href="#contact">Contact Us</a></li>

          <li class="get-started"><a href="#features">Get Started</a></li>
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

 