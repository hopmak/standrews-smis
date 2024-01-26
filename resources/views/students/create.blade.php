<!-- resources/views/students/create.blade.php -->

@extends('layout')
@section('title', 'Add Student')
@section('content')

<div class="card">
    <div class="card-header">
        <h1 class="h2">@yield('page-title', 'Add Student')</h1>
    </div>
    <div class="card-body">


    <form action="{{ route('students.store') }}" method="post">
        @csrf

        <div class="form-group">
            <label for="fname">First Name:</label>
            <input type="text" name="fname" id="fname" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="sname">Last Name:</label>
            <input type="text" name="sname" id="sname" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="address">Address:</label>
            <textarea name="address" id="address" class="form-control" required></textarea>
        </div>

        <div class="form-group">
            <label for="phone">Phone:</label>
            <input type="text" name="phone" id="phone" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="dob">Date of Birth:</label>
            <input type="date" name="dob" id="dob" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="age">Age:</label>
            <input type="number" name="age" id="age" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="class">Class:</label>
            <input type="text" name="class" id="class" min="1" max="2" class="form-control" required>

        </div>

        <button type="submit" class="btn btn-primary">Add Student</button>
    </form>

    </div>
</div>

@endsection
