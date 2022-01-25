@extends('layouts.plantilla')

@section('title', 'Course' . $course->name)

@section('content')
    <h1>Welcome to this course for {{$course->name}}</h1>
    <div><b>Category: </b>{{ $course->category }}</div>
    <div><b>Description: </b>{{ $course->description }}</div>
    <div>
        <a href="{{ route('courses.index') }}">Back to courses</a>
    </div>

@endsection