@extends('layout.layout')

@section('title')
    @parent
@endsection


@section('header')
    @parent
@endsection



@section('content')
    <div class="container">
        @if(!$guest_id)
            <div class="emptyBasket" style="display: block">
                <h3>Bаша корзина пуста</h3>
                <img src="https://f97o6kd8uk.a.trbcdn.net/local/templates/.default/images/cart.png?_cvc=1681146445" alt="">
                <p>Воспользуйтесь нашим каталогом, чтобы ее заполнить.</p>
                <a href="{{route('home')}}" class="button yellow">Продолжить покупки</a>
            </div>
        @else
            <div class="row title-table">

                <h2>Товари</h2>
                <div class="id col-1">№</div>
                <div class="title col-4">Название</div>
                <div class="title col-1">Кол-во</div>
                <div class="author col-1">Цена</div>
                <div class="red col-1"></div>
                <div class="red col-2">Uzer</div>
                <div class="red col-2">email</div>

            </div>
            <div class="row post">

                @foreach($guest_products as $k=>$product)
                    <div class="id col-1">{{$k+1}}</div>
                    <div class="title col-4">{{$product->name}}</div>
                    <div class="title col-1">{{$product->quantity}}</div>
                    <div class="author col-2">{{$product->price}}</div>
                    <div class="del col-2">{{$product->name}}</div>
                    <div class="red col-2">{{$product->email}}</div>
                @endforeach
                @endif
            </div>

    </div>
@endsection
