<!-- resources/views/show.blade.php -->

@extends('layout')

@section('title', 'Stusent Details')

@section('content')
    <h2>User Details</h2>

    <ul class="list-group">
        <li class="list-group-item"><strong>First Name:</strong> {{ $students->fname }}</li>
        <li class="list-group-item"><strong>Last Name:</strong> {{ $students->sname }}</li>
        <li class="list-group-item"><strong>Address:</strong> {{ $students->address }}</li>
        <li class="list-group-item"><strong>Phone:</strong> {{ $students->phone }}</li>
        <li class="list-group-item"><strong>Date of Birth:</strong> {{ $students->dob }}</li>
        <li class="list-group-item"><strong>Age:</strong> {{ $students->age }}</li>
        <li class="list-group-item"><strong>Class:</strong> {{ $students->class }}</li>
    </ul>

    <a href="{{ route('students.edit', $students->id) }}" class="btn btn-primary">Edit User</a>
    <a href="{{ route('students.index') }}" class="btn btn-secondary">Back to List</a>
@endsection
