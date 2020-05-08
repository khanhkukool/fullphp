<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <link rel="stylesheet"
          href="{{ asset('css/bootstrap.min.css') }}" />
</head>
<body>
<div class="header">
    HEADER
</div>
<div class="main">
    @if(session()->has('error'))
        <h3 style="color: red">
            {{ session()->get('error') }}
        </h3>
    @endif
        @if(session()->has('success'))
            <h3 style="color: green">
                {{ session()->get('success') }}
            </h3>
        @endif
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @yield('content')
</div>
<div class="footer">
    FOOTER
</div>
</body>
</html>