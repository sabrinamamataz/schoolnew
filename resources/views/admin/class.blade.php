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
                                    <label for="Class_name">Class Name</label>
                                    <input type="text" name="class_name" required class="form-control"
                                        placeholder="Class 5,6,7,etc">
                                </div>
                                <div class="form-group">
                                    <label for="Number of students">Number of students</label>
                                    <input type="number" name="number of students" required class="form-control" value="100">
                                </div>
                                <div class="form-group">
                                    <label for="Number of subjects">Number of subjects</label>
                                    <input type="number" name="number of subjects" required class="form-control" value="100">
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
                        <th scope="col">Class Name</th>
                        <th scope="col">Number of students</th>
                        <th scope="col">Number of subjects</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($stclasss as $key => $class)
                        <tr>
                            <th scope="row">{{ $key + 1 }}</th>
                            <td>{{ $class->class_name }}</td>
                            <td>{{ $class->number_of_students }}</td>
                            <td>{{ $class->number_of_subjects }}</td>
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
                                            Update {{ $class->class }}
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
                                                    <label for="Class_name">Class Name</label>
                                                    <input type="text" name="Class_name" class="form-control"
                                                        value="{{ $class->class_name }}" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="Number_of_students">Number_of_students</label>
                                                    <input type="number" name="number_of_students" class="form-control"
                                                        value="{{ $class->number_of_students }}" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="Number_of_subjects">Number_of_subjects</label>
                                                    <input type="number" name="number_of_students" class="form-control"
                                                        value="{{ $class->number_of_subjects }}" required>
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
