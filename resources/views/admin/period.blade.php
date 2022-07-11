@extends('admin.main')
@section('content')
    <div class="p-2">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addNewSection">
            Add New Period
        </button>
        <hr>
        <!-- Modal -->
        <div class="modal fade" id="addNewSection" tabindex="-1" aria-labelledby="addNewSectionLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addNewSectionLabel">Add New Section</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="{{ route('add_period') }}" method="post">
                        @csrf
                        <div class="modal-body">
                            <div class="container">
                                <div class="form-group">
                                    <label for="Week_day">Period</label>
                                    <select class="form-select" name="period" required>
                                        <option value="">Select Period</option>
                                        <option value="1st">1st</option>
                                        <option value="2nd">2nd</option>
                                        <option value="3rd">3rd</option>
                                        <option value="4th">4th</option>
                                        <option value="Break">Break</option>
                                        <option value="5th">5th</option>
                                        <option value="6th">6th</option>
                                        <option value="7th">7th</option>
                                        <option value="8th">8th</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="Start_time">Start Time</label>
                                    <input type="time" name="start_time" required class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="End_time">End Time</label>
                                    <input type="time" name="end_time" required class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Add Period</button>
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
                        <th scope="col">Period</th>
                        <th scope="col">Start Time</th>
                        <th scope="col">End Time</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($periods as $key => $period)
                        <tr>
                            <th scope="row">{{ $key + 1 }}</th>
                            <td>{{ $period->period }}</td>
                            <td>{{ $period->start_time }}</td>
                            <td>{{ $period->end_time }}</td>
                            <td>{{ $period->status == 1 ? 'Active' : 'Inactive' }}</td>
                            <td>
                                <button type="button" class="btn btn-info" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#updateModat{{ $period->id }}">
                                    Edit
                                </button>
                            </td>
                        </tr>

                        <!-- update Modal -->
                        <div class="modal fade" id="updateModat{{ $period->id }}" tabindex="-1"
                            aria-labelledby="updateModatLabel{{ $period->id }}" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="updateModatLabel{{ $period->id }}">
                                            Update {{ $period->period }} Period
                                        </h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <form action="{{ route('update_period', $period->id) }}" method="post">
                                        @csrf
                                        <input type="hidden" name="period_id" value="{{ $period->id }}">
                                        <div class="modal-body">
                                            <div class="container">
                                                <div class="form-group">
                                                    <label for="">Period</label>
                                                    <input type="text" name="Period" class="form-control"
                                                        value="{{ $period->period }}" readonly>
                                                </div>
                                                <div class="form-group">
                                                    <label for="Start_time">Start Time</label>
                                                    <input type="time" name="start_time" required class="form-control"
                                                        value="{{ $period->start_time }}">
                                                </div>
                                                <div class="form-group">
                                                    <label for="End_time">End Time</label>
                                                    <input type="time" name="end_time" required class="form-control"
                                                        value="{{ $period->end_time }}">
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
