@extends('products.layout')

@section('content')

<div class="pull-left">
    <h2>Content CRUD</h2>
</div>

@if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
@endif
    
<table class="table table-bordered">
    <thead>
        <tr>
            <th>Product Name</th>
            <th>Category</th>
            <th>Actions</th>
        </tr>
    </thead>

    <tbody>
        @foreach ($products as $product)
        <tr>
            <td>{{ $product->name }}</td>
            <td>{{ $product->category->name }}</td>
            <td>
                <div class="col-lg-12 margin-tb">
                    <a class="btn btn-info" href="{{ route('products.show', $product->id) }}" style="font-size:50%"><x-bx-show />Show</a></a>
                    <a class="btn btn-primary" href="{{ route('products.edit', $product->id) }}" style="font-size:50%"><x-feathericon-edit />Edit</a>
                </div>
                
                <form action="{{ route('products.destroy', $product->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" style="font-size:50%"><x-heroicon-s-trash />Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="success-btn">
                <a class="btn btn-success" href="{{ route('products.create') }}">Add new product</a>
            </div>
        </div>
</div>



@endsection