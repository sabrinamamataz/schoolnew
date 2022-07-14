@extends('teacher.main')
@section('content')
    <form class="container" action="{{ route('update_teacher_profile') }}" method="post">
        @csrf
        <div class="form-group">
            <div class="mb-3">
                <label for="formGroupExampleInput">Name</label>
                <input type="text" name="name" readonly class="form-control" class="Enter Name"
                    value="{{ $userData->name }}">
            </div>
            <div class="mb-3">
                <label for="formGroupExampleInput">Email</label>
                <input type="email" name="email" readonly class="form-control" placeholder="Enter email"
                    value="{{ $userData->email }}">
            </div>
            <div class="mb-3">
                <label for="formGroupExampleInput">Date of birth</label>
                <input type="date" name="date_of_birth" required class="form-control" placeholder="Enter date of birth"
                    value="{{ isset($teacherData->date_of_birth) ? $teacherData->date_of_birth : '' }}">
            </div>
            <div class="mb-3">
                <label for="formGroupExampleInput">Gender</label>
                <select class="form-select" name="gender" aria-label="Gender Selaction" requiredD>
                    <option value="">Select Gender</option>
                    <option value="Male" {{ $userData->gender == 'Male' ? 'selected' : '' }}>
                        Male
                    </option>
                    <option value="Female" {{ $userData->gender == 'Female' ? 'selected' : '' }}>
                        Female
                    </option>
                    <option value="Other" {{ $userData->gender == 'Other' ? 'selected' : '' }}>
                        Other
                    </option>
                </select>
            </div>
            <div class="mb-3">
                <div class="form-group">
                    <label for="formGroupExampleInput">Subject</label>
                    <select class="form-select" name="subject_id">
                        <option value="">Select Subject</option>
                        @foreach ($subjects as $subject)
                            <option
                                {{ isset($teacherData->subject_id) && $teacherData->subject_id == $subject->id ? 'selected' : '' }}
                                value="{{ $subject->id }}">
                                {{ $subject->subject_name }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="mb-3">
                <label for="formGroupExampleInput">Designation</label>
                <input type="text" name="designation" {{ isset($teacherData->designation) ? 'readonly' : 'required' }}
                    class="form-control" placeholder="Enter designation"
                    value="{{ isset($teacherData->designation) ? $teacherData->designation : '' }}">
            </div>
            <div class="mb-3">
                <label for="formGroupExampleInput">Address</label>
                <input type="text" name="address" required class="form-control" placeholder="Enter address"
                    value="{{ isset($teacherData->address) ? $teacherData->address : '' }}">
            </div>
            <div class="mb-3">
                <label for="formGroupExampleInput">Contact No</label>
                <input type="tel" name="contact_no" required class="form-control" placeholder="Enter  contact number"
                    value="{{ isset($teacherData->contact_no) ? $teacherData->contact_no : '' }}">
            </div>
            <button type="submit" class="btn btn-primary w-100">Update</button>
        </div>
    </form>
@endsection
