@extends('main-layout')

@section('content')
    <section class="create__container content-wrapper">
        <h1 class="section-title">Add <span class="text-alt">User</span></h1>
        <form action="/user" method="post">
            @csrf
            <fieldset>
                <legend><label for="user_id">User Id</label></legend>
                <input type="text" name="user_id" id="user_id" placeholder="...">
                @error('user_id')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </fieldset>
            <fieldset>
                <legend><label for="user_name">Name</label></legend>
                <input type="text" name="user_name" id="user_name" placeholder="...">
                @error('user_name')
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
            <fieldset>
                <legend><label for="departement">Departement</label></legend>
                <input type="text" name="departement" id="departement" placeholder="...">
                @error('departement')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </fieldset>
            <br>
            <button type="submit" class="button bg-text-alt">Add</button><br>
            <a class="button bg-text-danger" href="{{ URL::previous() }}">Cancel</a>
        </form>
    </section>
@endsection
