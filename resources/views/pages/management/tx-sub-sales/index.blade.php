@extends('main-layout')

@section('content')
    @if (session()->has('success'))
        @include('components.modal')
    @endif
    <section class="customer__container content-wrapper">
        <h1 class="section-title">TX Sub Sales Data</h1>
        <a href="/tx-sales/create" class="button bg-text-alt">Add Data</a>
        <table>
            <thead>
                <tr>
                    <th>Sales Id</th>
                    <th>Item Id</th>
                    <th>QTY Sales</th>
                    <th>Unit Price</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $item)
                    <tr>
                        <td>{{ $item->tx_sales[0]->sales_id }}</td>
                        <td>{{ $item->item[0]->item_id }}</td>
                        <td>{{ $item->qty_sales }}</td>
                        <td>{{ $item->unit_price }}</td>
                        <td class="table-action">
                            <form action="{{ route('tx-sub-sales.destroy', $item->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="button bg-text-danger">Delete</button>
                            </form>
                            <a class="button bg-text-theme" href="{{ route('tx-sub-sales.show', $item->id) }}">Details</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </section>
@endsection
