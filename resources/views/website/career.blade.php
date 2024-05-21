@extends('layouts.Website.mainlayoutwebsite')
@section('title')
    Career
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




        <section id="contact" class="contact" style="background: #F9F9F9; @if(  app()->getLocale()=="ar" ) direction: rtl" @endif ">
            <div class="container" data-aos="fade-up">

                <div class="">
                    <h2 class="myfont-4">{{(__('Career.Career'))}}</h2>
                </div>

                <div class="row">








                    <div class="col-lg-12" data-aos="fade-up" data-aos-delay="300">
                        <form action="{{ route('careers.store') }}" method="POST" enctype="multipart/form-data" class="careers-form">
                            @csrf
                            <h1 class="myfont-5">{{(__('Career.team'))}}</h1>
                            <div class="row careers-row-padding">
                                <div class="col-lg-6 form-group">
                                    <input type="text" name="name" class="form-control" id="name" placeholder="{{(__('Career.Your_Name'))}}" value="{{ old('name') }}" required>
                                </div>
                                <div class="col-lg-6 form-group">
                                    <input type="email" class="form-control" name="email" id="email" placeholder="{{(__('Career.Your_Email'))}}" value="{{ old('email') }}" required>
                                </div>
                            </div>
                            <div class="row careers-row-padding">
                            <div class="form-group col-lg-6">
                                <input  class="form-control" id="phone" name="phone" value="{{ old('phone') }}" required placeholder="{{(__('Career.phone'))}}" >
                            </div>
                                <div class="form-group col-lg-6">
                                    <label for="resume">{{(__('Career.Resume'))}}</label>
                                    <input type="file" id="resume" name="resume" required>
                                </div>
                            </div>
                            <div class="form-group careers-row-padding">
                                <textarea id="cover_letter" name="cover_letter" required class="form-control" placeholder="{{(__('Career.cover_letter'))}}">{{ old('cover_letter') }} {{(__('Career.cover_letter'))}}</textarea>
                            </div>

                            <div class="text-center careers-row-padding "><button type="submit" class="careers-submit myfont-6">{{(__('Career.submit'))}}</button></div>
                        </form>
                    </div>

                </div>

            </div>
        </section><!-- End Contact Us Section -->
@endsection
