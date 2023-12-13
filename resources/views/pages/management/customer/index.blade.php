@extends('main-layout')

@section('content')
    @if (session()->has('success'))
        @include('components.modal')
    @endif
    <section class="customer__container content-wrapper">
        <h1 class="section-title">Customer Data</h1>
        <a href="/customer/create" class="button bg-text-alt">Add Customer</a>
        <table>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Address</th>
                    <th>Nick Name</th>
                    <th>Input By</th>
                    <th>Input Date</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $customer)
                    <tr>
                        <td>{{ $customer->customer_id }}</td>
                        <td>{{ $customer->customer_name }}</td>
                        <td>{{ $customer->address }}</td>
                        <td>{{ $customer->nick_name }}</td>
                        <td>{{ $customer->input_by }}</td>
                        <td>{{ $customer->input_date }}</td>
                        <td class="table-action">
                            <form action="{{ route('customer.destroy', $customer->customer_id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="button bg-text-danger">Delete</button>
                            </form>
                            <a class="button bg-text-warning"
                                href="{{ route('customer.edit', $customer->customer_id) }}">Edit customer</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </section>
@endsection
