@extends('header')
<link rel="stylesheet" type="text/css" href="/css/style.css"/>
@section('content')
<div class="container mx-auto mt-4">
    <div class="row">
      @foreach ($products as $product)
        <div class="col-md-4">
          <div class="card" style="width: 18rem;">
            <img src="{{$product->picture}}" class="card-img-top">
            <div class="card-body">
              <h5 class="card-title">{{$product->name}}</h5>
              <p class="card-text">{{$product->price}}</p>
              @if (Auth::check())
                @if (Auth()->user()->email=='admin@mail.ru')
                  <form action="{{ route('admin.delete', ['id' => $product->id]) }}" method="post" class="form-inline">
                    <button type="submit" class="btn btn-success">Удалить</button>
                  </form>
                  <form action="{{ route('admin.index', ['id' => $product->id,'action'=>'change']) }}" method="post" class="form-inline">
                    <button type="submit" class="btn btn-success">Изменить</button>
                  </form>
                @else
                <form action="{{ route('basket.add', ['id' => $product->id]) }}" method="post" class="form-inline">
                  <button type="submit" class="btn btn-success">Добавить в корзину</button>
                </form>
                @endif
              @else
                <button type="submit" class="btn btn-success">Добавить в корзину</button>
              @endif
            </div>
          </div>
        </div>
      @endforeach
    @if (Auth::check())
      @if (Auth()->user()->email=='admin@mail.ru')
        <form action="{{ route('admin.index', ['id' => $product->id,'action'=>'new']) }}" method="post" class="form-inline">
          <button type="submit" class="btn btn-success">Добавить новый товар</button>
        </form>
        @endif
    @endif
 </div>
</div>
@endsection