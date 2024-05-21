@extends('layouts.Dashboard.mainlayout')
@section('title')
    Career page
@endsection
@section('content')

    <h1> Career table</h1>

    <table class="table datatable">
        <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Description</th>
            <th>CV</th>
            <th>Date</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($careers as $career)
            <tr>
                <td>{{ $career->id }}</td>
                <td>{{ $career->name }}</td>
                <td>{{ $career->email }}</td>
                <td>{{ $career->phone }}</td>
                <td>{{ $career->cover_letter }}</td>
                <td><a href="{{ asset('storage/' . $career->resume) }}" target="_blank">Show CV</a></td>
                <td>{{ $career->created_at }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
