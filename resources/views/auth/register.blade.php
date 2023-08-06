@extends('layouts.app')

@section('content')
    <h1>تسجيل المتبرع</h1>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <div>
            <label for="name">الاسم</label>
            <input id="name" type="text" name="name" value="{{ old('name') }}" required autofocus>
            @error('name')
                <span>{{ $message }}</span>
            @enderror
        </div>

        <div>
            <label for="email">البريد الإلكتروني</label>
            <input id="email" type="email" name="email" value="{{ old('email') }}" required>
            @error('email')
                <span>{{ $message }}</span>
            @enderror
        </div>

        <div>
            <label for="blood_type">زمرة الدم</label>
            <input id="blood_type" type="text" name="blood_type" value="{{ old('blood_type') }}" required>
            @error('blood_type')
                <span>{{ $message }}</span>
            @enderror
        </div>

        <div>
            <label for="city">المحافظة</label>
            <input id="city" type="text" name="city" value="{{ old('city') }}" required>
            @error('city')
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

        <div>
            <label for="password_confirmation">تأكيد كلمة السر</label>
            <input id="password_confirmation" type="password" name="password_confirmation" required>
            @error('password_confirmation')
                <span>{{ $message }}</span>
            @enderror
        </div>

        <button type="submit">تسجيل</button>
    </form>
@endsection
