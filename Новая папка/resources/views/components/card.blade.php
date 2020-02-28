<div class="card">
    <img class="card-img-top" src="{{$image_url ?? ''}}" alt="Photo">
    <div class="card-body">
        <a href="{{route('product.show', [$product])}}">
            <h5 class="card-title">{{$name ?? ''}}</h5>
        </a>
        <p class="card-text">{{$description ?? ''}}</p>
        <p class="card-text">Производитель: {{$company_name ?? ''}}</p>
        <p class="card-text">Цена: {{$price ?? ''}} тг</p>
    </div>
    <div class="card-body">
        @foreach($categories as $category)
            <span class="badge badge-primary">{{$category}}</span>
        @endforeach
        <br>
        <span class="badge badge-warning">{{$rating}}</span>
    </div>
    <div class="card-footer">
        <small class="text-muted">Количество: {{$count ?? 0}} шт</small>

    </div>
</div>