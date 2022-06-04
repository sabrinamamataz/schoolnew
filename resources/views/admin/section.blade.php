@extends('admin.main')
@section('content')
<div class="container">
        <div class="col-md-12">
            <div class="card">
                <!-- @admin('admin.header') -->
                @if (Session::has('success'))
                    <div class="alert alert-success">{{ Session::get('success') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif
              
                @if (Session::has('error'))
                    <div class="alert alert-danger">{{ Session::get('error') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif
        </div>
        <div class="card-header">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                    <h4>All New Section</h4>
                </button>
            
                <!-- Modal -->
                
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Add New Staff</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                
 <form action="{{ route('add_section') }}" method="post">
        @csrf
        <div class="container">
            <div class="form-group">
                <label for="Class_id">Class_id</label>
                <input type="text" name="class_id" required class="form-control">
            </div>
            <div class="form-group">
                <label for="Teacher_id">Teacher_id</label>
                <input type="text" name="teacher_id" required class="form-control">
            </div>
            <div class="form-group">
                <label for="Section">Section</label>
                <input type="text" name="section" required class="form-control">
            </div>
            <div class="form-group">
                <label for="Student_capacity">Student_capacity</label>
                <input type="number" name="student_capacity" required class="form-control">
            </div>
            <div class="form-group">
                <label for="Shift">Shift</label>
                <input type="text" name="shift" required class="form-control">

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Add Section</button>
            </div>
        </div>
    </form>


    <div class="card-body">
        <div class="col-md-12">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">SL</th>
                        <th scope="col">Class_id</th>
                        <th scope="col">Teacher_id</th>
                        <th scope="col">Section</th>
                        <th scope="col">Student_capacity</th>
                        <th scope="col">Shift</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($sections as $key => $section)
                        <tr>
                            <th scope="row">{{ $key + 1 }}</th>
                            <td>{{ $section->class_id }}</td>
                            <td>{{ $section->teacher_id }}</td>
                            <td>{{ $section->section }}</td>
                            <td>{{ $section->student_capasity }}</td>
                            <td>{{ $section->shift }}</td>
                            <td>
                                <a href="{{ route('delete_section', $section->id) }}" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
