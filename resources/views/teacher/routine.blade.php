@extends('teacher.main')
@section('content')
    <div class="container">
        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th scope="col">Day</th>
                        <th scope="col">Period</th>
                        <th scope="col">Class/Sec</th>
                        <th scope="col">Subject</th>
                        <th scope="col">Start</th>
                        <th scope="col">End</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($arr as $data)
                        <tr>
                            <th scope="row">{{ $data['week_day'] }}</th>
                            <td>{{ $data['period'] }}</td>
                            <td>{{ $data['cls_sec'] }}</td>
                            <td>{{ $data['subject'] }}</td>
                            <td>{{ $data['start_time'] }}</td>
                            <td>{{ $data['end_time'] }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
