@extends('layout.app')

@section('title','產品管理')

@section('h1_title','產品管理')

{{-- 找datatable CSS --}}
@section('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
@endsection

@section('content')
<div class="py-3">
    <a href="{{ asset('/admin/product/add') }}" type="button" class="btn btn-info">新增產品</a>
</div>
<table id="my-datatable" class="display" style="width:100%">
    <thead>
        <tr>
            <th>產品圖片</th>
            <th>產品名稱</th>
            <th>產品價格</th>
            <th>產品折扣</th>
            <th>產品內容</th>
            <th>操作</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($record as $item)
        <tr>
            <td><img src="{{ $item->img }}" alt="" style="width: 300px; height: 200px;"></td>
            <td>{{ $item->name }}</td>
            <td>{{ $item->price }}</td>
            <td>{{ $item->discount }}</td>
            <td>{{ $item->text }}</td>
            <td>
                <a href="{{ asset('/admin/product/edit') }}/{{ $item->id }}" type="button" class="btn btn-primary btn-sm ">Edit</a>
                <form class="form-delete" action="{{ asset('/admin/product/delete') }}/{{  $item->id }} " method="POST">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger btn-sm mt-2 ">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach

    </tbody>
    <tfoot>
        <tr>
            <th>產品圖片</th>
            <th>產品名稱</th>
            <th>產品價格</th>
            <th>產品折扣</th>
            <th>產品內容</th>
            <th>操作</th>
        </tr>
    </tfoot>
</table>
@endsection

{{-- 找datatable JS --}}
@section('js')
<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function() {
        $('#my-datatable').DataTable()
    } )
</script>
<script>
    let Delete = document.querySelectorAll('.btn-danger')
    let form_delete = document.querySelector('.form-delete')
    // $('.btn-danger').click(function (e) {
        Delete.forEach(index =>{
            index.onclick = function (e){
                e.preventDefault()
                let yes = confirm('確定嗎 ?')
                if (yes){
                    form_delete.submit()
                }
            }
        })


    // })
</script>
@endsection
