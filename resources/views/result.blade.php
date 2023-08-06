@extends('layouts.app')

@section('content')
    <h1>نتائج البحث</h1>

    @if ($users->isEmpty())
        <p>لا يوجد متبرعون متاحون حاليًا في هذه الزمرة الدموية.</p>
    @else
        <ul>
            @foreach ($users as $users)
                <li>{{ $users->name }}</li>
            @endforeach
        </ul>
    @endif
@endsection
