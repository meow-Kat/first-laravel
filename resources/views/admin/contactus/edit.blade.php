@extends('layout.app')

@section('title','編輯聯絡我們')

@section('h1_title', '編輯聯絡我們')

@section('content')
<div class="row">
    <div class="col-8 p-5">
        {{--  前端資料要送到後端必須用 <form> 包起來 --}}
        {{--  ↓ 透過form送到路徑去  ↓  --}}
        <form action="{{ asset('/admin/contactus/update') }}/{{ $edit_record->id }}" method="POST">
        @csrf {{-- 加入驗證token 可以理解為加密送出的資料 --}}
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="name">姓名</label>                             {{-- ↓ 必填的意思--}}
                <input type="name" class="form-control" id="name" name="name" required value="{{ $edit_record->name }}">
              </div>
              <div class="form-group col-md-6">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ $edit_record->email }}">
              </div>
            </div>
            <div class="form-group">
              <label for="phone">電話</label>
              <input type="text" class="form-control" id="phone" placeholder="091234567" name="phone" value="{{ $edit_record->phone }}">
            </div>
            <div class="form-group">
              <label for="textarea">內容</label>
              {{--                                                  name要對好 幹....就是很難對 --}}
              <textarea class="form-control" id="textarea" rows="3" name="content">{{ $edit_record->content }}</textarea>
            </div>
            {{-- button type 必須是 submit  --}}
            <button type="submit" class="btn btn-primary">編輯</button>
          </form>
    </div>
</div>
@endsection

@section('js')

@endsection
