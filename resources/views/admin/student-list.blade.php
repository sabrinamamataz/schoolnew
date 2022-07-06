@extends('admin.main')
@section('style')
@endsection
@section('content')
    <div class="container">
        <div class="col-12 d-flex justify-content-between m-2">
            <button class="btn btn-info" onclick="window.print()">Print</button>
        </div>
        <div class="">
            <div class="d-flex justify-content-between">
                <h3>Student List</h3>
                <div class="col-md-4">
                    <select id="cls_select" class="form-select" aria-label="select">
                        <option value="0">Select a class</option>
                        @foreach ($classes as $class)
                            <option {{ $class_id == $class->id ? 'selected' : '' }} value="{{ $class->id }}">
                                {{ $class->class_name }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="col-md-12">
                <table class="table table-bordered" id="myTable">
                    <thead>
                        <tr>
                            <th scope="col">SL</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Class</th>
                            <th scope="col">Guardian</th>
                            <th scope="col">Contact</th>
                            <th scope="col">Status</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($students as $key => $student)
                            <tr>
                                <th scope="row">{{ $key + 1 }}</th>
                                <td>{{ $student->name }}</td>
                                <td>{{ $student->email }}</td>
                                <td>{{ isset($student->userToClass) ? $student->userToClass->class_name : '--' }}</td>
                                <td>{{ $student->guardian_name }}</td>
                                <td>{{ $student->guardian_contact }}</td>
                                <td>{{ $student->status == 1 ? 'Active' : 'Inactive' }}</td>
                                <td>
                                    <button type="button" class="btn btn-warning" class="btn btn-primary"
                                        data-bs-toggle="modal" data-bs-target="#updateModat{{ $student->id }}">
                                        Update
                                    </button>
                                </td>
                            </tr>

                            <!-- update Modal -->
                            <div class="modal fade" id="updateModat{{ $student->id }}" tabindex="-1"
                                aria-labelledby="updateModatLabel{{ $student->id }}" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="updateModatLabel{{ $student->id }}">
                                                Update {{ $student->name }}
                                            </h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        {{-- <form action="{{ route('section_update', $student->id) }}" method="post">
                                        @csrf
                                        <input type="hidden" name="section_id" value="{{ $student->id }}">
                                        <div class="modal-body">
                                            <div class="container">
                                                <div class="form-group">
                                                    <label for="Class_id">Class</label>
                                                    <select class="form-select" name="class_id" required>
                                                        <option value="">Select Class</option>
                                                        @foreach ($classes as $class)
                                                            <option value="{{ $class->id }}"
                                                                {{ $section->class_id == $class->id ? 'selected' : '' }}>
                                                                {{ $class->class_name }}
                                                            </option>
                                                        @endforeach
                                                    </select>
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
                                    </form> --}}
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endsection
    @section('script')
        <script>
            $(document).ready(function() {
                $('#myTable').DataTable();
            });
        </script>
        <script>
            $('#cls_select').on('change', function() {
                window.location.href = '/student-list/' + this.value;
            });
        </script>
    @endsection
