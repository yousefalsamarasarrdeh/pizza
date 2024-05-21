@extends('layouts.Website.mainlayoutwebsite')
@section('title')
    contact
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


      <div style="@if(  app()->getLocale()=="ar" ) direction: rtl" @endif ">
        <section id="contact" class="contact" style="background: #F9F9F9; ">
        <div class="container" data-aos="fade-up">
            <h1>{{(__('Contact.Contact'))}}</h1>
            <div class="myrow"><h1 class="myfont-7"><img src="{{url('Website/assets/img/Line.png')}}">{{(__('Contact.For_Complaints'))}} <span class="myfont-8">920020460</span></h1></div>

            <br>
            <form action="{{ route('contacts.store') }}" method="POST" class="careers-form" enctype="multipart/form-data">
                <h1 class="myfont-5 "><img src="{{url('Website/assets/img/Line.png')}}">{{(__('Contact.have_questions'))}} </h1>
                @csrf  <div class="row careers-row-padding ">
                <div class="form-group col-lg-4">

                    <input type="text" class="form-control" id="name" name="name" required placeholder="{{(__('Contact.Your_Name'))}}">
                </div>

                <div class="form-group col-lg-4" >

                    <input type="email" class="form-control" id="email" name="email" required PLACEHOLDER="{{(__('Contact.Your_Email'))}}">
                </div>
                    <div class="form-group col-lg-4">

                        <input type="text" class="form-control" id="phone" name="phone" required placeholder="{{(__('Contact.Your_Email'))}}">
                    </div>
                </div>

                <div class="row careers-row-padding">
                <div class="form-group col-lg-6">
                    <label for="tell_us">{{(__('Contact.tell_us?'))}}</label>
                    <textarea class="form-control" id="tell_us" name="tell_us" required></textarea>
                </div>
                <div class="form-group col-lg-6">
                    <label for="order_details">{{(__('Contact.you_order?'))}}</label>
                    <textarea class="form-control" id="order_details" name="order_details" required></textarea>
                </div>
                </div>
                <div class="row careers-row-padding">
                <div class="form-group col-lg-6">
                    <label for="date">{{(__('Contact.Date'))}}:</label>
                    <input type="date" class="form-control" id="date" name="date" required>
                </div>
                <div class="form-group col-lg-6">
                    <label for="store">{{(__('Contact.select_store'))}}:</label>
                    <select class="form-control" id="store" name="store" required>
                        <option value="Hamra">{{(__('Contact.Hamra'))}}</option>
                        <option value="Rabwa">{{(__('Contact.Rabwa'))}}</option>
                        <option value="Sahafa">{{(__('Contact.Sahafa'))}}</option>
                        <option value="Takhassusi">{{(__('Contact.Takhassusi'))}}</option>
                    </select>
                </div>
                </div>
                <div class="form-group ">
                    <label for="comment">{{(__('Contact.Comment'))}}:</label>
                    <textarea class="form-control" id="comment" name="comment" required></textarea>
                </div>
                <div class="text-center careers-row-padding "><button type="submit" class="careers-submit myfont-6">{{(__('Contact.Send'))}}</button></div>
            </form>
        </div>


        <br>

        </section>

        <section id="contact" class="contact" style="background: #F9F9F9; ">
        <div class="container" data-aos="fade-up">


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
      </div>
@endsection
