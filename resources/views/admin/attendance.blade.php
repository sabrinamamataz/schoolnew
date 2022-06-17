@extends('admin.main')
@section('content')

<div class="">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addNewSection">
            Add New Section
        </button>

        <!-- Modal -->
        <div class="modal fade" id="addNewSection" tabindex="-1" aria-labelledby="addNewSectionLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addNewSectionLabel">Add All Section</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="{{ route('add_attendance') }}" method="post">
                        @csrf
                        <div class="modal-body">
                            <div class="container">
                                <div class="form-group">
                                    <label for="Section_id">Section ID</label>
                                    <input type="text" name="section_id" required class="form-control"
                                        placeholder="Section A,B,C,etc">
                                </div>
                                <div class="form-group">
                                    <label for="Capacity">Capacity</label>
                                    <input type="number" name="capacity" required class="form-control" value="100">
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Add Section</button>
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
                        <th scope="col">Section ID</th>
                        <th scope="col">Capacity</th>
                        
                    </tr>
                </thead>
                <tbody>
                    @foreach ($attendances as $key => $attendance)
                        <tr>
                            <th scope="row">{{ $key + 1 }}</th>
                            <td>{{ $attendance->section_id }}</td>
                            <td>{{ $attendance->capacity }}</td>
                            
                            <td>
                            </tr>
                            @endforeach
                            </tbody>
            </table>
        </div>
    </div>

@endsection