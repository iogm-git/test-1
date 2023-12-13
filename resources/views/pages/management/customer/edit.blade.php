@extends('main-layout')

@section('content')
    <section class="create__container content-wrapper">
        <h1 class="section-title">Edit <span class="text-alt">Customer</span></h1>
        <form action="/customer/{{ $customer->customer_id }}" method="post">
            @csrf
            @method('PUT')
            <fieldset>
                <legend><label for="customer_name">Customer Name</label></legend>
                <input type="text" name="customer_name" id="customer_name" placeholder="..."
                    value="{{ $customer->customer_name }}">
                @error('customer_name')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </fieldset>
            <fieldset>
                <legend><label for="address">Address</label></legend>
                <input type="text" name="address" id="address" placeholder="..." value="{{ $customer->address }}">
                @error('address')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </fieldset>
            <fieldset>
                <legend><label for="nick_name">Nick Name</label></legend>
                <input type="text" name="nick_name" id="nick_name" placeholder="..." value="{{ $customer->nick_name }}">
                @error('nick_name')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </fieldset>
            <br>
            <button type="submit" class="button bg-text-alt">Edit</button><br>
            <a class="button bg-text-danger" href="{{ URL::previous() }}">Cancel</a>
        </form>
    </section>
@endsection
