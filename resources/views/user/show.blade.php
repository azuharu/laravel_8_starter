@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-sm-12 col-lg-12">

        @php
        //var_dump(request()->page);
        @endphp

        <div class="card mb-4">
            <div class="card-header"> Detail: {{ $user->name }}</div>
            <div class="card-body">
                <a href="{{ route('user.index') }}" class="btn btn-sm btn-secondary mb-3">
                    <svg class="icon">
                        <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-arrow-left') }}"></use>
                    </svg>
                    Back
                </a>
                <a href="{{ route('user.edit', $user->id) }}" class="btn btn-sm btn-warning mb-3">
                    <svg class="icon">
                        <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-pencil') }}"></use>
                    </svg>
                    Edit
                </a>
                <a href="#" class="btn btn-sm btn-danger mb-3" data-coreui-toggle="modal" data-coreui-target="#deleteModal">
                    <svg class="icon">
                        <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-trash') }}"></use>
                    </svg>
                    Delete
                </a>
                <table class="table table-striped table-bordered">
                    <tbody>
                        <tr>
                            <th class="table-data-th">Name</th>
                            <td>{{ $user->name }}</td>
                        </tr>
                        <tr>
                            <th class="table-data-th">Email</th>
                            <td>{{ $user->email }}</td>
                        </tr>
                        <tr>
                            <th class="table-data-th">Created At</th>
                            <td>{{ $user->created_at }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </div>

</div>


<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="POST" action="{{ route('user.destroy', $user->id) }}" id="delete-user">
                @method('DELETE')
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteModalLabel">Delete Confirmation</h5>
                    <button class="btn-close" type="button" data-coreui-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Are you sure to delete: {{ $user->name }}?</p>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-coreui-dismiss="modal">Close</button>
                    <button class="btn btn-primary" id="delete-user" type="submit">Delete</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection