@extends('student.main')
@section('content')
    <form class="container" action="{{ route('update_student_profile') }}" method="post">
        @csrf
        <div class="form-group">

            @if (session('success'))
                <div class="alter alter.success">{{ successful('success') }}</div>
            @endif
            <div class="mb-3">
                <label for="Name">Name</label>
                <input type="text" name="name" required class="form-control" class="Enter Name"
                    value="{{ $userDate->name }}">
            </div>
            <div class="mb-3">
                <label for="">Email</label>
                <input type="email" name="email" required class="form-control" placeholder="Enter email"
                    value="{{ $userDate->email }}">
            </div>
            <div class="mb-3">
                <label for="">Class</label>
                <input type="number" name="class" required class="form-control" placeholder="Enter class"
                    value="{{ isset($studentData->class) ? $studentData->class : '' }}">
            </div>
            <div class="mb-3">
                <label for="">Address</label>
                <input type="text" name="adress" required class="form-control" placeholder="Enter address"
                    value="{{ isset($studentData->adress) ? $studentData->adress : '' }}">
            </div>
            <div class="mb-3">
                <label for="">Guardian Name</label>
                <input type="text" name="gaurdian_name" required class="form-control" placeholder="Enter guardian name"
                    value="{{ isset($studentData->gaurdian_name) ? $studentData->gaurdian_name : '' }}">
            </div>
            <div class="mb-3">
                <label for="">Guardian No</label>
                <input type="number" name="gaurdian_no" required class="form-control"
                    placeholder="Enter guardian contact number"
                    value="{{ isset($studentData->gaurdian_no) ? $studentData->gaurdian_no : '' }}">
            </div>
            <div class="mb-3">
                <label for="">Guardian Relation</label>
                <input type="text" name="gaurdian_relation" required class="form-control" placeholder="Enter Relation"
                    value="{{ isset($studentData->gaurdian_relation) ? $studentData->gaurdian_relation : '' }}">
            </div>
        </div>
        <button type="submit" class="btn btn-primary w-100">Update</button>

    </form>
@endsection
