@extends('admin.main')
@section('content')
<div class="">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addNewClass">
            Add New Class
        </button>

        <!-- Modal -->
        <div class="modal fade" id="addNewClass" tabindex="-1" aria-labelledby="addNewClassLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addNewClassLabel">Add New Class</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="{{ route('add_class') }}" method="post">
                        @csrf
                        <div class="modal-body">
                            <div class="container">
                                <div class="form-group">
                                    <label for="Class_name">Class_name</label>
                                    <input type="text" name="Class_name" required class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="Capacity">Capacity</label>
                                    <input type="number" name="capacity" required class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="Status">Status</label>
                                    <input type="text" name="status" required class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Add Class</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-md-12">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">SL</th>
                        <th scope="col">Class_name</th>
                        <th scope="col">Capacity</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($stclasss as $key => $class)
                        <tr>
                            <th scope="row">{{ $key + 1 }}</th>
                            <td>{{ $class->class_name }}</td>
                            <td>{{ $class->capacity}}</td>
                            <td>{{ $class->status }}</td>
                            <td>
                                <button type="button" class="btn btn-warning" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#updateModat{{ $class->id }}">
                                    Update
                                </button>
                                <a href="{{ route('delete_class', $class->id) }}" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>

                        <!-- update Modal -->
                        <div class="modal fade" id="updateModat{{ $class->id }}" tabindex="-1"
                            aria-labelledby="updateModatLabel{{ $class->id }}" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="updateModatLabel{{ $class->id }}">
                                            Update  {{ $class->class }}
                                        </h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <form action="{{ route('class_update', $class->id) }}" method="post">
                                        @csrf
                                        <input type="hidden" name="class_id" value="{{ $class->id }}">
                                        <div class="modal-body">
                                            <div class="container">
                                                <div class="form-group">
                                                    <label for="Class_name">Class_name</label>
                                                    <input type="text" name="Class_name" class="form-control"
                                                        value="{{ $class->class_name }}" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="Capacity">Capacity</label>
                                                    <input type="number" name="capacity" class="form-control"
                                                        value="{{ $class->capacity }}" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="Status">Status</label>
                                                    <input type="text" name="status" class="form-control"
                                                        value="{{ $class->status }}" required>
                                                </div>
                                            </div>
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
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection