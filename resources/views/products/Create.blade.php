@extends('products.layout')

@section('content')
<div class="row" styles="margin-top:10rem">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <a class="back-btn-edit" href="{{ route('products.index') }}" >Back</a>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-12 margin-tb"></div>
    <div class="pull-left">
        <h2>Add New Product</h2>
    </div>
</div>

@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="POST" action="{{ route('products.store') }}">
    @csrf
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <label for="name">Product Name:</label>
            <input type="text" id="name" name="name" placeholder="name">
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <label for="category_id">Category:</label>
            <select id="category_id" name="category_id">
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>

        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
        <button type="submit" class="submit-btn">Submit</button>
    </div>
    
</form>

@endsection