@extends('layout.template')
@section('main')
    <div class="min">
        <div id="anck3"></div>
        <div class="text line-text" id="word2"><span>金派耶</span></div>
    </div>
    <div class="pic img1">
        <div class="mask">
            <div class="tittle back">母湯</div>
        </div>
    </div>

    <div class="row">
        <div class="col-6">
                {{-- 把東西套出去畫面上 --}}
                @foreach ($products as $item)
                {{-- 取出資料 --}}
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                          <h5 class="card-title">{{ $item->name }}</h5>
                          <h5 class="card-title">價格:{{ $item->price }}</h5>
                          <h5 class="card-title">折扣:{{ $item->discount }}</h5>
                          <p class="card-text">說明:{{ $item->text }}</p>
                          <a href="{{ asset('/products') }}/{{  $item->id }}">more...</a>
                        </div>
                      </div>
                @endforeach
        </div>
    </div>
@endsection
