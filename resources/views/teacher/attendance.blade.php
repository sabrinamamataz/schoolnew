@extends('teacher.main')
@section('style')
@endsection
@section('content')
    <div class="container">
        <button type="button" class="btn btn-primary mt-2" data-bs-toggle="modal" data-bs-target="#addNewClass">
            Take Attendance
        </button>

        <!-- Modal -->
        <div class="modal fade" id="addNewClass" tabindex="-1" aria-labelledby="addNewClassLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addNewClassLabel">Attendance</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form>
                        @csrf
                        <div class="modal-body">
                            <div class="container">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Date</label>
                                    <input type="date" class="form-control" name="date" required>
                                </div>
                                <div class="mb-3">
                                    <label for="Period" class="form-label">Period</label>
                                    <select class="form-select" name="period_id" required>
                                        <option value="">Open this select menu</option>
                                        @foreach ($periods as $period)
                                            <option value="{{ $period->id }}">
                                                {{ $period->period }}
                                                ({{ date('h:i A', strtotime($period->start_time)) }}
                                                -
                                                {{ date('h:i A', strtotime($period->end_time)) }})
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Add Routine</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <hr>
    <div class="container">
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
                {{-- @foreach ($students as $key => $student)
                        <tr>
                            <th scope="row">{{ $key + 1 }}</th>
                            <td>{{ $student->name }}</td>
                            <td>{{ $student->email }}</td>
                            <td>{{ isset($student->userToClass) ? $student->userToClass->class_name : '--' }}</td>
                            <td>{{ $student->guardian_name }}</td>
                            <td>{{ $student->guardian_contact }}</td>
                            <td>{{ $student->status == 1 ? 'Active' : 'Inactive' }}</td>
                            <td>
                                <button type="button" >
                                    Update
                                </button>
                            </td>
                        </tr>
                    @endforeach --}}
            </tbody>
        </table>
    </div>
@endsection
@section('script')
    <script>
        $(document).ready(function() {
            $('#myTable').DataTable();
        });
    </script>
@endsection
