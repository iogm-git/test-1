@extends('main-layout')

@section('content')
    <section class="edit__container content-wrapper">
        <h1 class="section-title">Edit <span class="text-alt">Item</span></h1>
        <form action="/item/{{ $item->item_id }}" method="post">
            @csrf
            @method('put')
            <fieldset>
                <legend><label for="item_name">Name</label></legend>
                <input type="text" name="item_name" id="item_name" placeholder="..." value="{{ $item->item_name }}">
                @error('item_name')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </fieldset>
            <fieldset>
                <legend><label for="category">Category</label></legend>
                <input type="text" name="category" id="category" placeholder="..." value="{{ $item->category }}">
                @error('category')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </fieldset>
            <br>
            <button type="submit" class="button bg-text-alt">Edit</button><br>
            <a class="button bg-text-danger" href="{{ URL::previous() }}">Cancel</a>
        </form>
    </section>
@endsection
