@extends('layouts.news')
@section('title', 'Thêm mới')
@section('content')
    <form method="post"
          action="{{ url('/news/update', ['id' => $new->id]) }}"
          enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
        Title:
        <input type="text" name="title"
               value="{{ old('title') ? old('title') : $new->title }}"/>
        <br/>
        Chọn danh mục
        <select name="category_id">
            {{--khi truy vấn theo Eloquent thì có thể--}}
            {{--truy xuất phần tử thông qua mảng hoặc object đều được--}}
            @foreach($categories as $category)
                <option
                        {{--set trạng thái selected cho category hiện tại--}}
                        {{--của tin tức--}}
                        @if($new->category_id == $category->id)
                        selected="true"
                        @endif
                        value="{{ $category->id }}">
                    {{ $category->title }}
                </option>
            @endforeach
        </select>
        <br/>
        Avatar:
        <input type="file" name="avatar"/>
        @if(!empty($new->avatar))
            <img src="{{ asset('/uploads/' . $new->avatar) }}"
                 height="50"/>
        @endif
        <br/>
        Status
        @php
        $status_active = '';
        $status_disabled = '';
        switch ($new->status) {
            case 0: $status_disabled = "selected=true";break;
            case 1: $status_active = "selected=true";break;
        }
        @endphp
        <select name="status">
            <option {{ $status_disabled }} value="0">Disabled</option>
            <option {{ $status_active }} value="1">Active</option>
        </select>
        <br/>
        <input type="submit" name="submit" value="Update"/>
    </form>
@endsection()