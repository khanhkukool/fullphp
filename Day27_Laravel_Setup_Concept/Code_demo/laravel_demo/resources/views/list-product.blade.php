
{{--Do laravel không cho phép submit form đang có phương thức post--}}
{{--mà ko có 1 chuỗi token do laravel quy định--}}
{{--Nên cần phải thêm chuỗi token nếu muốn submit form với phương--}}
{{--thức POST--}}
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action="" method="post">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    Username: <input type="text" name="username" />
    <br />
    Password: <input type="password" name="password" />
    <br />
    <input type="submit" name="submit" value="Login" />
</form>