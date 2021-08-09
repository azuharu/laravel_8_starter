@extends('layouts.auth')

@section('content')

<div class="bg-light min-vh-100 d-flex flex-row align-items-center">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card mb-4 mx-4">
                    <div class="card-body p-4">

                        <form method="POST" action="{{ route('password.email') }}">
                            @csrf
                            <h1>{{ __('Forgot Password') }}</h1>
                            <p class="text-medium-emphasis">{{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}</p>


                            <!-- Session Status -->
                            <x-auth-session-status class="mb-4 text-danger" :status="session('status')" />

                            <!-- Validation Errors -->
                            <x-auth-validation-errors class="mb-4 text-danger" :errors="$errors" />

                            <div class="input-group mb-3"><span class="input-group-text">
                                    <svg class="icon">
                                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-envelope-open"></use>
                                    </svg></span>
                                <input class="form-control" type="text" placeholder="{{ __('E-Mail Address') }}" name="email" value="{{ old('email') }}" required autofocus>
                            </div>
                            
                            <button class="btn btn-block btn-success" type="submit">{{ __('Email Password Reset Link') }}</button>
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