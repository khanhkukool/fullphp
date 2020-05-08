@extends('layouts.news')
@section('title', 'Thêm mới')
@section('content')
    <form method="post" action="{{ url('/news/store') }}" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
        Title:
        <input type="text" name="title" value="{{ old('title') }}"/>
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