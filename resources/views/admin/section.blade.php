@extends('admin.main')
@section('content')
    <div class="">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addNewSection">
            Add New Section
        </button>

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
                                    <label for="Class_id">Class_id</label>
                                    <input type="text" name="class_id" required class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="Teacher_id">Teacher_id</label>
                                    <input type="text" name="teacher_id" required class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="Section">Section</label>
                                    <input type="text" name="section" required class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="Student_capacity">Student_capacity</label>
                                    <input type="number" name="student_capacity" required class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="Shift">Shift</label>
                                    <input type="text" name="shift" required class="form-control">
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
                        <th scope="col">Class_id</th>
                        <th scope="col">Teacher_id</th>
                        <th scope="col">Section</th>
                        <th scope="col">Student_capacity</th>
                        <th scope="col">Shift</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($sections as $key => $section)
                        <tr>
                            <th scope="row">{{ $key + 1 }}</th>
                            <td>{{ $section->class_id }}</td>
                            <td>{{ $section->teacher_id }}</td>
                            <td>{{ $section->section }}</td>
                            <td>{{ $section->student_capasity }}</td>
                            <td>{{ $section->shift }}</td>
                            <td>
                                <button type="button" class="btn btn-warning" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#updateModat{{ $section->id }}">
                                    Update
                                </button>
                                <a href="{{ route('delete_section', $section->id) }}" class="btn btn-danger">Delete</a>
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
                                                        value="{{ $section->student_capasity }}" required>
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
