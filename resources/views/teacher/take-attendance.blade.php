@extends('teacher.main')
@section('style')
@endsection
@section('content')
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
                        <input type="hidden" id="user_id{{ $key }}" value="{{ $data->s_user_id }}">
                        <tr>
                            <th scope="row">{{ $key + 1 }}</th>
                            <td>{{ $data->attendanceToUser->name }}</td>
                            {{-- <td>{{ $data->present == 1 ? 'Present' : 'Abesnt' }}</td> --}}
                            <td>
                                <select id="present{{ $key }}" class="form-select"
                                    aria-label="Default select example">
                                    <option value="0" class="text-danger">Absent</option>
                                    <option value="1" class="text-success">Present</option>
                                </select>
                            </td>
                        </tr>
                        {{-- <input type="hidden" id="count" value="{{ $key }}"> --}}
                    @endforeach
                </tbody>
            </table>
            <div class="text-end">
                <button type="button" class="btn btn-success" onclick="submitAttendance()">Submit</button>
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
    <script>
        function submitAttendance() {
            var _count = '{{ $key }}';
            console.log($('#user_id2').val());

            const array = [];
            for (let i = 0; i <= _count; i++) {
                array[i] = $('#user_id' + i).val();
                array[i] = $('#present' + i).val();
                console.log($('#present' + i).val())

            }
            console.log(array);
        }
    </script>
@endsection
