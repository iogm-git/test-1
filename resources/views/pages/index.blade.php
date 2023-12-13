@extends('main-layout')

@section('content')
    @auth
        <section class="index__container content-wrapper">
            <h1 class="section-title">Welcome <span class="text-theme">{{ auth()->user()->user_id }}</span></h1>
            <div class="index__box">
                <h2 class="section-title"></h2>
            </div>
        </section>
    @else
        <section class="index__container content-wrapper">
            <h1 class="section-title">Silahkan login dahulu</h1>
            <img class="index__pic__login" src="{{ asset('assets/img') }}/login-img.svg" alt="">
        </section>
    @endauth
@endsection
