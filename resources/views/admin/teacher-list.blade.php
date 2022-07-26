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
                            <button type="button" class="btn btn-warning" class="btn btn-primary"
                                        data-bs-toggle="modal" data-bs-target="#updateModat{{ $data->id }}">
                                        Update
                                    </button>
                                </td>
                            </tr>
                            <!-- update Modal -->
                            <div class="modal fade" id="updateModat{{ $data->id }}" tabindex="-1"
                                aria-labelledby="updateModatLabel{{ $data->id }}" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="updateModatLabel{{ $data->id }}">
                                                Update {{ $data->name }}
                                            </h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <form action="{{ route('update_teacher_list') }}" method="post">
                                            @csrf
                                            <input type="hidden" name="user_id" value="{{ $data->user_id }}">
                                            <div class="modal-body">
                                                <div class="form-group">
                                                    <label for="Name">Name</label>
                                                    <input type="text" name="name" class="form-control"
                                                        value="{{ $data->name }}" >
                                                </div>
                                                <div class="form-group">
                                                    <label for="Email">Email</label>
                                                    <input type="text" name="email" class="form-control"
                                                        value="{{ $data->email }}" >
                                                </div>
                                                <div class="form-group">
                                                    <label for="Designation">Designation</label>
                                                    <input type="text" name="designation" class="form-control"
                                                        value="{{ $data->designation }}" >
                                                </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary">Save changes</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
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
