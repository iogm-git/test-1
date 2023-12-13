@extends('main-layout')

@section('content')
    @if (session()->has('success'))
        @include('components.modal')
    @endif
    <section class="user__container content-wrapper">
        <h1 class="section-title">User Data</h1>
        <a href="/user/create" class="button bg-text-alt">Add User</a>
        <table>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Departement</th>
                    <th>Input By</th>
                    <th>Input Date</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $item)
                    <tr>
                        <td>{{ $item->user_id }}</td>
                        <td>{{ $item->user_name }}</td>
                        <td>{{ $item->departement }}</td>
                        <td>{{ $item->input_by }}</td>
                        <td>{{ $item->input_date }}</td>
                        <td class="table-action">
                            <form action="{{ route('user.destroy', $item->user_id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="button bg-text-danger">Delete</button>
                            </form>
                            <a class="button bg-text-warning" href="{{ route('user.edit', $item->user_id) }}">Edit User</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </section>
@endsection
