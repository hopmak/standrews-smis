<!-- resources/views/edit.blade.php -->

@extends('layout')

@section('title', 'Edit User')

@section('content')
    {{-- <h2>Edit User</h2> --}}

    <form method="post" action="{{ route('students.update', $students->id) }}">
        {{-- <form action="{{ url('student/' .$students->id) }}" method="post"> --}}
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="fname" class="form-label">First Name</label>
            <input type="text" class="form-control" id="fname" name="fname" value="{{ $students->fname }}">
        </div>

        <div class="mb-3">
            <label for="sname" class="form-label">Last Name</label>
            <input type="text" class="form-control" id="sname" name="sname" value="{{ $students->sname }}">
        </div>

        <div class="mb-3">
            <label for="address" class="form-label">Address</label>
            <input type="text" class="form-control" id="address" name="address" value="{{ $students->address }}">
        </div>

        <div class="mb-3">
            <label for="phone" class="form-label">Phone</label>
            <input type="text" class="form-control" id="phone" name="phone" value="{{ $students->phone }}">
        </div>

        <div class="mb-3">
            <label for="dob" class="form-label">Date of Birth</label>
            <input type="date" class="form-control" id="dob" name="dob" value="{{ $students->dob }}">
        </div>

        <div class="mb-3">
            <label for="age" class="form-label">Age</label>
            <input type="number" class="form-control" id="age" name="age" value="{{ $students->age }}" readonly>
        </div>

        <div class="mb-3">
            <label for="class" class="form-label">Class</label>
            <input type="text" class="form-control" id="class" name="class" value="{{ $students->class }}">
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection
