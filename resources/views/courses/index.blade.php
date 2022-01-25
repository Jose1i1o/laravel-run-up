@extends('layouts.plantilla')

@section('title', 'Courses')

@section('content')
    <h1>Welcome to the courses page</h1>
    <a href="{{ route('courses.create') }}">Create a new course</a>
    <ul class="grid grid-cols-3 gap-4">
        @foreach ($courses as $course)
            <li class="content-center h-32 bg-violet-300 hover::bg-violet-00">
                <a class="h-10 w-10 rounded-full" href="{{ route('courses.show', $course->id) }}">{{ $course->name }}</a>
            </li>
        @endforeach
    </ul>

    {{ $courses->links() }}
    {{-- pagination at the bottom of the page --}}

@endsection