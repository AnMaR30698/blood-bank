@extends('layouts.app')

@section('content')
    <h1>تسجيل الدخول</h1>
    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div>
            <label for="email">البريد الإلكتروني</label>
            <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus>
            @error('email')
                <span>{{ $message }}</span>
            @enderror
        </div>

        <div>
            <label for="password">كلمة السر</label>
            <input id="password" type="password" name="password" required>
            @error('password')
                <span>{{ $message }}</span>
            @enderror
        </div>

        <button type="submit">تسجيل الدخول</button>
    </form>
@endsection
