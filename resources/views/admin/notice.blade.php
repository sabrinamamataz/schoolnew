@extends('admin.main')
@section('content')
    <div class="m-2">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addNewNotice">
            Add New Notice
        </button>
        <hr>
        <!-- Modal -->
        <div class="modal fade" id="addNewNotice" tabindex="-1" aria-labelledby="addNewNotice" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addNewNoticeLabel">Add New Notice</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="{{ route('add_notice') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-body">
                            <div class="container">
                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <input type="text" class="form-control" name="title" required>
                                </div>
                                <div class="form-group">
                                    <label for="date">Date</label>
                                    <input type="datetime-local" class="form-control" name="date" required>
                                </div>
                                <div class="form-group">
                                    <label for="details">Details</label>
                                    <textarea class="form-control" name="details" cols="30" rows="10"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Add Notice</button>
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
                        <th scope="col">Title</th>
                        <th scope="col">Details</th>
                        <th scope="col">Date</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($notices as $key => $notice)
                        <tr>
                            <th scope="row">{{ $key + 1 }}</th>
                            <th>{{ $notice->title }}</th>
                            <td>{{ substr($notice->details, 0, 100) }}...</td>
                            <td>{{ $notice->date }}</td>
                            <td>
                                <button type="button" class="btn btn-warning" class="btn btn-primary"
                                    data-bs-toggle="modal" data-bs-target="#updateModat{{ $notice->id }}">
                                    Update
                                </button>
                                <a href="{{ route('delete_notice', $notice->id) }}"
                                    onclick="return confirm('are you sure ?')" class="btn btn-danger">
                                    Delete
                                </a>
                            </td>
                        </tr>

                        <!-- update Modal -->
                        <div class="modal fade" id="updateModat{{ $notice->id }}" tabindex="-1"
                            aria-labelledby="updateModatLabel{{ $notice->id }}" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="updateModatLabel{{ $notice->id }}">
                                            Update {{ $notice->name }}
                                        </h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <form action="{{ route('notice_update', $notice->id) }}" method="post">
                                        @csrf
                                        <input type="hidden" name="notice_id" value="{{ $notice->id }}">
                                        <div class="modal-body">
                                            <div class="container">
                                                <div class="form-group">
                                                    <label for="Title">Title </label>
                                                    <input type="text" name="title" class="form-control"
                                                        value="{{ $notice->title }}" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="Details">Details </label>

                                                    <textarea class="form-control" name="details" cols="30" rows="10">{{ $notice->details }}</textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label for="Date">Date </label>
                                                    <input type="date" name="date" class="form-control"
                                                        value="{{ $notice->date }}" required>
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
