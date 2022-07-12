@extends('student.main')
@section('style')
@endsection
@section('content')
    <div class="p-2">
        <h4>Your attendance</h4>
        <hr>
        <div class="container">
            <table class="table table-bordered" id="myTable">
                <thead>
                    <tr>
                        <th scope="col">SL</th>
                        <th scope="col">Name</th>
                        <th scope="col">Class</th>
                        <th scope="col">Section</th>
                        <th scope="col">First Class</th>
                        <th scope="col">Last Class</th>
                        <th scope="col">Total Class</th>
                        <th scope="col">Present</th>
                        <th scope="col">Abesnt</th>
                        <th scope="col">Abesnt %</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($getRecord as $key => $data)
                        <tr>
                            <th scope="row">{{ $key + 1 }}</th>
                            <td>{{ auth()->user()->name }}</td>
                            <td>
                                {{ isset($data->attendanceRecordToSection->sectionToClass->class_name) ? $data->attendanceRecordToSection->sectionToClass->class_name : '--' }}
                            </td>
                            <td>
                                {{ isset($data->attendanceRecordToSection->section) ? $data->attendanceRecordToSection->section : '--' }}
                            </td>
                            <td>{{ $data->first_class }}</td>
                            <td>{{ $data->last_class }}</td>
                            <td>{{ $data->total_class }}</td>
                            <td>{{ $data->present }}</td>
                            <td>{{ $data->absent }}</td>
                            <td>{{ $data->total_class != 0 ? round(($data->absent / $data->total_class) * 100, 2) : 0 }}
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
