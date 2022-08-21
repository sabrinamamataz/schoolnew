@extends('admin.main')
@section('content')
    <div class="p-2">
        <div class="col-md-12">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">SL</th>
                        <th scope="col">Teacher Name</th>
                        <th scope="col">Class</th>
                        <th scope="col">Section</th>
                        <th scope="col">Doc Title</th>
                        <th scope="col">Doc</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($studymaterials as $key => $studymaterial)
                        <tr>
                            <th scope="row">{{ $key + 1 }}</th>
                            <td>{{ $studymaterial->materialToTeacherUser->name }}</td>
                            <td>{{ $studymaterial->materialToClass->class_name }}</td>
                            <td>{{ $studymaterial->materialToSection->section }}</td>
                            <td>{{ $studymaterial->title }}</td>
                            <td>{{ $studymaterial->doc }}</td>
                            <td>
                                @if ($studymaterial->status == 0)
                                    <a href="{{ route('approve_study_materials', $studymaterial->id) }}"
                                        onclick="return confirm('are you sure, you want to approve this doc?')"
                                        class="btn btn-primary">
                                        Approve
                                        </button>
                                    </a>
                                @endif
                                <a href="{{ route('delete_admin_study_material', $studymaterial->id) }}"
                                    onclick="return confirm('are you sure you want to delete this material ?')"
                                    class="btn btn-danger">Delete</a>
                                <a target="_blank" onclick="return confirm('Download this file?')"
                                    href="/files/{{ $studymaterial->doc }}" class="btn btn-success">Download</a>
                                @if ($studymaterial->status == 0)
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
