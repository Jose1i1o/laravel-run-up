@extends('layouts.plantilla')

@section('title', 'Courses create')

@section('content')
    <h1>Welcome. Here you can create a new project</h1>

    <form action="{{ route('courses.store' )}}" method="POST">
            <label for="name">Name</label>
                <br />
            <input type="text" name="name" id="name" placeholder="Name">
            <br />
            <label>Description
                <br />
            <textarea name="description" id="description" rows="10"></textarea>
            </label>
            <br />
            <label for="category">Category</label>
                <br />
            <input type="text" name="category" id="category" placeholder="Category">
            <br />
            <button type="submit" class="btn btn-primary">Send form</button>
        </form>

@endsection