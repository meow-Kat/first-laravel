@extends('layout.app')

@section('title','新增產品')

@section('h1_title','新增產品')

@section('css')

@endsection

@section('content')
<form action="{{ '/admin/product/push' }}" method="POST" enctype="multipart/form-data" class="py-5">
    @csrf
    <div class="row">
        <div class="col-6">
            <img style="width: 450px; height: 300px;" id="preview_progressbarTW_img"
                src="https://dummyimage.com/600x400">
            <input class="py-3" type="file" onchange="readURL(this)" targetID="preview_progressbarTW_img"
                accept="image/gif, image/jpeg, image/png" name="img">
        </div>
        <div class="col-6">
            <label class="py-2" for="name">產品名稱</label>
            <input type="name" class="form-control" id="name" name="name" required>
            <label class="py-2" for="price">產品價格</label>
            <input type="price" class="form-control" id="price" name="price" required>
            <label class="py-2" for="discount">產品折扣</label>
            <input type="discount" class="form-control" id="discount" name="discount">
            <div class="form-group py-2">
                <label for="text">產品內容</label>
                <textarea class="form-control" id="text" rows="3" name="text"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">新增</button>
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
