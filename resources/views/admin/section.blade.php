@extends('admin.main')
@section('content')
    <div class="p-2">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addNewSection">
            Add New Section
        </button>
        <hr>

        <!-- Modal -->
        <div class="modal fade" id="addNewSection" tabindex="-1" aria-labelledby="addNewSectionLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addNewSectionLabel">Add New Section</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="{{ route('add_section') }}" method="post">
                        @csrf
                        <div class="modal-body">
                            <div class="container">
                                <div class="form-group">
                                    <label for="Class_id">Class</label>
                                    <select class="form-select" name="class_id" required>
                                        <option value="">Select Class</option>
                                        @foreach ($classes as $class)
                                            <option value="{{ $class->id }}">{{ $class->class_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="teacher_id">Teacher</label>
                                    <select class="form-select" name="teacher_id" required>
                                        <option value="">Select Teacher</option>
                                        @foreach ($teachers as $teacher)
                                            <option value="{{ $teacher->id }}">{{ $teacher->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="Section">Section</label>
                                    <input type="text" name="section" required class="form-control"
                                        placeholder="A, B, C, etc">
                                </div>
                                <div class="form-group">
                                    <label for="Student_capacity">Student Capacity</label>
                                    <input type="number" name="student_capacity" required class="form-control"
                                        value="50">
                                </div>
                                <div class="form-group">
                                    <label for="Shift">Shift</label>
                                    <input type="text" name="shift" required class="form-control" value="Morning"
                                        placeholder="Morning/Evening">
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Add Section</button>
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
                        <th scope="col">Class</th>
                        <th scope="col">Teacher Name</th>
                        <th scope="col">Section</th>
                        <th scope="col">Student Capacity</th>
                        <th scope="col">Total Student</th>
                        <th scope="col">Shift</th>
                        <th scope="col">Student list</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($sections as $key => $section)
                        <tr>
                            <th scope="row">{{ $key + 1 }}</th>
                            <td>{{ $section->sectionToClass->class_name }}</td>
                            <td>{{ $section->sectionToUserTeacher->name }}</td>
                            <td>{{ $section->section }}</td>
                            <td>{{ $section->student_capacity }}</td>
                            <td>
                                @php
                                    echo App\Models\StudentAssignSection::where('section_id', $section->id)->count();
                                @endphp
                            </td>
                            <td>{{ $section->shift }}</td>
                            <td>
                                <a href="{{ route('section_student_list', $section->id) }}" class="btn btn-success">view
                                    list</a>
                            </td>
                            <td>{{ $section->status == 1 ? 'Active' : 'Inactive' }}</td>
                            <td>
                                <button type="button" class="btn btn-info" class="btn btn-primary"
                                    data-bs-toggle="modal" data-bs-target="#updateModat{{ $section->id }}">
                                    Edit
                                </button>
                            </td>
                        </tr>

                        <!-- update Modal -->
                        <div class="modal fade" id="updateModat{{ $section->id }}" tabindex="-1"
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
                                                    <label for="Class_id">Class</label>
                                                    <input type="text" class="form-control" readonly
                                                        value="{{ $section->class_id }}">
                                                </div>
                                                <div class="form-group">
                                                    <label for="Teacher_id">Teacher</label>
                                                    <select class="form-select" name="teacher_id" required>
                                                        <option value="">Select Teacher</option>
                                                        @foreach ($teachers as $teacher)
                                                            <option value="{{ $teacher->id }}"
                                                                {{ $section->teacher_id == $teacher->id ? 'selected' : '' }}>
                                                                {{ $teacher->name }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="Section">Section</label>
                                                    <input type="text" name="section" class="form-control"
                                                        value="{{ $section->section }}" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="Student_capacity">Student Capacity</label>
                                                    <input type="number" name="student_capacity" class="form-control"
                                                        value="{{ $section->student_capacity }}" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="Shift">Shift</label>
                                                    <input type="text" name="shift" class="form-control"
                                                        value="{{ $section->shift }}" required>
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
                        </div>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
