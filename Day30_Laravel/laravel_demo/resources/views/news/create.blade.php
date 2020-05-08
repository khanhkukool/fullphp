@extends('layouts.news')
@section('title', 'Thêm mới')
@section('content')
    <form method="post" action="{{ url('/news/store') }}" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
        Title:
        <input type="text" name="title" value="{{ old('title') }}"/>
        <br/>
        Chọn danh mục
        <select name="category_id">
            {{--khi truy vấn theo Eloquent thì có thể--}}
            {{--truy xuất phần tử thông qua mảng hoặc object đều được--}}
            @foreach($categories as $category)
                <option value="{{ $category->id }}">
                    {{ $category->title }}
                </option>
            @endforeach
        </select>
        <br/>
        Avatar:
        <input type="file" name="avatar"/>
        <br/>
        Status
        <select name="status">
            <option value="0">Disabled</option>
            <option value="1">Active</option>
        </select>
        <br/>
        <input type="submit" name="submit" value="Insert"/>
    </form>
@endsection()