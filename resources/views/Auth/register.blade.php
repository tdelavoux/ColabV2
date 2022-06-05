@extends('auth.include.layout')

@section('title_page', 'Inscription')

@section('content')

<div id="login-Page-left">
    <div id="login-Page-101">
        <div id="centered-bloc">
            <h3 class="text-center">Sign In</h3>
            <form  action="{{ route('createUser') }} " method="post">
                @csrf

                <div class="a-input-group">
                    <input class="a-input a-verify-text" id="Nom" placeholder="Dupont" name="name" type="text" data-name="name" value="{{ old('name') }}">
                    <label for="Nom">Name</label>
                </div>

                <div class="a-input-group">
                    <input class="a-input a-verify-email" id="email" placeholder="pierre.dupont@gmail.com" name="email" type="email" data-name="Email" value="{{ old('email') }}">
                    <label for="email">Email</label>
                </div>

                <div class="a-input-group">
                    <input id="password" placeholder="******" name="password" type="password" class="a-input a-verify-text" data-name="password">
                    <label for="password">Password</label>
                </div>

                <div class="a-input-group">
                    <input id="password_confirmation" placeholder="******" name="password_confirmation" type="password" class="a-input a-verify-text" data-name="confirm password">
                    <label for="password_confirmation">Confirm password</label>
                </div>

                <div class="">
                    <button type="submit" class="a-btn a-full-primary w-100 a-form-handler">Sign in <i class="fas fa-arrow-right"></i></button>
                </div>

                <div class="">
                    <p class="a-text-light text-center w-100 mt-1">Already have an account ? <a href="{{ route('login') }}" class="login-link">Login</a></p>
                </div>

            </form>	
        </div>
    </div>
</div>

<div id="inscription-Page-right"></div>
@stop