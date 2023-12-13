@extends('main-layout')

@section('content')
    <section class="create__container content-wrapper">
        <h1 class="section-title">Add <span class="text-alt">Item</span></h1>
        <form action="/item" method="post">
            @csrf
            <fieldset>
                <legend><label for="item_id">Item Id</label></legend>
                <input type="text" name="item_id" id="item_id" placeholder="...">
                @error('item_id')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </fieldset>
            <fieldset>
                <legend><label for="item_name">Name</label></legend>
                <input type="text" name="item_name" id="item_name" placeholder="...">
                @error('item_name')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </fieldset>
            <fieldset>
                <legend><label for="category">Category</label></legend>
                <input type="text" name="category" id="category" placeholder="...">
                @error('category')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </fieldset>
            <br>
            <button type="submit" class="button bg-text-alt">Add</button><br>
            <a class="button bg-text-danger" href="{{ URL::previous() }}">Cancel</a>
        </form>
    </section>
@endsection
