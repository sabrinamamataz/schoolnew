@extends('teacher.main')
@section('style')
@endsection
@section('content')
    <div class="container mt-2 d-flex justify-content-between">
        <h4>Attendance of
            {{ $attendance->date . ' | ' . $attendance->week_day . ' | ' . $attendance->attendanceToSection->sectionToClass->class_name . ' | Section: ' . $attendance->attendanceToSection->section }}
        </h4>
        <a href="{{ route('attendance_page') }}" class="btn btn-danger">Back</a>
    </div>
    <hr>
    <div class="container">
        <form action="{{ route('update_attendance') }}" method="post">
            @csrf
            <table class="table table-bordered" id="myTable">
                <thead>
                    <tr>
                        <th scope="col">SL</th>
                        <th scope="col">Student Name</th>
                        {{-- <th scope="col">Attendance</th> --}}
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($attendanceDetails as $key => $data)
                        <input type="hidden" name="id{{ $key }}" value="{{ $data->id }}">
                        <input type="hidden" name="user_id{{ $key }}" value="{{ $data->s_user_id }}">
                        <tr>
                            <th scope="row">{{ $key + 1 }}</th>
                            <td>{{ $data->attendanceToUser->name }}</td>
                            {{-- <td>{{ $data->present == 1 ? 'Present' : 'Abesnt' }}</td> --}}
                            <td>
                                <select name="present{{ $key }}" class="form-select"
                                    aria-label="Default select example">
                                    <option value="0" class="text-danger">Absent</option>
                                    <option value="1" class="text-success">Present</option>
                                </select>
                            </td>
                        </tr>
                        <input type="hidden" name="count" value="{{ $key }}">
                    @endforeach
                </tbody>
            </table>
            <div class="text-end">
                <button type="submit" class="btn btn-success">Submit</button>
            </div>
        </form>
    </div>
@endsection
@section('script')
    <script>
        $(document).ready(function() {
            // $('#myTable').DataTable();
        });
    </script>
@endsection
