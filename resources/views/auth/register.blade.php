@extends('layouts.guest')
@section('page')

<div class="container">
    <div class="row justify-content-center">
      
            <div class="">
                <h2 style="color: #6f42c1;" class="text-center mt-2 mb-3">{{ __('Register') }}</h2>
                <hr>

                <div class="mt-3">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <!-- Name -->
                        <div class="form-group">
                            <label class="form-label" for="name">{{ __('Name') }}</label>
                            <input id="name" class="form-control" type="text" name="name" :value="old('name')" required autofocus autocomplete="name">
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div>

                        <!-- Email Address -->
                        <div class="form-group mt-4">
                            <label class="form-label" for="email">{{ __('Email') }}</label>
                            <input id="email" class="form-control" type="email" name="email" :value="old('email')" required autocomplete="username">
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>

                        <!-- Password -->
                        <div class="form-group mt-4">
                            <label class="form-label" for="password">{{ __('Password') }}</label>
                            <input id="password" class="form-control" type="password" name="password" required autocomplete="new-password">
                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        </div>

                        <!-- Confirm Password -->
                        <div class="form-group mt-4">
                            <label class="form-label" for="password_confirmation">{{ __('Confirm Password') }}</label>
                            <input id="password_confirmation" class="form-control" type="password" name="password_confirmation" required autocomplete="new-password">
                            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                        </div>

                        <div class="form-group row mt-4">
                            <div class="col-md-6">
                                <a style="color: #6f42c1;" class="btn btn-link" href="{{ route('login') }}">
                                    {{ __('Already registered?') }}
                                </a>
                            </div>
                            <div class="col-md-6 text-md-right">
                                <button style="background-color: #6f42c1; color:white" type="submit" class="btn btn-primary">{{ __('Register') }}</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
       
    </div>
</div>

@endsection
