@extends('auth.include.layout')

@section('title_page', 'Connexion')

@section('content')

    <div id="login-Page-left">
        <div id="login-Page-101">
            <div id="centered-bloc">
                <h3 class="text-center">Login</h3>

                <form  action="{{ route('verifyLogin') }}" method="post">
                    @csrf

                    <div class="a-input-group">
                        <input class="a-input a-verify-email" id="email" placeholder="Dupont" name="email" type="text" data-name="email" value="{{ old('email') ? old('email') : 'thibault.delavoux@gmail.com' }}">
                        <label for="email">Email</label>
                    </div>

                    <div class="a-input-group">
                        <input id="password" placeholder="******" name="password" type="password" class="a-input a-verify-text" data-name="Password">
                        <label for="password">Password</label>
                    </div>

                    <div class="">
                        <button type="submit" class="a-btn a-full-primary w-100 a-form-handler">Login <i class="fas fa-arrow-right"></i></button>
                    </div>

                    <div class="">
                        <p class="a-text-light text-center w-100 mt-1">Pas encore de compte ? Créez en un <a href="{{ route('register') }}" class="login-link">ici</a></p>
                    </div>
                </form>	
            </div>
        </div>
    </div>
    <div id="login-Page-right"></div>

@stop
