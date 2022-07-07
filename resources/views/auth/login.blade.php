@extends('layouts.app');
@section('content');
@parent
    <form action="{{ route('auth.authentication') }}" method="post" class="registeration">
        @csrf
        <h1 class="title">وارد شوید</h1>
        <input type="email" name="email" placeholder="ایمیل" required>
        <input type="password" name="password" placeholder="رمز عبور" required>
        <input type="submit" value="ورود">
    </form>
@endsection
