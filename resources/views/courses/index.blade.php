@extends('layouts.plantilla')

@section('title', 'Courses')

@section('content')
    <h1>Welcome to the courses page</h1>
    <ul>
        @foreach($courses as $course)
            <li>$course</li>
        @endforeach
    </ul>

@endsection