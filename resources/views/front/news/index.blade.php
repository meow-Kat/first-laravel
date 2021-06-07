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
                @foreach ($news as $item)
                {{-- 取出資料 --}}
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                          <h5 class="card-title">{{ $item->title }}</h5>
                          <p class="card-text">{{ $item->text }}</p>
                          {{-- 包好看清楚 --}}
                          <a href="{{asset('/news')}}/{{  $item->id }}">more...</a>
                        </div>
                      </div>
                @endforeach
        </div>
    </div>
@endsection
