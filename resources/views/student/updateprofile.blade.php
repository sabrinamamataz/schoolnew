@extends('student.main')
@section('content')
    <form class="container" action="{{ route('update_student_profile') }}" method="post">
        @csrf
        <div class="form-group">
            <div class="mb-3">
                <label for="Name">Name</label>
                <input type="text" name="name" required class="form-control" class="Enter Name"
                    value="{{ $userDate->name }}">
            </div>
            <div class="mb-3">
                <label for="">Email</label>
                <input type="email" name="email" readonly class="form-control" placeholder="Enter email"
                    value="{{ $userDate->email }}">
            </div>
            <div class="mb-3">
                <div class="form-group">
                    <label for="Class_id">Class</label>
                    <select class="form-select" name="class" {{ isset($studentData->class) ? 'disabled' : '' }}>
                        <option value="">Select Class</option>
                        @foreach ($classes as $class)
                            <option {{ isset($studentData->class) && $studentData->class == $class->id ? 'selected' : '' }} value="{{ $class->id }}">
                                {{ $class->class_name }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>
            @if (auth()->user()->userToSecAssign)
                <div class="mb-3">
                    <label for="">Section</label>
                    <input type="text" name="" class="form-control" readonly
                        value="{{ auth()->user()->userToSecAssign->assignSectionToSection->section }}">
                </div>
            @endif
            <div class="mb-3">
                <label for="">Date of birth</label>
                <input type="date" name="date_of_birth" required class="form-control" placeholder="Enter date of birth"
                    value="{{ isset($studentData->date_of_birth) ? $studentData->date_of_birth : '' }}">
            </div>
            <div class="mb-3">
                <label for="">Age</label>
                <input type="number" name="age" required class="form-control" placeholder="Enter age"
                    value="{{ isset($studentData->age) ? $studentData->age : '' }}">
            </div>
            <div class="mb-3">
                <label for="">Address</label>
                <input type="text" name="address" required class="form-control" placeholder="Enter address"
                    value="{{ isset($studentData->address) ? $studentData->address : '' }}">
            </div>
            <div class="mb-3">
                <label for="">Guardian Name</label>
                <input type="text" name="guardian_name" required class="form-control" placeholder="Enter guardian name"
                    value="{{ isset($studentData->guardian_name) ? $studentData->guardian_name : '' }}">
            </div>
            <div class="mb-3">
                <label for="">Guardian No</label>
                <input type="number" name="guardian_no" required class="form-control"
                    placeholder="Enter guardian contact number"
                    value="{{ isset($studentData->guardian_no) ? $studentData->guardian_no : '' }}">
            </div>
            <div class="mb-3">
                <label for="">Guardian Relation</label>
                <input type="text" name="guardian_relation" required class="form-control" placeholder="Enter Relation"
                    value="{{ isset($studentData->guardian_relation) ? $studentData->guardian_relation : '' }}">
            </div>
        </div>
        <button type="submit" class="btn btn-primary w-100">Update</button>
    </form>
@endsection
