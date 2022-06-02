@extends('student.main')
@section('content')
<form class="container" action="{{ route('update_student_profile') }}" method="post">
    @csrf
  <div class="form-group">
    <label for="forName">Name</label>
    <input type="text" class="form-control" name="name" value="{{ $userDate->name }}">
  </div>
  <div class="form-group">
    <label for="">Email</label>
    <input type="email" class="form-control" name="email" value="{{ $userDate->email }}">
  </div>
  <div class="form-group">
    <label for="">Gaurdian No</label>
    <input type="tel" class="form-control" name="gaurdian_no" value="{{ isset($studentData->gaurdian_no) ? $studentData->gaurdian_no : '' }}">
  </div>

  <button type="submit" class="btn btn-primary">Update</button>
</form>

@endsection