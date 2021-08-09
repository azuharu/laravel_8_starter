@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-sm-12 col-lg-12">

        <div class="card mb-4">
            <div class="card-header">
                <i class="fa fa-align-justify"></i> {{ __('Edit') }}: {{ $user->name }}
            </div>
            <div class="card-body">

                @if ($errors->any())
                <div class="alert alert-danger" role="alert">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

                <form method="POST" action="{{ route('user.update', $user->id) }}">
                    @csrf
                    {{ method_field('PUT') }}

                    <div class="mb-3">
                        <label class="form-label" for="user_name">Name</label>
                        <input class="form-control" id="user_name" type="text" name="name" value="{{ $user->name }}" placeholder="{{ __('Name') }}" required autofocus>
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="user_email">Email Address</label>
                        <input class="form-control" id="user_email" type="email" name="email" value="{{ $user->email }}" placeholder="{{ __('Email Address') }}" required readonly>
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="user_password">Password</label>
                        <input class="form-control" id="user_password" type="password" name="password" value="" placeholder="{{ __('Password') }}" required>
                    </div>



                    <button class="btn btn-success" type="submit">{{ __('Save') }}</button>
                    <a href="{{ route('user.index') }}" class="btn btn-warning">{{ __('Cancel') }}</a>
                </form>
            </div>
        </div>

    </div>

</div>

@endsection