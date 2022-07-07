<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
</head>

<body>
<div class="navbar">
    <nav>
        <a href="{{ url('/') }}" class="menu-link">خانه</a>
        <a href="#" class="menu-link">بانک سوال</a>
        @if($request->session()->exists('user'))
            <a href="{{ url('logout') }}" class="menu-link">خروج</a>
        @else
        <a href="{{ url('/login') }}" class="menu-link">ورود</a>
        <a href="{{ url('/signup') }}" class="menu-link">ثبت نام</a>
        @endif
    </nav>
</div>

@section('content')

@show


</body>
<script src="{{ asset('/js/app.js') }}"></script>

</html>
