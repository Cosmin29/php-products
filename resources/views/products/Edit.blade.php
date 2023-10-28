@extends('products.layout')

@section('content')
<div class="row" styles="margin-top:10rem">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left" style="text-align:center">
            <h2>Edit Data</h2>
        </div>
        <div class="pull-left">
            <a class="back-btn-edit" href="{{ route('products.index') }}" >Back</a>
        </div>
    </div>
</div>


<form method="POST" action="{{ route('products.update', $product->id) }}">
    @csrf
    @method('PATCH')
    <label for="name">Product Name:</label>
    <input type="text" id="name" name="name" value="{{ $product->name }}">
    <label for="category_id">Category:</label>
    <select id="category_id" name="category_id">
        @foreach ($categories as $category)
            <option value="{{ $category->id }}" @if($category->id == $product->category_id) selected @endif>{{ $category->name }}</option>
        @endforeach
    </select>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="submit-btn ">Save</button>
        </div>
</form>

@endsection
