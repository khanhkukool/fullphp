<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
</head>
<body>
    <div class="header">
        Nội dung header
    </div>
    <div class="main">
        @yield('content')
    </div>
    <div class="footer">
        Nội dung footer
    </div>
</body>
</html>