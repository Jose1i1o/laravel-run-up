@extends('layouts.plantilla')

@section('title', 'Courses')

@section('content')
    <h1>Welcome to the courses page</h1>
    <a href="{{ route('courses.create') }}">Create a new course</a>
    <ul>
        @foreach ($courses as $course)
            <li>
                <a href="{{ route('courses.show', $course->id) }}">{{ $course->name }}</a>
            </li>
        @endforeach
    </ul>

    {{ $courses->links() }} 
    {{-- pagination at the bottom of the page --}}

@endsection