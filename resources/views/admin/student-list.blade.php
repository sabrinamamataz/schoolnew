@extends('admin.main')
@section('style')
@endsection
@section('content')
    <div class="container">
        <div class="col-12 d-flex justify-content-end m-2">
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
                            <th scope="col">Gender</th>
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
                                <td>{{ isset($student->gender) ? $student->gender : '--' }}</td>
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
                                        <form action="{{ route('update_student_list') }}" method="post">
                                            @csrf
                                            <input type="hidden" name="user_id" value="{{ $student->user_id }}">
                                            <div class="modal-body">
                                                <div class="form-group">
                                                    <label for="Name">Name</label>
                                                    <input type="text" name="name" class="form-control"
                                                        value="{{ $student->name }}" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="Email">Email</label>
                                                    <input type="text" name="email" class="form-control"
                                                        value="{{ $student->email }}" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="Class_id">Class</label>
                                                    <select class="form-select" name="class_id" required>
                                                        <option value="">Select Class</option>
                                                        @foreach ($classes as $class)
                                                            <option value="{{ $class->id }}"
                                                                {{ $student->class == $class->id ? 'selected' : '' }}>
                                                                {{ $class->class_name }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                @php
                                                    $clsSec = App\Models\StudentAssignSection::where('user_id', $student->user_id)
                                                        ->latest()
                                                        ->first();
                                                    if ($clsSec) {
                                                        $section = App\Models\Section::find($clsSec->section_id);
                                                    } else {
                                                        $section = '';
                                                    }
                                                @endphp
                                                <div class="form-group">
                                                    <label for="Section">Section</label>
                                                    <input type="text" name="" class="form-control"
                                                        value="{{ $section ? $section->section : '' }}" readonly>
                                                </div>
                                                <div class="form-group">
                                                    <label for="Date Of Birth">date Of Birth</label>
                                                    <input type="date" name="date_of_birth" class="form-control"
                                                        value="{{ $student->date_of_birth }}">
                                                </div>
                                                <div class="form-group">
                                                    <label for="Age">Age</label>
                                                    <input type="number" name="age" class="form-control"
                                                        value="{{ $student->age }}">
                                                </div>
                                                <div class="form-group">
                                                    <label for="Address">Adresss</label>
                                                    <input type="text" name="address" class="form-control"
                                                        value="{{ $student->address }}">
                                                </div>
                                                <div class="form-group">
                                                    <label for="Contact">Guardian Name</label>
                                                    <input type="tel" name="guardian_name" class="form-control"
                                                        value="{{ $student->guardian_name }}">
                                                </div>
                                                <div class="form-group">
                                                    <label for="Guardian No">Guardian No</label>
                                                    <input type="tel" name="guardian_no" class="form-control"
                                                        value="{{ $student->guardian_no }}">
                                                </div>
                                                <div class="form-group">
                                                    <label for="Guardian No">Guardian Relation</label>
                                                    <input type="tel" name="guardian_relation" class="form-control"
                                                        value="{{ $student->guardian_relation }}">
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
