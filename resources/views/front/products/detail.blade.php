@extends('layout.template')
@section('main')
    <div class="min">
        <div id="anck3"></div>
        <div class="text line-text" id="word2"><span>金派耶</span></div>
    </div>

    <div class="row">
        <div class="container">
            <h2 class="title">{{ $productsRecord->name }}</h2>
            <h3>價格:{{ $productsRecord->price }}</h3>
            <h4>折扣:{{ $discount->priceDiscount }}</h4>
            <p class="content">說明:{{ $productsRecord->text }}</p>
            <a href="{{ asset('/products') }}">上一頁</a>
        </div>
    </div>
@endsection
