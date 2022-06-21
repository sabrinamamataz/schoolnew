@extends('teacher.main')
@section('style')
@endsection
@section('content')
    <div class="container">
        <button type="button" class="btn btn-primary mt-2" data-bs-toggle="modal" data-bs-target="#addNewClass">
            Create Attendance
        </button>

        <!-- Modal -->
        <div class="modal fade" id="addNewClass" tabindex="-1" aria-labelledby="addNewClassLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addNewClassLabel">Attendance</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="{{ route('create_attendance') }}" method="post">
                        @csrf
                        <div class="modal-body">
                            <div class="container">
                                <div class="mb-3">
                                    <label for="date" class="form-label">Date</label>
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
                            <button type="submit" class="btn btn-primary">Add Attendance</button>
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
                    <th scope="col">Date</th>
                    <th scope="col">Week Day</th>
                    <th scope="col">Class</th>
                    <th scope="col">Section</th>
                    <th scope="col">Period</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($attendances as $key => $data)
                    <tr>
                        <th scope="row">{{ $key + 1 }}</th>
                        <td>{{ $data->date }}</td>
                        <td>{{ $data->week_day }}</td>
                        <td>
                            {{ isset($data->attendanceToSection->sectionToClass) ? $data->attendanceToSection->sectionToClass->class_name : '--' }}
                        </td>
                        <td>{{ isset($data->attendanceToSection) ? $data->attendanceToSection->section : '--' }}</td>
                        <td>{{ isset($data->attendanceToPeriod) ? $data->attendanceToPeriod->period : '--' }}</td>
                        <td>
                            @if ($data->status == 1)
                                <a href="{{ route('check_attendance', $data->id) }}" class="btn btn-info">
                                    Inspect
                                </a>
                            @else
                                <a href="{{ route('take_attendance', $data->id) }}" class="btn btn-success">
                                    Take Attendance
                                </a>
                            @endif
                        </td>
                    </tr>
                @endforeach
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
