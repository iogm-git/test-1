@extends('main-layout')

@section('content')
    <section class="create__container content-wrapper">
        <h1 class="section-title">Edit <span class="text-alt">Salesman</span></h1>
        <form action="/salesman/{{ $salesman->salesman_id }}" method="post">
            @csrf
            @method('PUT')
            <fieldset>
                <legend><label for="sales_person">Sales Person</label></legend>
                <input type="text" name="sales_person" id="sales_person" placeholder="..."
                    value="{{ $salesman->sales_person }}">
                @error('sales_person')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </fieldset>
            <fieldset>
                <legend><label for="alamat">Alamat</label></legend>
                <input type="text" name="alamat" id="alamat" placeholder="..." value="{{ $salesman->alamat }}">
                @error('alamat')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </fieldset>
            <br>
            <button type="submit" class="button bg-text-alt">Edit</button><br>
            <a class="button bg-text-danger" href="{{ URL::previous() }}">Cancel</a>
        </form>
    </section>
@endsection
