{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Add Student</h1>
    <form action="{{ route('students.store') }}" method="POST">
    @csrf
    Name: <input type="text" name="name"><br>
    Email: <input type="email" name="email"><br>
    Course: <input type="text" name="course"><br>  
    <button type="submit">Save</button>        
    </form>
</body>
</html> --}}

@extends('layouts.app')

@section('title', 'Add Student')

@section('content')
<div class="card shadow">
  <div class="card-header bg-primary text-white">Add Student</div>
  <div class="card-body">
    <form action="{{ route('students.store') }}" method="POST">
      @csrf
      <div class="mb-3">
        <label class="form-label">Name</label>
        <input type="text" name="name" class="form-control" required>
      </div>
      <div class="mb-3">
        <label class="form-label">Email</label>
        <input type="email" name="email" class="form-control" required>
      </div>
      <div class="mb-3">
        <label class="form-label">Course</label>
        <input type="text" name="course" class="form-control" required>
      </div>
      <button type="submit" class="btn btn-success">Save</button>
      <a href="{{ route('students.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
  </div>
</div>
@endsection
