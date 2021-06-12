@extends('layout.app')

@section('title','編輯產品')

@section('h1_title','編輯產品')

@section('css')

@endsection

@section('content')
<form action="{{ asset('/admin/product/update') }}/{{ $record->id }}" class="py-5" method="POST">
    @csrf
    <div class="row">
        <div class="col-6">
            <img style="width: 450px; height: 300px;" id="preview_progressbarTW_img"
                src="https://dummyimage.com/600x400">
            <input class="py-3" type="file" onchange="readURL(this)" targetID="preview_progressbarTW_img"
                accept="image/gif, image/jpeg, image/png" name="product_photo">
        </div>
        <div class="col-6">
            <label class="py-2" for="product_name">產品名稱</label>
            <input type="product_name" class="form-control" id="product_name" name="name" required value="{{ $record->name }}">
            <label class="py-2" for="price">產品價格</label>
            <input type="price" class="form-control" id="price" name="price" required value="{{ $record->price }}">
            <label class="py-2" for="discount">產品折扣</label>
            <input type="discount" class="form-control" id="discount" name="discount" value="{{ $record->discount }}">
            <div class="form-group py-2">
                <label for="text">產品內容</label>
                <textarea class="form-control" id="text" rows="3" name="text">{{ $record->text }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">修改</button>
        </div>
    </div>
</form>
@endsection

@section('js')
<script>
    function readURL(input) {
        if (input.files && input.files[0]) {
            let imageTagID = input.getAttribute("targetID")
            let reader = new FileReader()
            reader.onload = function (e) {
                let img = document.getElementById(imageTagID)
                img.setAttribute("src", e.target.result)
            }
            reader.readAsDataURL(input.files[0])
        }
    }
</script>
@endsection
