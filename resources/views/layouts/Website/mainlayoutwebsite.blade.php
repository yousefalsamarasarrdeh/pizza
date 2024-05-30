<!DOCTYPE html>
<html  lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>@yield('title')</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{asset('Website/assets/img/logo.png')}}" rel="icon">
    <link href="{{asset('Website/assets/img/logo.png')}}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{asset('Website/assets/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('Website/assets/vendor/aos/aos.css')}}" rel="stylesheet">
    <link href="{{asset('Website/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('Website/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{asset('Website/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
    <link href="{{asset('Website/assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
    <link href="{{asset('Website/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">


    <link href="{{asset('Website/assets/css/style.css')}}" rel="stylesheet">



@yield('css')
</head>

<body>




<!-- ======= Header ======= -->
<header id="header" class="d-flex align-items-center" @if(  app()->getLocale()=="ar" ) style="direction: rtl" @endif>
    <div class="container d-flex align-items-center">

        <div class="logo   @if(  app()->getLocale()=="ar" )  me-aute2 @endif  @if(  app()->getLocale()=="en" )  me-aute1 @endif ">
            <img src="{{ url('Website/assets/img/logo.png') }}" alt="My logo">
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
        </div>


        <nav id="navbar" class="navbar">

            <a href="{{ url('set/lang/ar') }}">AR</a> | <a href="{{ url('set/lang/en') }}" style="margin-inline-end: 36px;">EN</a>

            <ul>
                <li class=""><a class="nav-link scrollto @if(  app()->getLocale()=="ar" )  padding-nav-ar @endif " href="{{ route('Home') }}" >{{(__('navbar.Home'))}}</a></li>
                <li class=""><a class="nav-link scrollto @if(  app()->getLocale()=="ar" )  padding-nav-ar @endif" href="#portfolio" >{{(__('navbar.Menu'))}}</a></li>
                <li class=""><a class="nav-link scrollto @if(  app()->getLocale()=="ar" )  padding-nav-ar @endif" href="#about">{{(__('navbar.About'))}}</a></li>
                <li class=""><a class="nav-link scrollto @if(  app()->getLocale()=="ar" )  padding-nav-ar @endif" href="#about" >{{(__('navbar.store-Location'))}}</a></li>
                <li class=""><a class="nav-link scrollto @if(  app()->getLocale()=="ar" )  padding-nav-ar @endif" href="{{ route('careers.create') }}" >{{(__('navbar.Careers'))}}</a></li>

                <li class=""><a class="nav-link scrollto @if(  app()->getLocale()=="ar" )  padding-nav-ar @endif" href="{{route('Franchise')}}" >{{(__('navbar.Franchise'))}}</a></li>


                <li class="dropdown" class="myfont-1"><a href="#"><span class="@if(  app()->getLocale()=="ar" )  padding-nav-ar @endif">{{(__('navbar.Brands'))}}</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="#">Drop Down 1</a></li>
                        <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                            <ul>
                                <li><a href="#">Deep Drop Down 1</a></li>
                                <li><a href="#">Deep Drop Down 2</a></li>
                                <li><a href="#">Deep Drop Down 3</a></li>
                                <li><a href="#">Deep Drop Down 4</a></li>
                                <li><a href="#">Deep Drop Down 5</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Drop Down 2</a></li>
                        <li><a href="#">Drop Down 3</a></li>
                        <li><a href="#">Drop Down 4</a></li>
                    </ul>
                </li>
                <li class="myfont-1"><a class="nav-link scrollto @if(  app()->getLocale()=="ar" )  padding-nav-ar @endif" href="{{ route('contacts.create') }}" >{{(__('navbar.Contact'))}}</a></li>
                <img class="nav-img-padding" src="{{ url('Website/assets/img/location.png') }}" alt="location">
                <img class="nav-img-padding" src="{{ url('Website/assets/img/phone.png') }}" alt="phone">
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>

        </nav><!-- .navbar -->

    </div>
    {{--
    <div class="contact-info d-flex align-items-center">
        @guest
            <i class="bi bi-person"></i><a href="{{ route('login') }}">{{__('login')}}</a>
            <i class="bi bi-house-door"></i><a href="{{ route('register') }}"> {{__('register')}}</a>
        @else

            {{--                <i class="bi bi-phone-fill phone-icon"></i>--}}

            {{--                <a href="{{ route('logout') }}"--}}
            {{--                   onclick="event.preventDefault();--}}
            {{--                                                     document.getElementById('logout-form').submit();">--}}
            {{--                    {{ __('Logout') }}--}}
            {{--                </a>--}}

            {{--                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">--}}
            {{--                    @csrf--}}
            {{--                </form>--}}


{{--
   <i class="bi bi-person"></i>{{ Auth::user()->name }}
   <i class="bi bi-phone-fill phone-icon"></i>
   <a href="{{ route('logout') }}"
      onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
       {{ __('navbar.Logout') }}
   </a>

   <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
       @csrf
   </form>
@endguest
</div>
 --}}

</header><!-- End Header -->

<!-- ======= Hero Section ======= -->


<main id="main">

@yield('content')
</main><!-- End #main -->

<!-- ======= Footer ======= -->
<footer id="footer"  @if(  app()->getLocale()=="ar" ) style="direction: rtl" @endif>
<div class="footer-top" @if(  app()->getLocale()=="en" )  style="background-image: url('{{ asset('Website/assets/img/footer-en.jpg') }}');     background-size: cover;" @endif   @if(  app()->getLocale()=="ar" )  style="background-image: url('{{ asset('Website/assets/img/footer-ar.jpg') }}');     background-size: cover;" @endif>
<div class="container">
   <div class="row">

       <div class="col-lg-5 col-md-6 footer-info">
           <img src="{{url('Website/assets/img/logo (1).png')}}"></img>

           <div class="myfont-2"  @if(  app()->getLocale()=="ar" ) style="direction: rtl" @endif>
               {{(__('Footer.Since-2013'))}}
           </div>

       </div>

       <div class="col-lg-2 col-md-6 footer-links footer-padding">

           <ul>
               <li> <a href="{{ route('Home') }}" class="myfont-3">{{(__('Footer.Home'))}}</a></li>
               <li> <a href="#" class="myfont-3">{{(__('Footer.Menu'))}} </a></li>
               <li> <a href="#" class="myfont-3">{{(__('Footer.About'))}}</a></li>

           </ul>
       </div>

       <div class="col-lg-2 col-md-6 footer-links footer-padding">

           <ul>
               <li> <a href="{{ route('careers.create') }}" class="myfont-3">{{(__('Footer.Careers'))}}</a></li>
               <li> <a href="{{route('Franchise')}}" class="myfont-3">{{(__('Footer.Franchise'))}}</a></li>
               <li> <a href="#" class="myfont-3">{{(__('Footer.Brands'))}}</a></li>

           </ul>
       </div>

       <div class="col-lg-3 col-md-6 footer-links footer-padding">

           <ul>
               <li> <a href="{{ route('FAQ') }}" class="myfont-3">{{(__('Footer.FAQ'))}}</a></li>
               <li> <a href="{{ route('contacts.create') }}" class="myfont-3">{{(__('Footer.Contact'))}}</a></li>
               <li> <a href="#" class="myfont-3">{{(__('Footer.Privacy'))}}</a></li>

           </ul>
       </div>
       <div class="row" style="padding-bottom: 30px">
           <div class="col-lg-5 col-md-6">
               <div class="row" >
                   <div class="col-lg-6 col-md-6">
                       <a href="https://www.youtube.com/https://www.youtube.com/"> <img src="{{url('Website/assets/img/google-play.png')}}"></img> </a>
                   </div>
                   <div class="col-lg-6 col-md-6">
                       <a href="https://www.youtube.com/https://www.youtube.com/">   <img src="{{url('Website/assets/img/app-store.png')}}"></img> </a>
                   </div>
               </div>
           </div>
           <div class="col-lg-3 col-md-6">
               <div class="row" >
                   <div class="col-lg-2 col-md-6">
                       <a href="https://www.youtube.com/https://www.youtube.com/"> <img src="{{url('Website/assets/img/Facebook - Original.png')}}"></img> </a>
                   </div>
                   <div class="col-lg-2 col-md-6">
                       <a href="https://www.youtube.com/https://www.youtube.com/">   <img src="{{url('Website/assets/img/YouTube - Original.png')}}"></img> </a>
                   </div>
                   <div class="col-lg-2 col-md-6">
                       <a href="https://www.youtube.com/https://www.youtube.com/">   <img src="{{url('Website/assets/img/whatsapp .png')}}"></img> </a>
                   </div>
                   <div class="col-lg-2 col-md-6">
                       <a href="https://www.youtube.com/https://www.youtube.com/">   <img src="{{url('Website/assets/img/twitter-alt 1.png')}}"></img> </a>
                   </div>
                   <div class="col-lg-2 col-md-6">
                       <a href="https://www.youtube.com/https://www.youtube.com/">   <img src="{{url('Website/assets/img/instagram 1.png')}}"></img> </a>
                   </div>
               </div>
           </div>
           <div class="col-lg-3 col-md-6">
              <H1 class="myfont-3">{{(__('Footer.copyright'))}}</H1>
           </div>

       </div>

   </div>
</div>
</div>


</footer><!-- End Footer -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="{{asset('Website/assets/vendor/purecounter/purecounter_vanilla.js')}}"></script>
<script src="{{asset('Website/assets/vendor/aos/aos.js')}}"></script>
<script src="{{asset('Website/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('Website/assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
<script src="{{asset('Website/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('Website/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
<script src="{{asset('Website/assets/vendor/php-email-form/validate.js')}}"></script>

<!-- Template Main JS File -->
<script src="{{asset('Website/assets/js/main.js')}}"></script>
@yield('script')
</body>

</html>
