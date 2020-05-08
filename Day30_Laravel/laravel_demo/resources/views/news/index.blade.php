@extends('layouts.news')
@section('title', 'Danh sách tin')
@section('content')
    <h1>Danh sách tin tức</h1>
    <table border="1" cellpadding="8" cellspacing="0">
        <tr>
            <th>ID</th>
            <th>Tên danh mục</th>
            <th>Tiêu đề tin</th>
            <th>Ảnh tin</th>
            <th>Trạng thái tin</th>
            <th>Ngày tạo</th>
            <th>Ngày update</th>
            <th>Action</th>
        </tr>
        @foreach($news AS $new)
            <tr>
                <td>{{ $new->id }}</td>
                <td>
                    {{--truy xuất theo tên relation để lấy--}}
                    {{--các trường trong bảng join--}}
                    {{ $new->categories->title }}
                </td>
                <td>{{ $new->title }}</td>
                <td>
                    {{--hàm asset trả về đường dẫn tương đối
                    đến thư mục public của project
                    --}}
                    <img src="{{ asset('/uploads/' . $new->avatar) }}" height="50"/>
                </td>
                <td>
                    @php
                        $status_text = '';
                        switch ($new->status) {
                            case 0: $status_text = "Ẩn";break;
                            case 1: $status_text = "Kích hoat";break;
                        }
                        echo $status_text;
                    @endphp
                </td>
                <td>
                    {{ date('d/m/Y H:i:s', strtotime($new->created_at)) }}
                </td>
                <td>
                    {{ date('d/m/Y H:i:s', strtotime($new->updated_at)) }}
                </td>
                <td>
                    <a href="{{ url('/news/show', ['id' => $new->id]) }}">
                        Chi tiết
                    </a>
                    <a href="{{ url('/news/edit', ['id' => $new->id]) }}">
                        Update
                    </a>
                    <a href="{{ url('/news/delete', ['id' => $new->id]) }}"
                       onclick="return confirm('Chắc chắn xóa ?')">
                        Xóa
                    </a>
                </td>
            </tr>
        @endforeach
        {{--hiển thị phân trang--}}
        {{ $news->links() }}
    </table>
@endsection()