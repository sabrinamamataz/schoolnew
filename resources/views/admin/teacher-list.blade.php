@extends('admin.main')
@section('style')
@endsection
@section('content')
    <div class="d-flex justify-content-between p-2">
        <h4 class="p-2">List of Teachers</h4>
        <div>
            <button class="btn btn-info" onclick="window.print()">Print</button>
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
                    <th scope="col">Gender</th>
                    <th scope="col">Subject</th>
                    <th scope="col">Designation</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($teachers as $key => $data)
                    <tr>
                        <th scope="row">{{ $key + 1 }}</th>
                        <td>{{ $data->name }}</td>
                        <td>{{ $data->email }}</td>
                        <td>{{ isset($data->gender) ? $data->gender : '--' }}</td>
                        <td>
                            {{ isset($data->userTeacherToSubject->subject_name) ? $data->userTeacherToSubject->subject_name : '--' }}
                        </td>
                        <td>
                            {{ isset($data->designation) ? $data->designation : '--' }}
                        </td>
                        <td>
                            <a href="{{ route('admin_check_teacher_list', $data->user_id) }}" class="btn btn-success">
                                Inspect
                            </a>
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
