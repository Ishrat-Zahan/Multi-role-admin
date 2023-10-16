@extends('layouts.guest')

@section('page')
<div class="container">
    <div class="row justify-content-center">

        <div>

            <h2 style="color: #6f42c1;" class="text-center mt-3 mb-3">{{ __('Login') }}</h2>

            <hr>

            <div class="">
                <!-- Session Status -->
                <x-auth-session-status class="mb-4" :status="session('status')" />

                <form style="padding: 12px;" method="POST" action="{{ route('login') }}">
                    @csrf

                    <!-- Email Address -->
                    <div class="form-group">
                        <label class="form-label" for="email">{{ __('Email') }}</label>
                        <input id="email" class="form-control py-2" style="font-size: 16px;" type="email" name="email" :value="old('email')" required autofocus autocomplete="username">
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <!-- Password -->
                    <div class="form-group mt-3">
                        <label class="form-label" for="password">{{ __('Password') }}</label>
                        <input id="password" class="form-control py-2" style="font-size: 16px;" type="password" name="password" required autocomplete="current-password">
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <!-- Remember Me -->
                    <div class="form-check mt-4">
                        <input id="remember_me" class="form-check-input" type="checkbox" name="remember">
                        <label class="form-check-label" for="remember_me" style="font-size: 16px;">{{ __('Remember me') }}</label>
                    </div>

                    <div class="form-group row mt-4">
                        <div class="col-md-6">
                            @if (Route::has('password.request'))
                            <a style="color: #6f42c1;" class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('Forgot your password?') }}
                            </a>
                            @endif
                        </div>
                        <div class="col-md-6">
                            <button style="background-color: #6f42c1; color:white" type="submit" class=" btn btn-primary btn-block py-2" style="font-size: 16px;">{{ __('Log in') }}</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
</div>
@endsection