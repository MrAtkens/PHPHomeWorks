@extends('layouts.bootstrap')

@section('content')

    <div class="mb-3">
        <form action="{{route('product.destroy', [$product])}}" method="post">
            @csrf
            @method('DELETE')
            <a href="{{route('product.edit', [$product])}}" class="btn btn-info">
                Edit
            </a>
            <button type="submit" class="btn btn-danger">
                Delete
            </button>
        </form>
    </div>
    @component('components.card', [
            'name' => $product->name,
            'image_url' => $product->image_url,
            'price' => $product->price,
            'description' => $product->description,
            'company_name' => $product->company_name,
            'rating' => $product->rating,
            'categories' => explode(",", $product->categories),
            'count' => $product->count,
            'product' => $product
            ])
    @endcomponent
@endsection
