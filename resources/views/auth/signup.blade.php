@extends('layouts.app')
@section('content')
    @parent
    <form action="{{ url('register') }}" method="post" class="registeration">
        @csrf
        <h1 class="title">ثبت نام کنید</h1>
        <input type="text" name="full_name" placeholder="نام و نام خانوادگی">
        <input type="email" name="email" placeholder="ایمیل" required>
        <input type="password" name="password" placeholder="رمز عبور" required>
        <input type="password" name="re_password" placeholder="تکرار رمز عبور" required>
        <input type="submit" value="ثبت نام">
    </form>
@endsection
