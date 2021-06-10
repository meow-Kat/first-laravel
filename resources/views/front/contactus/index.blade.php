@extends('layout.template')
@section('main')

    <div class="row">
        <div class="col-8 p-5">
            {{--  前端資料要送到後端必須用 <form> 包起來 --}}
            {{--  ↓ 透過form送到路徑去  ↓  --}}
            <form action="/push" method="POST">
            @csrf {{-- 加入驗證token 可以理解為加密送出的資料 --}}
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="name">姓名</label>                             {{-- ↓ 必填的意思--}}
                    <input type="name" class="form-control" id="name" name="name" required>
                  </div>
                  <div class="form-group col-md-6">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email">
                  </div>
                </div>
                <div class="form-group">
                  <label for="phone">電話</label>
                  <input type="text" class="form-control" id="phone" placeholder="091234567" name="phone">
                </div>
                <div class="form-group">
                  <label for="textarea">內容</label>
                  <textarea class="form-control" id="textarea" rows="3" name="context"></textarea>
                </div>
                {{-- button type 必須是 submit  --}}
                <a href="{{ asset('/push') }}"><button type="submit" class="btn btn-primary">送出</button></a>
              </form>
        </div>
    </div>
@endsection
