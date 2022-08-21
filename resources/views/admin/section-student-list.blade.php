@extends('admin.main')
@section('style')
@endsection
@section('content')
    <div class="p-2">
        <div class="row">
            <div class="col">
                <h3>Student List of : {{ $section->class_name . ' - Section: ' . $section->section }}</h3>
            </div>
            <div class="col text-end">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addStudectSection">
                    Add Student to section
                </button>
            </div>
        </div>
        <hr>
        <!-- Modal -->
        <div class="modal fade" id="addStudectSection" tabindex="-1" aria-labelledby="addStudectSectionLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addStudectSectionLabel">Add Student to:
                            {{ $section->class_name . ' - Section: ' . $section->section }}</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="{{ route('add_section') }}" method="post">
                        @csrf
                        <div class="modal-body text-dark">
                            <div class="container">
                                <div class="form-group">
                                    @foreach ($stdSelect as $std)
                                        <div class="form-check">
                                            <input name="checkbox" class="form-check-input" type="checkbox"
                                                value="{{ $std->user_id }}" id="">
                                            <label class="form-check-label" for="flexCheck">
                                                {{ $std->name }}, Guardian:
                                                {{ isset($std->guardian_name) ? $std->guardian_name : '--' }}
                                            </label>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <a type="button" class="btn btn-primary" onClick="selectStudents()">Add</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="col-md-12">
                <table class="table table-bordered" id="myTable">
                    <thead>
                        <tr>
                            <th scope="col">Roll</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Father Name</th>
                            <th scope="col">Mother Name</th>
                            <th scope="col">Contact</th>
                            {{-- <th scope="col">Action</th> --}}
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($students as $key => $student)
                            <tr>
                                <th scope="row">
                                    @php
                                        $assignedSec = App\Models\StudentAssignSection::where('user_id', $student->user_id)
                                            ->where('section_id', $section->id)
                                            ->where('status', date('Y'))
                                            ->first();
                                        
                                        if ($assignedSec) {
                                            echo $assignedSec->student_id;
                                        } else {
                                            echo '--';
                                        }
                                    @endphp
                                </th>
                                <td>{{ $student->name }}</td>
                                <td>{{ $student->email }}</td>
                                <td>{{ $student->guardian_name }}</td>
                                <td>{{ $student->guardian_relation }}</td>
                                <td>{{ $student->contact }}</td>
                                {{-- <td>
                                    <button type="button" class="btn btn-success" class="btn btn-primary"
                                        data-bs-toggle="modal" data-bs-target="#inspectModat{{ $student->id }}">
                                        View
                                    </button>
                                </td> --}}
                            </tr>

                            <!-- update Modal -->
                            <div class="modal fade" id="inspectModat{{ $student->id }}" tabindex="-1"
                                aria-labelledby="inspectModatLabel{{ $student->id }}" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="inspectModatLabel{{ $student->id }}">
                                                {{ $student->name }}
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

        <div class="text-center">
            <a href="{{ route('section_admin_dashboard') }}" class="btn btn-danger m-2">Back</a>
        </div>
    </div>
@endsection
@section('script')
    <script>
        $(document).ready(function() {
            $('#myTable').DataTable();
        });


        const std_ids = [];
        var i = 0;
        //  function to archieve checked orders
        function selectStudents() {
            // console.log(status);
            if ($('input[name="checkbox"]').is(':checked')) {
                // start spinner
                $('input[name="checkbox"]:checked').each(function() {
                    var id = this.value;
                    std_ids[i] = id;
                    i++;
                    $('input[name="checkbox"]:checked').prop('checked', false);
                });
                // console.log(std_ids);
                $.ajax({
                    url: "/add-student-section/" + std_ids + "/{{ $section->id }}",
                    type: "GET",
                    data: "",
                    success(response) {
                        // console.log(response);
                        if (response == 0) {
                            alert('Section full...');
                        } else {
                            alert('Updated successfully');
                        }

                        location.reload();
                    }
                });

            } else {
                alert('not selected');
            }
            // console.log(productIds);
        }
    </script>
@endsection
