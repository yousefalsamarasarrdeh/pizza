@extends('layouts.Website.mainlayoutwebsite')
@section('title')
    Home page
@endsection
@section('content')
    <p>@lang('navbar.Login')</p>

    {{app()->getLocale()}}
    <p>@lang('navbar.Login')</p>
    <a href="{{ url('set/lang/en') }}">English</a> | <a href="{{ url('set/lang/ar') }}">عربي</a>


@endsection
