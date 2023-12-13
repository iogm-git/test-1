@extends('main-layout')

@section('content')
    @if (session()->has('success'))
        @include('components.modal')
    @endif
    <section class="customer__container content-wrapper">
        <h1 class="section-title">TX Sales Data</h1>
        <a href="/tx-sales/create" class="button bg-text-alt">Add Data</a>
        <table>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Sales No</th>
                    <th>Customer Id</th>
                    <th>Salesman Id</th>
                    <th>Create By</th>
                    <th>Input Date</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $item)
                    <tr>
                        <td>{{ $item->sales_id }}</td>
                        <td>{{ $item->sales_no }}</td>
                        <td>{{ $item->customer_id }}</td>
                        <td>{{ $item->salesman_id }}</td>
                        <td>{{ $item->create_by }}</td>
                        <td>{{ $item->input_date }}</td>
                        <td class="table-action">
                            <form action="{{ route('tx-sales.destroy', $item->sales_id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="button bg-text-danger">Delete</button>
                            </form>
                            <a class="button bg-text-theme" href="{{ route('tx-sales.show', $item->sales_id) }}">Details</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </section>
@endsection
