@extends('main-layout')

@section('content')
    @if (session()->has('success'))
        @include('components.modal')
    @endif
    <section class="item__container content-wrapper">
        <h1 class="section-title">Item Data</h1>
        <a href="/item/create" class="button bg-text-alt">Add Item</a>
        <table>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Category</th>
                    <th>Input By</th>
                    <th>Input Date</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $item)
                    <tr>
                        <td>{{ $item->item_id }}</td>
                        <td>{{ $item->item_name }}</td>
                        <td>{{ $item->category }}</td>
                        <td>{{ $item->input_by }}</td>
                        <td>{{ $item->input_date }}</td>
                        <td class="table-action">
                            <form action="{{ route('item.destroy', $item->item_id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="button bg-text-danger">Delete</button>
                            </form>
                            <a class="button bg-text-warning" href="{{ route('item.edit', $item->item_id) }}">Edit Item</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </section>
@endsection
