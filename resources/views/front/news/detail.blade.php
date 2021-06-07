@extends('layout.template')
@section('main')
    <div class="min">
        <div id="anck3"></div>
        <div class="text line-text" id="word2"><span>金派耶</span></div>
    </div>

    <div class="row">
        <div class="container">
            <h2 class="title">{{ $record->title }}</h2>
            <p class="content">{{ $record->text }}</p>
            <a href="{{ asset('/news') }}">上一頁</a>
        </div>
    </div>
@endsection
