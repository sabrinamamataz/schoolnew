@extends('admin.main')
@php
use App\Models\Section;
use App\Models\StudentAssignSection;
@endphp
@section('content')
    <div class="p-2">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addNewClass">
            Add New Class
        </button>
        <hr>
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
                                    <label for="Number of subjects">Number of subjects</label>
                                    <input type="number" name="capacity" required class="form-control" value="5">
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
                        @php
                            $section_ids = Section::where('class_id', $class->id)->pluck('id');
                            $stdCount = StudentAssignSection::whereIn('section_id', $section_ids)->count();
                        @endphp
                        <tr>
                            <th scope="row">{{ $key + 1 }}</th>
                            <td>{{ $class->class_name }}</td>
                            <td>{{ $stdCount }}</td>
                            <td>{{ $class->capacity }}</td>
                            <td>
                                <button type="button" class="btn btn-info" class="btn btn-primary"
                                    data-bs-toggle="modal" data-bs-target="#updateModat{{ $class->id }}">
                                    Edit
                                </button>
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
                                                    <label for="Number_of_subjects">Number of subjects</label>
                                                    <input type="number" name="capacity" class="form-control"
                                                        value="{{ $class->capacity }}" required>
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
