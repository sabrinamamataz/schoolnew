@extends('admin.main')
@section('content')
<div class="">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addNewClass">
            Add Routine
        </button>

        <!-- Modal -->
        <div class="modal fade" id="addNewClass" tabindex="-1" aria-labelledby="addNewClassLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addNewClassLabel">Add Routine</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="{{ route('add_routine') }}" method="post">
                        @csrf
                        <div class="modal-body">
                            <div class="container">
                                <div class="form-group">
                                    <label for="Section_id">Section_id</label>
                                    <input type="text" name="section_id" required class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="Week_day">Week_day</label>
                                    <input type="text" name="week_day" required class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="Subject_name">Subject_name</label>
                                    <input type="text" name="subject_name" required class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="Start_time">Start_time</label>
                                    <input type="time" name="start_time" required class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="End_time">End_time</label>
                                    <input type="time" name="end_time" required class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="Period">Period</label>
                                    <input type="text" name="period" required class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Add Routine</button>
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
                        <th scope="col">Section_id</th>
                        <th scope="col">Week_day</th>
                        <th scope="col">SUbject_name</th>
                        <th scope="col">Start_time</th>
                        <th scope="col">End_time</th>
                        <th scope="col">Period</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($routines as $key => $routine)
                        <tr>
                            <th scope="row">{{ $key + 1 }}</th>
                            <td>{{ $routine->section_id }}</td>
                            <td>{{ $routine->week_day}}</td>
                            <td>{{ $routine->subject_name }}</td>
                            <td>{{ $routine->start_time }}</td>
                            <td>{{ $routine->end_name }}</td>
                            <td>{{ $routine->period }}</td>
                            <td>
                            <button type="button" class="btn btn-warning" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#updateModat{{ $routine->id }}">
                                    Update
                                
                            </td>
                        </tr>

                        <!-- update Modal -->
                        <div class="modal fade" id="updateModat{{ $routine->id }}" tabindex="-1"
                            aria-labelledby="updateModatLabel{{ $routine>id }}" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="updateModatLabel{{ $routine->id }}">
                                            Update {{ $routine->routine }}
                                        </h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <form action="{{ route('routine_update', $routine->id) }}" method="post">
                                        @csrf
                                        <input type="hidden" name="routine_id" value="{{ $routine->id }}">
                                        <div class="modal-body">
                                            <div class="container">
                                                <div class="form-group">
                                                    <label for="Class_id">Class_id</label>
                                                    <input type="text" name="class_id" class="form-control"
                                                        value="{{ $routine->class_id }}" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="Section_id">Section_id</label>
                                                    <input type="text" name="section_id" class="form-control"
                                                        value="{{ $routine->section_id }}" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="Week_day">Week_day</label>
                                                    <input type="text" name="weeek_day" class="form-control"
                                                        value="{{ $routine->Week_day }}" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="Subject_name">Subject_name</label>
                                                    <input type="text" name="subject_name" class="form-control"
                                                        value="{{ $routine->Subject_name }}" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="Start_time">Start_time</label>
                                                    <input type="time" name="start_time" class="form-control"
                                                        value="{{ $routine->Start_time }}" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="End_time">End_time</label>
                                                    <input type="time" name="end_time" class="form-control"
                                                        value="{{ $routine->End_time }}" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="Period">Period</label>
                                                    <input type="text" name="period" class="form-control"
                                                        value="{{ $routine->Period }}" required>
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

           
