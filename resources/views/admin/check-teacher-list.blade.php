@extends('admin.main')
@section('style')
@endsection
@section('content')
    <div class="container mt-2 d-flex justify-content-between">
        <h4> Teacher list of
            {{ $teacher->name . ' | ' . $teacher->email . ' |  }}
        </h4>
        <a href="{{ route('teacher_list') }}" class="btn btn-danger">Back</a>
    </div>
    <hr>
    <div class="container">
        <table class="table table-bordered" id="myTable">
            <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Subject</th>
                     <th scope="col">Designation</th>
                    <th scope="col">Contact No</th>

                </tr>
            </thead>
            <tbody>
               
    </div>
@endsection
@section('script')
@endsection
