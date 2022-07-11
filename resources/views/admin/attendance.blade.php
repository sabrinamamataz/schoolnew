@extends('admin.main')
@section('style')
@endsection
@section('content')
    <div class="p-2">
        <h3>Attendance</h3>
        <hr>

        <div class="container">
            <table class="table table-bordered" id="myTable">
                <thead>
                    <tr>
                        <th scope="col">SL</th>
                        <th scope="col">Teacher Name</th>
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
                            <td>{{ isset($data->attendanceToTeacher) ? $data->attendanceToTeacher->name : '--' }}</td>
                            <td>{{ $data->date }}</td>
                            <td>{{ $data->week_day }}</td>
                            <td>
                                {{ isset($data->attendanceToSection->sectionToClass) ? $data->attendanceToSection->sectionToClass->class_name : '--' }}
                            </td>
                            <td>{{ isset($data->attendanceToSection) ? $data->attendanceToSection->section : '--' }}</td>
                            <td>{{ isset($data->attendanceToPeriod) ? $data->attendanceToPeriod->period : '--' }}</td>
                            <td>
                                @if ($data->status == 1)
                                    <a href="{{ route('admin_check_attendance', $data->id) }}" class="btn btn-info">
                                        Inspect
                                    </a>
                                @endif
                            </td>
                        </tr>
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
@endsection
