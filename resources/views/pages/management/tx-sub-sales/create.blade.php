@extends('main-layout')

@section('content')
    <section class="create__container content-wrapper">
        <h1 class="section-title">Add <span class="text-alt">Data</span></h1>
        <form action="/tx-sub-sales" method="post">
            @csrf
            <fieldset>
                <legend><label for="sales_id">TX Sales</label></legend>
                <select name="sales_id" id="sales_id">
                    <option value="">--Choise--</option>
                    @foreach ($tx_sales as $item)
                        <option value="{{ $item->sales_id }}">{{ $item->sales_no }}
                        </option>
                    @endforeach
                </select>
                @error('sales_id')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </fieldset>
            <fieldset>
                <legend><label for="item_id">Item</label></legend>
                <select name="item_id" id="item_id">
                    <option value="">--Choise--</option>
                    @foreach ($ms_item as $item)
                        <option value="{{ $item->item_id }}">{{ $item->item_name }}
                        </option>
                    @endforeach
                </select>
                @error('item_id')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </fieldset>
            <fieldset>
                <legend><label for="qty_sales">QTY Sales</label></legend>
                <input type="number" name="qty_sales" id="qty_sales" placeholder="...">
                @error('qty_sales')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </fieldset>
            <fieldset>
                <legend><label for="unit_price">Unit Price</label></legend>
                <input type="number" name="unit_price" id="unit_price" placeholder="...">
                @error('unit_price')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </fieldset>
            <br>
            <button type="submit" class="button bg-text-alt">Add</button><br>
            <a class="button bg-text-danger" href="{{ URL::previous() }}">Cancel</a>
        </form>
    </section>
@endsection
