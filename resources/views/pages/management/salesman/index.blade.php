@extends('main-layout')

@section('content')
    @if (session()->has('success'))
        @include('components.modal')
    @endif
    <section class="salesman__container content-wrapper">
        <h1 class="section-title">Salesman Data</h1>
        <a href="/salesman/create" class="button bg-text-alt">Add Salesman</a>
        <table>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Person</th>
                    <th>Alamat</th>
                    <th>Input By</th>
                    <th>Input Date</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $salesman)
                    <tr>
                        <td>{{ $salesman->salesman_id }}</td>
                        <td>{{ $salesman->sales_person }}</td>
                        <td>{{ $salesman->alamat }}</td>
                        <td>{{ $salesman->input_by }}</td>
                        <td>{{ $salesman->input_date }}</td>
                        <td class="table-action">
                            <form action="{{ route('salesman.destroy', $salesman->salesman_id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="button bg-text-danger">Delete</button>
                            </form>
                            <a class="button bg-text-warning"
                                href="{{ route('salesman.edit', $salesman->salesman_id) }}">Edit salesman</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </section>
@endsection
