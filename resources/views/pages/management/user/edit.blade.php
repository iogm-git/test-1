@extends('main-layout')

@section('content')
    <section class="edit__container content-wrapper">
        <h1 class="section-title">Edit <span class="text-alt">User</span></h1>
        <form action="/user/{{ $user->user_id }}" method="post">
            @csrf
            @method('put')
            <fieldset>
                <legend><label for="user_name">Name</label></legend>
                <input type="text" name="user_name" id="user_name" placeholder="..." value="{{ $user->user_id }}">
                @error('user_name')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </fieldset>
            <fieldset>
                <legend><label for="departement">Departement</label></legend>
                <input type="text" name="departement" id="departement" placeholder="..." value="{{ $user->user_id }}">
                @error('departement')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </fieldset>
            <br>
            <button type="submit" class="button bg-text-alt">Edit</button>
            <br>
            <a class="button bg-text-danger" href="{{ URL::previous() }}">Cancel</a>
        </form>
    </section>
@endsection
