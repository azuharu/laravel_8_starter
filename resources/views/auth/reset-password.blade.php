@extends('layouts.auth')

@section('content')

<div class="bg-light min-vh-100 d-flex flex-row align-items-center">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card mb-4 mx-4">
                    <div class="card-body p-4">

                        <form method="POST" action="{{ route('password.update') }}">
                            @csrf
                            <h1>{{ __('Reset Password') }}</h1>
                            <p class="text-medium-emphasis">Reset your password</p>

                            @if ($errors->any())
                            <div class="alert alert-danger" role="alert">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif

                            <input type="hidden" name="token" value="{{ $request->route('token') }}">

                            <div class="input-group mb-3"><span class="input-group-text">
                                    <svg class="icon">
                                        <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-envelope-open') }}"></use>
                                    </svg></span>
                                <input class="form-control" type="text" placeholder="{{ __('E-Mail Address') }}" name="email" value="{{ old('email') }}" required autofocus>
                            </div>
                            <div class="input-group mb-3"><span class="input-group-text">
                                    <svg class="icon">
                                        <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-lock-locked') }}"></use>
                                    </svg></span>
                                <input class="form-control" type="password" placeholder="{{ __('Password') }}" name="password" required>
                            </div>
                            <div class="input-group mb-4"><span class="input-group-text">
                                    <svg class="icon">
                                        <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-lock-locked') }}"></use>
                                    </svg></span>
                                <input class="form-control" type="password" placeholder="{{ __('Confirm Password') }}" name="password_confirmation" required>
                            </div>
                            <button class="btn btn-block btn-success" type="submit">{{ __('Reset Password') }}</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('javascript')

@endsection