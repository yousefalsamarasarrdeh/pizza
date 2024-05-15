@extends('layouts.Website.mainlayoutwebsite')
@section('title')
    Home page
@endsection
@section('content')
    <p>@lang('navbar.Login')</p>

    {{app()->getLocale()}}
    <p>@lang('navbar.Login')</p>
    <a href="{{ url('lang/en') }}">English</a> | <a href="{{ url('lang/ar') }}">عربي</a>


@endsection
