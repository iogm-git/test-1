@extends('main-layout')

@section('content')
    <section class="login__container content-wrapper">
        <h1 class="section-title">Login</h1>
        <form class="login__form" action="login" method="POST">
            @csrf

            <div class="login__heading">
                <img class="login__img__svg" src="{{ asset('assets/img') }}/login-img.svg" alt="">
            </div>
            <div class="login__input">
                @if (session()->has('error'))
                    <p class="text-danger">{{ session()->get('error') }}</p>
                @endif
                <fieldset>
                    <legend><label for="user_id">Username</label></legend>
                    <input type="text" name="user_id" id="user_id" placeholder="...">
                    @error('user_id')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </fieldset>

                <fieldset>
                    <legend><label for="password">Password</label></legend>
                    <input type="text" name="password" id="password" placeholder="...">
                    @error('password')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </fieldset>
                <br>
                <button class="button bg-text-theme" type="submit">Login</button>
            </div>
        </form>
    </section>
@endsection
