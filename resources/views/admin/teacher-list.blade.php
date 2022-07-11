@extends('admin.main')
@section('style')
@endsection
@section('content')
    <h4 class="p-2">List of Teachers</h4>
    <hr>
    <div class="container">
        <table class="table table-bordered" id="myTable">
            <thead>
                <tr>
                    <th scope="col">SL</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($teachers as $key => $data)
                    <tr>
                        <th scope="row">{{ $key + 1 }}</th>
                        <td>{{ $data->name }}</td>
                        <td>{{ $data->email }}</td>
                        <td>
                            <a href="#" class="btn btn-success">Inspect</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
@section('script')
@endsection
