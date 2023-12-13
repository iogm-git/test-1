@extends('main-layout')

@section('content')
    <section class="create__container content-wrapper">
        <h1 class="section-title">Add <span class="text-alt">Salesman</span></h1>
        <form action="/salesman" method="post">
            @csrf
            <fieldset>
                <legend><label for="salesman_id">Salesman Id</label></legend>
                <input type="text" name="salesman_id" id="salesman_id" placeholder="...">
                @error('salesman_id')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </fieldset>
            <fieldset>
                <legend><label for="sales_person">Sales Person</label></legend>
                <input type="text" name="sales_person" id="sales_person" placeholder="...">
                @error('sales_person')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </fieldset>
            <fieldset>
                <legend><label for="alamat">Alamat</label></legend>
                <input type="text" name="alamat" id="alamat" placeholder="...">
                @error('alamat')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </fieldset>
            <br>
            <button type="submit" class="button bg-text-alt">Add</button><br>
            <a class="button bg-text-danger" href="{{ URL::previous() }}">Cancel</a>
        </form>
    </section>
@endsection
