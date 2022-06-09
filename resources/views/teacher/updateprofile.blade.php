@extends('teacher.main')
@section('content')
<form class="container" action="{{ route('update_teacher_profile') }}" method="post">
        @csrf
        <div class="form-group">
            <div class="mb-3">
                <label for="Name">Name</label>
                <input type="text" name="name" required class="form-control" class="Enter Name"
                    value="{{ $userDate->name }}">
            </div>
            <div class="mb-3">
                <label for="">Email</label>
                <input type="email" name="email" required class="form-control" placeholder="Enter email"
                    value="{{ $userDate->email }}">
            
            <div class="mb-3">
                <label for="">Address</label>
                <input type="text" name="address" required class="form-control" placeholder="Enter address"
                    value="{{ isset($teacherData->address) ? $teacherData->address : '' }}">
            </div>
            <div class="mb-3">
                <label for="">Designation</label>
                <input type="text" name="designation" required class="form-control" placeholder="Enter designation"
                    value="{{ isset($teacherData->designation) ? $teacherData->designation : '' }}">
            </div>
            <div class="mb-3">
                <label for="">Contact No</label>
                <input type="number" name="contact_no" required class="form-control"
                    placeholder="Enter  contact number"
                    value="{{ isset($teacherData->contact_no) ? $teacherData->contact_no : '' }}">
            
        </div>
        <button type="submit" class="btn btn-primary w-100">Update</button>
    </form>


@endsection