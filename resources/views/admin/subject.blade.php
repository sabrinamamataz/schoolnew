@extends('admin.main')
@section('content')
    <div class="">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addNewSubject">
            Add New Subject
        </button>

        <!-- Modal -->
        <div class="modal fade" id="addNewSubject" tabindex="-1" aria-labelledby="addNewSectioubject" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addNewSectioubject">Add New Section</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="{{ route('add_subject') }}" method="post">
                        @csrf
                        <div class="modal-body">
                            <div class="container">
                                <div class="form-group">
                                    <label for="SubjectName">Subject Name</label>
                                    <input type="text" name="subject_name" required class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="credit">Credit</label>
                                    <input type="number" name="credit" required class="form-control" value="3">
                                </div>
                                <div class="form-group">
                                    <label for="passing_mark">Passing Mark</label>
                                    <input type="text" name="passing_mark" required class="form-control" value="30">
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Add Subject</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-md-12">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">SL</th>
                        <th scope="col">Subject Name</th>
                        <th scope="col">Credit</th>
                        <th scope="col">Passing Mark</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($subjects as $key => $subject)
                        <tr>
                            <th scope="row">{{ $key + 1 }}</th>
                            <td>{{ $subject->subject_name }}</td>
                            <td>{{ $subject->credit }}</td>
                            <td>{{ $subject->passing_mark }}</td>
                            <td>{{ $subject->status == 1 ? 'Active' : 'Inactive' }}</td>
                            <td>
                                <a href="" class="btn btn-info">Update</a>
                                <a href="" class="btn btn-danger">Delete</a>
                                {{-- <button type="button" class="btn btn-warning" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#updateModat{{ $section->id }}">
                                    Update
                                </button> --}}
                                {{-- <a href="{{ route('delete_section', $section->id) }}" class="btn btn-danger">Delete</a> --}}
                            </td>
                        </tr>

                        <!-- update Modal -->
                        {{-- <div class="modal fade" id="updateModat{{ $section->id }}" tabindex="-1"
                            aria-labelledby="updateModatLabel{{ $section->id }}" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="updateModatLabel{{ $section->id }}">
                                            Update {{ $section->section }}
                                        </h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <form action="{{ route('section_update', $section->id) }}" method="post">
                                        @csrf
                                        <input type="hidden" name="section_id" value="{{ $section->id }}">
                                        <div class="modal-body">
                                            <div class="container">
                                                <div class="form-group">
                                                    <label for="Class_id">Class_id</label>
                                                    <input type="text" name="class_id" class="form-control"
                                                        value="{{ $section->class_id }}" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="Teacher_id">Teacher_id</label>
                                                    <input type="text" name="teacher_id" class="form-control"
                                                        value="{{ $section->teacher_id }}" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="Section">Section</label>
                                                    <input type="text" name="section" class="form-control"
                                                        value="{{ $section->section }}" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="Student_capacity">Student_capacity</label>
                                                    <input type="number" name="student_capacity" class="form-control"
                                                        value="{{ $section->student_capacity }}" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="Shift">Shift</label>
                                                    <input type="text" name="shift" class="form-control"
                                                        value="{{ $section->shift }}" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="Status">Status</label>
                                                    <input type="text" name="status" class="form-control"
                                                        value="{{ $section->status }}" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Save changes</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div> --}}
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
