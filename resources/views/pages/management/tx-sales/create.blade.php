@extends('main-layout')

@section('content')
    <section class="create__container content-wrapper">
        <h1 class="section-title">Add <span class="text-alt">Data</span></h1>
        <form action="/tx-sales" method="post">
            @csrf
            <fieldset>
                <legend><label for="sales_id">Sales Id</label></legend>
                <input type="text" name="sales_id" id="sales_id" placeholder="...">
                @error('sales_id')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </fieldset>
            <fieldset>
                <legend><label for="sales_no">Sales No</label></legend>
                <input type="text" name="sales_no" id="sales_no" placeholder="...">
                @error('sales_no')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </fieldset>
            <fieldset>
                <legend><label for="customer_id">Customer Id</label></legend>
                <select name="customer_id" id="customer_id">
                    <option value="">--Choise--</option>
                    @foreach ($customer as $item)
                        <option value="{{ $item->customer_id }}">{{ $item->customer_name }}
                        </option>
                    @endforeach
                </select>
                @error('customer_id')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </fieldset>
            <fieldset>
                <legend><label for="salesman_id">Salesman Id</label></legend>
                <select name="salesman_id" id="salesman_id">
                    <option value="">--Choise--</option>
                    @foreach ($salesman as $item)
                        <option value="{{ $item->salesman_id }}">{{ $item->sales_person }}
                        </option>
                    @endforeach
                </select>
                @error('salesman_id')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </fieldset>
            <br>
            <button type="submit" class="button bg-text-alt">Add</button><br>
            <a class="button bg-text-danger" href="{{ URL::previous() }}">Cancel</a>
        </form>
    </section>
@endsection
