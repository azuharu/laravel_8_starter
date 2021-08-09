@extends('layouts.auth')

@section('content')

<div class="bg-light min-vh-100 d-flex flex-row align-items-center">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card-group d-block d-md-flex row">
                    <div class="card col-md-7 p-4 mb-0">
                        <div class="card-body">
                            <h1>Login</h1>
                            <p class="text-medium-emphasis">Sign In to your account</p>
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="input-group mb-3 has-validation"><span class="input-group-text">
                                        <svg class="icon">
                                            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-user"></use>
                                        </svg></span>
                                    <input class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" type="text" placeholder="{{ __('E-Mail Address') }}" name="email" value="{{ old('email') }}" required autofocus>
                                    @if ($errors->has('email'))
                                    <div class="invalid-feedback">{{ $errors->first('email') }}</div>
                                    @endif
                                </div>
                                <div class="input-group mb-4 has-validation"><span class="input-group-text">
                                        <svg class="icon">
                                            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-lock-locked"></use>
                                        </svg></span>
                                    <input class="form-control {{ $errors->has('is-invalid') ? 'has-error' : '' }}" type="password" placeholder="{{ __('Password') }}" name="password" required>
                                    @if ($errors->has('password'))
                                    <div class="invalid-feedback">{{ $errors->first('email') }}</div>
                                    @endif
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <button class="btn btn-primary px-4" type="submit">{{ __('Login') }}</button>
                                    </div>
                                    <div class="col-6 text-end">
                                        <a href="{{ route('password.request') }}" class="btn btn-link px-0">{{ __('Forgot Your Password?') }}</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="card col-md-5 text-white bg-primary py-5">
                        <div class="card-body text-center">
                            <div>
                                <h2>Sign up</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                @if (Route::has('password.request'))
                                <a href="{{ route('register') }}" class="btn btn-primary active mt-3">{{ __('Register') }}</a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('javascript')

@endsection