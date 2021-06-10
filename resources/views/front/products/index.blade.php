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
                @foreach ($products as $key=>$item)
                {{-- 取出資料 --}}
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                          <h5 class="card-title">{{ $item->name }}</h5>
                          <h5 class="card-title">價格 : {{ $item->price }}</h5>
                          <h5 class="card-title">折扣 : {{ $discountPrice[$key] }}</h5>
                          <p class="card-text">說明 : {{ $item->text }}</p>
                          {{-- <a href="{{ asset('/products') }}/{{  $item->id }}">more...</a> --}}

                          {{-- 再修 看老師code 第二個錄影黨 --}}
                          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#productModal{{ $key }}">
                            Launch demo modal
                          </button>

                        </div>
                      </div>
                @endforeach
        </div>
    </div>

                <!-- Button trigger modal                   ↓這個重點                 ↓這個重點 -->
{{-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
    Launch demo modal
  </button> --}}

    @foreach ($products as $key=>$item)
<!-- Modal 對應card            ↓這個重點綁的東西不同  -->
<div class="modal fade" id="productModal{{ $key }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">{{ $item->name }}</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          {{ $item->text }}
        </div>
        <div class="modal-footer">
            折扣後價格 : {{ $discountPrice[$key] }}
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
</div>
    @endforeach


@endsection
