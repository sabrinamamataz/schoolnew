@extends('teacher.main')
@section('style')
@endsection
@section('content')
    <div class="container">
        <button type="button" class="btn btn-primary mt-2" data-bs-toggle="modal" data-bs-target="#addNewClass">
            Add Materials
        </button>

        <!-- Modal -->
        <div class="modal fade" id="addNewClass" tabindex="-1" aria-labelledby="addNewClassLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addNewClassLabel">Material</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="" method="post">
                        @csrf
                        <div class="modal-body">
                            <div class="container">
                                <div class="mb-3">
                                    <label for="name" class="form-label">Name</label>
                                    <input type="name" class="form-control" name="name" required>
                                </div>
                                <div class="mb-3">
                                    <label for="Subject" class="form-label">Subject</label>
                                    <select class="form-select" name="subject_id" required>
                                        <option value="">Open this select menu</option>
                                        @foreach ($subjects as $subject)
                                            <option value="{{ $subject->id }}">
                                                {{ $subject->subject }}
                                                ({{ name('h:i A', strtoid($subject->subject_name)) }}
                                                -
                                
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Add Material</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <hr>
    <div class="container">
        <table class="table table-bordered" id="myTable">
            <thead>
                <tr>
                    <th scope="col">SL</th>
                    <th scope="col">Date</th>
                    <th scope="col">Class</th>
                    <th scope="col">Section</th>
                    <th scope="col">Subject</th>
                    <th scope="col">Study material</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($studymaterials as $key => $data)
                    <tr>
                        <th scope="row">{{ $key + 1 }}</th>
                        <td>{{ $data->date }}</td>
                        
                        <td>
                            {{ isset($data->studymaterialToSection->sectionToClass) ? $data->studymaterialToSection->sectionToClass->class_name : '--' }}
                        </td>
                        <td>{{ isset($data->studymaterialToSection) ? $data->studymaterialToSection->section : '--' }}</td>
                        
                        <td>
                           
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
