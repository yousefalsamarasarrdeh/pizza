@extends('layouts.Dashboard.mainlayout')
@section('title')
    Contact Page
@endsection
@section('content')

    <h1>Contact Table</h1>
    <a href="{{ route('admin.contact.export') }}" class="btn btn-success mb-3">Export to Excel</a>
    <table class="table datatable">
        <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Description</th>
            <th>Order Details</th>
            <th>Date</th>
            <th>Store</th>
            <th>Comment</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($contact as $record)
            <tr>
                <td>{{ $record->id }}</td>
                <td>{{ $record->name }}</td>
                <td>{{ $record->email }}</td>
                <td>{{ $record->phone }}</td>
                <td>{{ $record->tell_us }}</td>
                <td>{{ $record->order_details }}</td>
                <td>{{ $record->date }}</td>
                <td>{{ $record->store }}</td>
                <td>{{ $record->comment }}</td>
                <td>
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal" data-id="{{ $record->id }}">Delete</button>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

    <!-- Modal -->
    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteModalLabel">Confirm Deletion</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Are you sure you want to delete this record with ID: <span id="recordId"></span>?
                </div>
                <div class="modal-footer">
                    <form id="deleteForm" method="POST" action="">
                        @csrf
                        @method('DELETE')
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </div>
            </div>
        </div>
    </div>



@endsection
@section('script')
    <script>
        var deleteModal = document.getElementById('deleteModal');
        deleteModal.addEventListener('show.bs.modal', function (event) {
            var button = event.relatedTarget;
            var id = button.getAttribute('data-id');
            var form = document.getElementById('deleteForm');
            form.action = '/admin/contact/' + id;

            // تحديث النص لعرض معرف السجل
            var recordIdSpan = document.getElementById('recordId');
            recordIdSpan.textContent = id;
        });
    </script>
@endsection
