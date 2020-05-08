@extends('layouts.news')
@section('title', 'Thêm mới')
@section('content')
    <form method="post" action="{{ url('/news/update/' . $news->id) }}" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
        Title:
        <input type="text" name="title" value="{{ !empty(old('title')) ? old('title') : $news->title }}"/>
        <br/>
        Avatar:
        <input type="file" name="avatar"/>
        <img src="{{ asset('/uploads/' . $news->avatar) }}">
        <br/>
        Status
        <select name="status">
            <option value="0">Disabled</option>
            <option value="1">Active</option>
        </select>
        <br/>
        <input type="submit" name="submit" value="Update"/>
    </form>
@endsection()