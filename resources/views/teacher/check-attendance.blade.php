@extends('teacher.main')
@section('style')
@endsection
@section('content')
    <div class="container mt-2 d-flex justify-content-between">
        <h4>Attendance of
            {{ $attendance->date . ' | ' . $attendance->week_day . ' | ' . $attendance->attendanceToSection->sectionToClass->class_name . ' | Section: ' . $attendance->attendanceToSection->section }}
        </h4>
        <a href="{{ route('attendance_page', 0) }}" class="btn btn-danger">Back</a>
    </div>
    <hr>
    <div class="container">
        <table class="table table-bordered" id="myTable">
            <thead>
                <tr>
                    <th scope="col">SL</th>
                    <th scope="col">Student Name</th>
                    <th scope="col">Attendance</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($attendanceDetails as $key => $data)
                    <input type="hidden" name="id{{ $key }}" value="{{ $data->id }}">
                    <input type="hidden" name="user_id{{ $key }}" value="{{ $data->s_user_id }}">
                    <tr>
                        <th scope="row">{{ $key + 1 }}</th>
                        <td>{{ $data->attendanceToUser->name }}</td>
                        <td>
                            @if ($data->present == 1)
                                <span class="text-success">Present</span>
                            @else
                                <span class="text-danger">Absent</span>
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
@section('script')
@endsection
