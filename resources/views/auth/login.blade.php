@extends('layouts.app')

@section('content')
<div class="container">
    <div class="auth-body">
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="auth_form mb-3">
                    <label for="email">{{ __('Email Address') }}</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="auth_form mb-3">
                    <label for="password">{{ __('Password') }}</label>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                </div>

                <div class="auth_form mb-3">
                   <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                   <label class="form-check-label remember" for="remember">
                        {{ __('Remember Me') }}
                    </label>
                </div>

                    <button type="submit" class="btn auth_btn">
                        {{ __('Login') }}
                    </button>

                        {{-- @if (Route::has('password.request'))
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif --}}
    
                <a href="{{ route('register') }}" class="next_page mt-3">New to Eshop? Create an account</a>
            </form>
    </div>
</div>
@endsection
