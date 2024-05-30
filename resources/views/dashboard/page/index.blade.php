@extends('layouts.Dashboard.mainlayout')
@section('title')
    Career page
@endsection
@section('content')

    <h1>Page Table</h1>

    <table class="table datatable">
        <thead>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Description AR</th>
            <th>Description EN</th>
            <th>Image 1</th>
            <th>Image 2</th>
            <th>Image 3</th>
            <th>Image 4</th>
            <th>Image 5</th>
            <th>Edit</th>
            <th>Date</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($pages as $page)
            <tr>
                <td>{{ $page->id }}</td>
                <td>{{ $page->title }}</td>
                <td>{{ $page->description_ar }}</td>
                <td>{{ $page->description_en }}</td>
                @for ($i = 1; $i <= 5; $i++)
                    <td>
                        @if ($page->{'image_' . $i})
                            <img src="{{ asset('storage/' . $page->{'image_' . $i}) }}" alt="Image {{ $i }}" width="50">
                        @else
                            N/A
                        @endif
                    </td>
                @endfor
                <td>
                    <a href="{{ route('admin.pages.edit', $page->id) }}" class="btn btn-primary">Edit</a>
                </td>
                <td>{{ $page->created_at }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
