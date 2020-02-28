@extends('layouts.bootstrap')

@section('content')

    @if($errors->any())
        @foreach($errors->all() as $error)
            <div class="alert alert-danger md-3">
                {{$error}}
            </div>
        @endforeach
    @endif
<form action="{{ $action ?? route('product.store') }}" method="POST">
    @csrf
    @if($method ?? false)
        @method($method)
    @endif
    <div class="form-group">
        <input type="text" class="form-control" placeholder="Название" name="name" value="{{$product->name ?? ''}}" required>
    </div>
    <div class="form-group">
        <textarea rows="10" placeholder="Описание" name="description" class="form-control" required> {{$product->description ?? ''}}</textarea>
    </div>
    <div class="form-group">
        <input type="text" class="form-control" placeholder="Ссылка на картинку" name="image_url" value="{{$product->image_url ?? ''}}" required>
    </div>
    <div class="form-group">
        <input type="text" class="form-control" placeholder="Производитель" name="company_name" value="{{$product->company_name ?? ''}}" required>
    </div>
    <div class="form-group">
        <input type="text" class="form-control" placeholder="Категорий" name="categories" value="{{$product->categories ?? ''}}" required>
    </div>
    <div class="form-group">
        <input type="number" class="form-control" placeholder="Количество товара" name="count" value="{{$product->count ?? ''}}" required>
    </div>
    <div class="form-group">
        <input type="number" class="form-control" placeholder="Цена в тг" name="price" value="{{$product->price ?? ''}}" required>
    </div>
    <div class="form-group">
        <select name="rating" class="form-control">
            @for($i = 1; $i <= 5; $i++)
                <option value="{{$i}}" {{ ($product->rating ?? 0) == $i ? 'selected' : '' }}>{{$i}}</option>
            @endfor
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Сохранить</button>
</form>

@endsection
