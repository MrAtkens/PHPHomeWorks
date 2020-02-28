@extends('layouts.bootstrap')

@section('content')
    <h1>Products</h1>
    <div class="card-deck">
        @foreach($products ?? [] as $product)
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

        @endforeach
    </div>


@endsection