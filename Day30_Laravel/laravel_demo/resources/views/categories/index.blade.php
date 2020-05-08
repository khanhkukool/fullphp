@extends('layouts.news')
@section('title', 'Liệt kê danh mục')
@section('content')
    <h1>Liệt kê danh mục</h1>
    <table border="1" cellpadding="8">
        <tr>
            <th>Id</th>
            <th>Title</th>
            <th>Status</th>
            <th>Created at</th>
            <th>Updated at</th>
            <th></th>
        </tr>
        @foreach($categories AS $category)
            <tr>
                <td>{{ $category->id }}</td>
                <td>{{ $category->title }}</td>
                <td>
                    @php
                        $status_text = '';
                        switch ($category->status) {
                            case 0: $status_text = 'Disabled';break;
                            case 1: $status_text = 'Active';break;
                        }
                        echo $status_text;
                    @endphp
                </td>
                <td>
                    {{  date('d-m-Y H:i:s', strtotime($category->created_at)) }}
                </td>
                <td>
                    {{  date('d-m-Y H:i:s', strtotime($category->updated_at)) }}
                </td>
                <td>
                    <a href="{{ url('/category/show/' . $category->id) }}">
                        Chi tiết
                    </a>
                    <a href="{{ url('/category/edit/' . $category->id) }}">
                        Sửa
                    </a>
                    <a href="{{ url('/category/delete/' . $category->id) }}"
                       onclick="return confirm('Bạn có muốn xóa hay ko?')">
                        Xóa
                    </a>
                </td>
            </tr>
        @endforeach
    </table>
    {{--Hiển thị phân trang--}}
    {{ $categories->links() }}
@endsection