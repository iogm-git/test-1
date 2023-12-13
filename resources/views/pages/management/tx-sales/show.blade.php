@extends('main-layout')

@section('content')
    <section class="show__container content-wrapper">
        <h1 class="section-title">Show <span class="text-alt">TX Sales</span></h1>
        <div class="show__card">
            <div class="show__key">Sales Id</div>
            <div class="show_value">: {{ $tx_sales->sales_id }}</div>
            <div class="show__key">Sales No</div>
            <div class="show_value">: {{ $tx_sales->sales_no }}</div>
            <div class="show__key">Customer Name</div>
            <div class="show__value">: {{ $tx_sales->customer[0]->customer_name }}</div>
            <div class="show__key">Customer Address</div>
            <div class="show__value">: {{ $tx_sales->customer[0]->address }}</div>
            <div class="show__key">Salesman Name</div>
            <div class="show__value">: {{ $tx_sales->salesman[0]->sales_person }}</div>
            <div class="show__key">Salesman Address</div>
            <div class="show__value">: {{ $tx_sales->salesman[0]->alamat }}</div>
            <div class="show__key">Create By</div>
            <div class="show_value">: {{ $tx_sales->create_by }}</div>
        </div>
        <a class="button bg-text-warning" href="{{ URL::previous() }}">Back</a>
    </section>
@endsection
