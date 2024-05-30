@extends('layouts.Dashboard.mainlayout')
@section('title')
    Edit Page
@endsection
@section('content')

    <h1>Edit Page</h1>

    <form action="{{ route('pages.update', $page->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
     <div class="row">
        <div class="form-group col-lg-6 col-md-6">
            <label for="title">Title</label>
            <input type="text" name="title" class="form-control" value="{{ $page->title }}" required>
        </div>

        <div class="form-group col-lg-6 col-md-6">
            <label for="description_ar">Description AR</label>
            <textarea type="text" name="description_ar" class="form-control" value="{{ $page->description_ar }}" required> {{$page->description_ar}}</textarea>
        </div>
     </div>
     <div class="row">
        <div class="form-group col-lg-6 col-md-6">
            <label for="description_en">Description EN</label>
            <textarea type="text" name="description_en" class="form-control" value="{{ $page->description_en }}" required> {{$page->description_en}}</textarea>
        </div>

        @for ($i = 1; $i <= 5; $i++)
            <div class="form-group col-lg-6 col-md-6">
                <label for="image_{{ $i }}">Image {{ $i }}</label>
                @if ($page->{'image_' . $i})
                    <img src="{{ asset('storage/' . $page->{'image_' . $i}) }}" alt="Image {{ $i }}" width="50">
                @endif
                <input type="file" name="image_{{ $i }}" class="form-control">
            </div>
        @endfor
      <div style="margin-top: 35px">
        <button type="submit" class="btn btn-success">Update</button>
      </div>
     </div>
    </form>
@endsection
