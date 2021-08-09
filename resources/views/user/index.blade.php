@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-sm-12 col-lg-12">

        <div class="card mb-4">
            <div class="card-header"> User</div>
            <div class="card-body">
                <a href="{{ route('user.create') }}" class="btn btn-sm btn-primary mb-3">
                    <svg class="icon">
                        <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-plus') }}"></use>
                    </svg>
                    Add New User
                </a>
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th scope="col" class="text-center">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col" class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $i = 1;
                        @endphp
                        @foreach($users as $r)
                        <tr>
                            <td class="text-center">{{ $i++ }}.</td>
                            <td>{{ $r->name }}</td>
                            <td>{{ $r->email }}</td>
                            <td class="text-center">
                                <a href="{{ route('user.show', [$r->id]) }}" class="btn btn-sm btn-info">
                                    <svg class="icon">
                                        <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-magnifying-glass') }}"></use>
                                    </svg>
                                    Detail
                                </a>
                                &nbsp;
                                <a href="{{ route('user.edit', [$r->id]) }}" class="btn btn-sm btn-warning">
                                    <svg class="icon">
                                        <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-pencil') }}"></use>
                                    </svg>
                                    Edit
                                </a>
                                &nbsp;
                                <a href="#" class="btn btn-sm btn-danger" data-coreui-toggle="modal" data-coreui-target="#deleteModal" data-id="{{ $r->id }}" data-name="{{ $r->name }}">
                                    <svg class="icon">
                                        <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-trash') }}"></use>
                                    </svg>
                                    Delete
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $users->links() }}
            </div>
        </div>

    </div>

</div>


<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="POST" action="/user/" id="delete-user">
                @method('DELETE')
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteModalLabel">Delete Confirmation</h5>
                    <button class="btn-close" type="button" data-coreui-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Are you sure to delete: <span class="user-to-delete"></span>?</p>
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

@section('javascript')

<script>
    var deleteModal = document.getElementById('deleteModal');
    deleteModal.addEventListener('show.coreui.modal', function(event) {
        // Button that triggered the modal
        var button = event.relatedTarget
        // Extract info from data-coreui-* attributes
        var id = button.getAttribute('data-id')
        var name = button.getAttribute('data-name')
        // If necessary, you could initiate an AJAX request here
        // and then do the updating in a callback.
        //
        // Update the modal's content.
        var userToDelete = deleteModal.querySelector('.user-to-delete')
        userToDelete.textContent = name

        document.getElementById("delete-user").action = '/user/'+id;

    })
</script>

@endsection