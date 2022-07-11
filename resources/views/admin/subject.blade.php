@extends('admin.main')
@section('content')
    <div class="p-2">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addNewSubject">
            Add New Subject
        </button>
        <hr>
        <!-- Modal -->
        <div class="modal fade" id="addNewSubject" tabindex="-1" aria-labelledby="addNewSectioubject" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addNewSectioubject">Add New Section</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="{{ route('add_subject') }}" method="post">
                        @csrf
                        <div class="modal-body">
                            <div class="container">
                                <div class="form-group">
                                    <label for="SubjectName">Subject Name</label>
                                    <input type="text" name="subject_name" required class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="credit">Credit</label>
                                    <input type="number" name="credit" required class="form-control" value="3">
                                </div>
                                <div class="form-group">
                                    <label for="passing_mark">Passing Mark</label>
                                    <input type="text" name="passing_mark" required class="form-control" value="30">
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Add Subject</button>
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
                        <th scope="col">Subject Name</th>
                        <th scope="col">Credit</th>
                        <th scope="col">Passing Mark</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($subjects as $key => $subject)
                        <tr>
                            <th scope="row">{{ $key + 1 }}</th>
                            <td>{{ $subject->subject_name }}</td>
                            <td>{{ $subject->credit }}</td>
                            <td>{{ $subject->passing_mark }}</td>
                            <td>{{ $subject->status == 1 ? 'Active' : 'Inactive' }}</td>
                            <td>
                                <button type="button" class="btn btn-info" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#updateModat{{ $subject->id }}">
                                    Edit
                                </button>
                            </td>
                        </tr>

                        <!-- update Modal -->
                        <div class="modal fade" id="updateModat{{ $subject->id }}" tabindex="-1"
                            aria-labelledby="updateModatLabel{{ $subject->id }}" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="updateModatLabel{{ $subject->id }}">
                                            Update {{ $subject->subject_name }}
                                        </h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <form action="{{ route('update_subject', $subject->id) }}" method="post">
                                        @csrf
                                        <input type="hidden" name="subject_id" value="{{ $subject->id }}">
                                        <div class="modal-body">
                                            <div class="container">
                                                <div class="form-group">
                                                    <label for="SubjectName">Subject Name</label>
                                                    <input type="text" name="subject_name" required class="form-control"
                                                        value="{{ $subject->subject_name }}">
                                                </div>
                                                <div class="form-group">
                                                    <label for="credit">Credit</label>
                                                    <input type="number" name="credit" required class="form-control"
                                                        value="{{ $subject->credit }}">
                                                </div>
                                                <div class="form-group">
                                                    <label for="passing_mark">Passing Mark</label>
                                                    <input type="text" name="passing_mark" required class="form-control"
                                                        value="{{ $subject->passing_mark }}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Update Subject</button>
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
