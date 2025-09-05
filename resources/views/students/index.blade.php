{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>All Students</h1>
    <a href="{{ route('students.create') }}">Add Student</a>
    <table border="1" cellpadding="10">
    <tr>
        <th>ID</th><th>Name</th><th>Email</th><th>Course</th><th>Action</th>
    </tr>

    @foreach ($students as $student)
    <tr>
        <td>{{ $student->id }}</td>
        <td>{{ $student->name }}</td>
        <td>{{ $student->email }}</td>
        <td>{{ $student->course }}</td>

        <td>
            <a href="{{ route('students.edit',$student->id) }}">Edit</a>
            <form action="{{ route('students.destroy',$student->id) }}" method="POST" style="display:inline">
            @csrf
            @method('DELETE')
            <button type="submit" onclick="return confirm('Delete?')">Delete</button>
            </form>
        </td>

    </tr>     
    @endforeach
    
    </table>
</body>
</html> --}}



@extends('layouts.app')

@section('title', 'Students')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
  <h1 class="h3">Students</h1>
  <a href="{{ route('students.create') }}" class="btn btn-primary">+ Add Student</a>
</div>

@if($students->isEmpty())
  <div class="alert alert-info">No students found.</div>
@else
  <table class="table table-striped table-bordered">
    <thead class="table-dark">
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Course</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      @foreach($students as $student)
        <tr>
          <td>{{ $student->id }}</td>
          <td>{{ $student->name }}</td>
          <td>{{ $student->email }}</td>
          <td>{{ $student->course }}</td>
          <td>
            <a href="{{ route('students.edit', $student) }}" class="btn btn-sm btn-warning">Edit</a>
            <form action="{{ route('students.destroy', $student) }}" method="POST" class="d-inline">
              @csrf
              @method('DELETE')
              <button class="btn btn-sm btn-danger" onclick="return confirm('Delete student?')">Delete</button>
            </form>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
@endif
@endsection
