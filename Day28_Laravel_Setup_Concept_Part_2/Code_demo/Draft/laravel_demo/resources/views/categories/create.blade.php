@extends('layouts.news')
@section('title', 'Thêm mới danh mục')
@section('content')
    <h1>Form thêm mới danh mục</h1>
    <form action="{{ url('/category/store') }}" method="post">
        {{--thêm lệnh dưới để chống CSRF Token --}}
        @csrf
        Title:
        {{--sử dụng hàm old để đổ lại dữ liệu đã nhập đúng--}}
        <input type="text" name="title" value="{{ old('title') }}"/>
        <br/>
        Status:
        @php
        $selected_disabled = '';
        $selected_active = '';
        switch (old('status')) {
            case 0: $selected_disabled = "selected=true";break;
            case 1: $selected_active = "selected=true";break;
        }
        @endphp
        <select name="status">
            <option {{ $selected_disabled }} value="0">Disabled</option>
            <option {{ $selected_active }} value="1">Active</option>
        </select>
        <br />
        <input type="submit" name="submit" value="Save" />
    </form>
@endsection