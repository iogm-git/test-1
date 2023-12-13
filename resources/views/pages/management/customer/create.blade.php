@extends('main-layout')

@section('content')
    <section class="create__container content-wrapper">
        <h1 class="section-title">Add <span class="text-alt">Customer</span></h1>
        <form action="/customer" method="post">
            @csrf
            <fieldset>
                <legend><label for="customer_id">Customer Id</label></legend>
                <input type="text" name="customer_id" id="customer_id" placeholder="...">
                @error('customer_id')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </fieldset>
            <fieldset>
                <legend><label for="customer_name">Customer Name</label></legend>
                <input type="text" name="customer_name" id="customer_name" placeholder="...">
                @error('customer_name')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </fieldset>
            <fieldset>
                <legend><label for="address">Address</label></legend>
                <input type="text" name="address" id="address" placeholder="...">
                @error('address')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </fieldset>
            <fieldset>
                <legend><label for="nick_name">Nick Name</label></legend>
                <input type="text" name="nick_name" id="nick_name" placeholder="...">
                @error('nick_name')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </fieldset>
            <br>
            <button type="submit" class="button bg-text-alt">Add</button><br>
            <a class="button bg-text-danger" href="{{ URL::previous() }}">Cancel</a>
        </form>
    </section>
@endsection
