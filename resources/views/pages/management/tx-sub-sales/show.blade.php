@extends('main-layout')
@section('content')
    <section class="show__container content-wrapper">
        <h1 class="section-title">Show <span class="text-alt">TX Sub Sales</span></h1>
        <div class="show__card">
            <div class="show__key">Sales Id</div>
            <div class="show_value">: {{ $tx_sub_sales->sales_id }}</div>
            <div class="show__key">Sales No</div>
            <div class="show_value">: {{ $tx_sub_sales->tx_sales[0]->sales_no }}</div>
            <div class="show__key">Customer Name</div>
            <div class="show__value">: {{ $tx_sub_sales->tx_sales[0]->customer[0]->customer_name }}</div>
            <div class="show__key">Customer Address</div>
            <div class="show__value">: {{ $tx_sub_sales->tx_sales[0]->customer[0]->address }}</div>
            <div class="show__key">Salesman Name</div>
            <div class="show__value">: {{ $tx_sub_sales->tx_sales[0]->salesman[0]->sales_person }}</div>
            <div class="show__key">Salesman Address</div>
            <div class="show__value">: {{ $tx_sub_sales->tx_sales[0]->salesman[0]->alamat }}</div>
            <div class="show__key">Item Name</div>
            <div class="show_value">: {{ $tx_sub_sales->item[0]->item_name }}</div>
            <div class="show__key">Item Category</div>
            <div class="show_value">: {{ $tx_sub_sales->item[0]->category }}</div>
            <div class="show__key">Quantity Sales</div>
            <div class="show_value">: {{ $tx_sub_sales->qty_sales }}</div>
            <div class="show__key">Unit Price</div>
            <div class="show_value">: {{ $tx_sub_sales->unit_price }}</div>
        </div>
        <a class="button bg-text-warning" href="{{ URL::previous() }}">Back</a>
    </section>
@endsection
