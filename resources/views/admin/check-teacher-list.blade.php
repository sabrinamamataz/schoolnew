@extends('admin.main')
@section('style')
@endsection
@section('content')
    <div class="container mt-2 d-flex justify-content-between">
        <h4>Details of {{ $teacher->name }}
        </h4>
        <a href="{{ route('teacher_list') }}" class="btn btn-danger">Back</a>
    </div>
    <hr>
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="p-3 py-4">
                <div class="text-center">
                    <img src="https://eatopiaworld.com/wp-content/uploads/2022/04/demo-user-1.jpg" width="100"
                        class="rounded-circle">
                </div>

                <div class="text-center">
                    <h5 class="mb-0">{{ $teacher->name }}</h5>
                    <span>{{ $teacherDetails->designation }}</span>

                    <div class="p-4">
                        <span class="h6">Class teacher of:
                            {{ isset($clsTeacher) ? $clsTeacher->sectionToClass->class_name . ', Section: ' . $clsTeacher->section : '--' }}</span>
                        <br>
                        <span>Email: {{ $teacher->email }}</span>
                        <br>
                        <span>Gender: {{ $teacher->gender }}</span>
                        <br>
                        <span>Date of Birth:
                            {{ $teacherDetails->date_of_birth ? $teacherDetails->date_of_birth : '--' }}</span>
                        <br>
                        <span>Subject:
                            {{ isset($teacherDetails->teacherToSubject) ? $teacherDetails->teacherToSubject->subject_name : '--' }}</span>
                        <br>
                        <span>Contact No:
                            {{ $teacherDetails->contact_no ? $teacherDetails->contact_no : '--' }}</span>
                        <br>
                        <span>Address:
                            {{ $teacherDetails->address ? $teacherDetails->address : '--' }}</span>
                        <br>
                        <span>Joining Date:
                            {{ $teacherDetails->joining ? $teacherDetails->joining : '--' }}</span>
                    </div>
                </div>

                <hr>
                <h4>Class Routine</h4>
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
                <hr>
                <h4>Study Materials</h4>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">SL</th>
                            <th scope="col">Class</th>
                            <th scope="col">Section</th>
                            <th scope="col">Title</th>
                            <th scope="col">Doc</th>
                            <th scope="col">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($studyMaterials as $key => $studyMaterial)
                            <tr>
                                <th scope="row">{{ $key + 1 }}</th>
                                <td>{{ $studyMaterial->materialToClass->class_name }}</td>
                                <td>{{ $studyMaterial->materialToSection->section }}</td>
                                <td>{{ $studyMaterial->title }}</td>
                                <td>{{ $studyMaterial->doc }}</td>
                                <td>
                                    @if ($studyMaterial->status == 1)
                                        <span class="text-success">Online</span>
                                    @else
                                        <span class="text-danger">Offline</span>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </div>
@endsection
@section('script')
@endsection
