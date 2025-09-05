{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Edit Student</h1>
    <form action="{{ route('students.update', $student->id) }}" method="POST">
    @csrf
    @method('PUT')
    Name: <input type="text" name="name" value="{{ $student->name }}"><br>
    Email: <input type="email" name="email" value="{{ $student->email }}"><br>
    Course: <input type="text" name="course" value="{{ $student->course }}"><br>
    <button type="submit">Update</button>
    </form>
</body>
</html> --}}

@extends('layouts.app')

@section('title', 'Edit Student')

@section('content')
<div class="card shadow">
  <div class="card-header bg-warning">Edit Student</div>
  <div class="card-body">
    <form action="{{ route('students.update', $student) }}" method="POST">
      @csrf
      @method('PUT')
      <div class="mb-3">
        <label class="form-label">Name</label>
        <input type="text" name="name" class="form-control" value="{{ $student->name }}" required>
      </div>
      <div class="mb-3">
        <label class="form-label">Email</label>
        <input type="email" name="email" class="form-control" value="{{ $student->email }}" required>
      </div>
      <div class="mb-3">
        <label class="form-label">Course</label>
        <input type="text" name="course" class="form-control" value="{{ $student->course }}" required>
      </div>
      <button type="submit" class="btn btn-primary">Update</button>
      <a href="{{ route('students.index') }}" class="btn btn-secondary">Back</a>
    </form>
  </div>
</div>
@endsection
