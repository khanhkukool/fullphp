@extends('layouts.news')
@section('title', 'Thêm mới')
@section('content')
    <table>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Avatar</th>
            <th>Status</th>
            <th>Created at</th>
            <th>Updated at</th>
        </tr>
        <tr>
            <td>{{ $news->id }}</td>
            <td>{{ $news->title }}</td>
            <td>
                <img src="{{ asset('/uploads/' . $news->avatar) }}">
            </td>
            <td>{{ $news->status }}</td>
            <td>{{ date('d-m-Y H:i:s', strtotime($news->created_at)) }}</td>
            <td>{{ date('d-m-Y H:i:s', strtotime($news->updated_at)) }}</td>
        </tr>
    </table>
@endsection()