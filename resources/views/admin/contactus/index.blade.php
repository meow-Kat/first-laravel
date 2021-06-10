@extends('layout.app')

@section('title','聯絡我們管理')

@section('h1_title', '聯絡我們管理')

@section('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
@endsection


@section('content')
<table id="my-datatable" class="display" style="width:100%">
    <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Content</th>
            <th>操作</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($record as $item)
        <tr>
            <td>{{ $item->name }}</td>
            <td>{{ $item->email }}</td>
            <td>{{ $item->phone }}</td>
            <td>{{ $item->content }}</td>
            <td>
                <a href="{{ asset('/admin/contactus/edit') }}/{{  $item->id }}" type="button" class="btn btn-primary btn-sm">edit</a>
                {{-- 走delete的方式用 <form> 可以單純觸發rotue method="POST" --}}
                <form style="display: inline-block" action="{{ asset('/admin/contactus/delete') }}/{{  $item->id }} " method="POST">
                    @csrf
                    {{-- 使用 delete 雖然還是使用POST 但這邊可以更改 --}}
                    @method('delete')
                    {{--  必須type="submit" --}}
                    <button type="submit" class="btn btn-danger btn-sm">delete</button>
                </form>
            </td>
        </tr>
        @endforeach

    </tbody>
    <tfoot>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Content</th>
            <th>操作</th>
        </tr>
    </tfoot>
</table>
@endsection


@section('js')
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script>
    $(document).ready(function() {
        $('#my-datatable').DataTable();
    } );
    </script>
@endsection
