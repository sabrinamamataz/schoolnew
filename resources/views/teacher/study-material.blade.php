@extends('teacher.main')
@section('content')
    <div class="">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addNewStudymaterial">
            Add New Study Material
        </button>

        <!-- Modal -->
        <div class="modal fade" id="addNewStudymaterial" tabindex="-1" aria-labelledby="addNewStudymaterialLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addNewStudymaterialLabel">Add New Study Material</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="{{ route('add_study_material') }}" method="post">
                        @csrf
                        <div class="modal-body">
                            <div class="container">
                                <div class="form-group">
                                    <label for="Teacher_id">Teacher Id</label>
                                    <input type="text" name="teacher_id" required class="form-control">
                                        
                                </div>
                                <div class="form-group">
                                    <label for="Class_id">Class Id</label>
                                    <input type="text" name="class_id" required class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="Section_id">Section Id</label>
                                    <input type="text" name="section_id" required class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="Doc">Doc</label>
                                    <input type="file" name="doc" required class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Add Study Material</button>
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
                        <th scope="col">Teacher ID</th>
                        <th scope="col">Class ID</th>
                        <th scope="col">Section ID</th>
                        <th scope="col">Doc</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($studymaterials as $key => $studymaterial)
                        <tr>
                            <th scope="row">{{ $key + 1 }}</th>
                            <td>{{ $studymaterial->teacher_id }}</td>
                            <td>{{ $studymaterial->class_id }}</td>
                            <td>{{ $studymaterial->section_id }}</td>
                            <td>{{ $studymaterial->doc }}</td>
                            <td>{{ $studymaterial->status }}</td>
                        
                            {{ isset($data->studymaterialToSection->sectionToClass) ? $data->studymaterialToSection->sectionToClass->class_name : '--' }}
    
                           {{ isset($data->studymaterialToSection->sectionToSection) ? $data->studymaterialToSection->sectionToSection->section_name : '--' }}</td>
                        {{isset($data->studymaterialToSection->sectionToTeacher) ? $data->studymaterialToSection->sectionToTeacher->teacher_name : '--' }}</td>
                        <td>
                                <button type="button" class="btn btn-warning" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#updateModat{{ $studymaterial->id }}">
                                    Update
                                </button>
                                <a href="{{ route('delete_study_material', $studymaterial->id) }}" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>

                        <!-- update Modal -->
                        <div class="modal fade" id="updateModat{{ $studymaterial->id }}" tabindex="-1"
                            aria-labelledby="updateModatLabel{{ $studymaterial->id }}" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="updateModatLabel{{ $studymaterial->id }}">
                                            Update {{ $studymaterial->name }}
                                        </h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                   <form action="{{ route('study_material_update', $studymaterial->id) }}" method="post">
                                        @csrf
                                        <input type="hidden" name="section_id" value="{{ $studymaterial->id }}">
                                        <div class="modal-body">
                                            <div class="container">
                                            <div class="form-group">
                                                    <label for="Teacher_id">Teacher </label>
                                                    <input type="text" name="teacher_id" class="form-control"
                                                        value="{{ $studymaterial->teacher_id }}" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="Class_id">Class </label>
                                                    <input type="text" name="class_id" class="form-control"
                                                        value="{{ $studymaterial->class_id }}" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="Section_id">Section </label>
                                                    <input type="text" name="section_id" class="form-control"
                                                        value="{{ $studymaterial->section_id }}" required>
                                                </div>
                                                
                                                <div class="form-group">
                                                    <label for="Doc">Doc </label>
                                                    <input type="file" name="doc" class="form-control"
                                                        value="{{ $studymaterial->doc }}" required>
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
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
