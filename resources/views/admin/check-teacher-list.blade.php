@extends('admin.main')
@section('style')
@endsection
@section('content')
    <div class="container mt-2 d-flex justify-content-between">
        <h4> Teacher list of
            {{ $teachers->name . ' | ' . $teachers->email . ' | ' . $teachers->subject . ' | ' . $teachers->designation . ' | ' . $teachers->contact_no . ' | ' . $teachers->address . ' |  ' }}
        </h4>
        <a href="{{ route('teacher_list') }}" class="btn btn-danger">Back</a>
    </div>
    <hr>
    <div class="container">
        <table class="table table-bordered" id="myTable">
            <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Subject</th>
                    <th scope="col">Designation</th>
                    <th scope="col">Contact No</th>
                    <th scope="col">Address</th>

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
                            
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
@section('script')
@endsection
