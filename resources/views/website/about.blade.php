@extends('layouts.Website.mainlayoutwebsite')
@section('title')
   About
@endsection
@section('content')

    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div style="@if(app()->getLocale() == 'ar') direction: rtl @endif">
        <section id="portfolio" class="portfolio section-bg">
            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="row">
                    <div class="col-lg-6 col-md-4">
                        <div class="col-lg-9 col-md-4">
                        <h2 class="myfont-4">About Us</h2>
                        @if(app()->getLocale() == "ar")
                            {{ $page->description_ar }}
                        @else
                            {{ $page->description_en }}
                        @endif
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">

                            <div class="row">
                                <div class="col-md-6 mb-4">
                                    <img src="{{ asset('storage/'.$page->image_1) }}" class="img-fluid mb-2" alt="Image 1">
                                    <img src="{{ asset('storage/'.$page->image_2) }}" class="img-fluid" alt="Image 2">
                                </div>
                                <div class="col-md-6 mb-6">
                                    <img src="{{ asset('storage/'.$page->image_3) }}" class="img-fluid" alt="Image 3">
                                </div>
                            </div>
                            <div class="row">
                                <img src="{{ asset('storage/'.$page->image_4) }}" class="img-fluid" alt="Image 4">
                            </div>
                        
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
