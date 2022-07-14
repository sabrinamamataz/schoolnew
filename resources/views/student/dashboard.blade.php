@extends('student.main')
@php
use App\Models\ClsPeriod;
use App\Models\Subject;
use App\Models\Teacher;
@endphp
@section('content')
    <div class="container-fluid px-4">
        <div class="d-flex justify-content-between">
            <h1 class="mt-4">Student Dashboard</h1>
            @include('clock')
        </div>
        <hr>
        <div class="row">
            <div class="container row">
                <div class="col-4">
                    <h2>Welcome back </h2>
                    <br>
                    <h2>
                        <b style="color: green;">{{ auth()->user()->name }}</b>
                    </h2>
                </div>

                <div class="col-8">
                    <p>
                        <label>Roll:</label>
                        <b>
                            {{ isset(auth()->user()->userToStudent) ? auth()->user()->userToStudent->student_id : '--' }}
                        </b>
                    </p>
                    <p>
                        <label>Class</label>
                        <b>
                            {{ isset(auth()->user()->userToStudent) ? auth()->user()->userToStudent->class : '--' }}
                        </b>
                    </p>
                    <p>
                        <label>Section:</label>
                        <b>
                            {{ isset(auth()->user()->userToSecAssign->assignSectionToSection) ? auth()->user()->userToSecAssign->assignSectionToSection->section : '--' }}
                        </b>
                    </p>
                    <p>
                        <label>Email:</label><b> {{ auth()->user()->email }}</b>
                    </p>
                    <p>
                        <label>Address:</label>
                        <b>
                            {{ isset(auth()->user()->userToStudent) ? auth()->user()->userToStudent->address : '--' }}
                        </b>
                    </p>
                </div>
            </div>
        </div>
        <hr>

        <div class="p=2">
            <h4>todays classes,</h4>
            @if (isset($routine))
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">Period</th>
                            <th scope="col">Subject</th>
                            <th scope="col">Teacher</th>
                            <th scope="col">Start</th>
                            <th scope="col">End</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            @php
                                $data = ClsPeriod::getStartEndTime(1);
                            @endphp
                            <th scope="row">{{ $data['period'] }}</th>
                            <td>{{ Subject::getSubjectName($routine->period_1_sub_id) }}</td>
                            <td>{{ Teacher::getTeacherName($routine->period_1_t_id) }}</td>
                            <td>{{ $data['start'] }}</td>
                            <td>{{ $data['end'] }}</td>
                        </tr>
                        <tr>
                            @php
                                $data = ClsPeriod::getStartEndTime(2);
                            @endphp
                            <th scope="row">{{ $data['period'] }}</th>
                            <td>{{ Subject::getSubjectName($routine->period_2_sub_id) }}</td>
                            <td>{{ Teacher::getTeacherName($routine->period_2_t_id) }}</td>
                            <td>{{ $data['start'] }}</td>
                            <td>{{ $data['end'] }}</td>
                        </tr>
                        <tr>
                            @php
                                $data = ClsPeriod::getStartEndTime(3);
                            @endphp
                            <th scope="row">{{ $data['period'] }}</th>
                            <td>{{ Subject::getSubjectName($routine->period_3_sub_id) }}</td>
                            <td>{{ Teacher::getTeacherName($routine->period_3_t_id) }}</td>
                            <td>{{ $data['start'] }}</td>
                            <td>{{ $data['end'] }}</td>
                        </tr>
                        <tr>
                            @php
                                $data = ClsPeriod::getStartEndTime(4);
                            @endphp
                            <th scope="row">{{ $data['period'] }}</th>
                            <td>{{ Subject::getSubjectName($routine->period_4_sub_id) }}</td>
                            <td>{{ Teacher::getTeacherName($routine->period_4_t_id) }}</td>
                            <td>{{ $data['start'] }}</td>
                            <td>{{ $data['end'] }}</td>
                        </tr>
                        <tr>
                            @php
                                $data = ClsPeriod::getStartEndTime(5);
                            @endphp
                            <th scope="row">{{ $data['period'] }}</th>
                            <td>{{ Subject::getSubjectName($routine->period_5_sub_id) }}</td>
                            <td>{{ Teacher::getTeacherName($routine->period_5_t_id) }}</td>
                            <td>{{ $data['start'] }}</td>
                            <td>{{ $data['end'] }}</td>
                        </tr>
                        <tr>
                            @php
                                $data = ClsPeriod::getStartEndTime(6);
                            @endphp
                            <th scope="row">{{ $data['period'] }}</th>
                            <td>{{ Subject::getSubjectName($routine->period_6_sub_id) }}</td>
                            <td>{{ Teacher::getTeacherName($routine->period_6_t_id) }}</td>
                            <td>{{ $data['start'] }}</td>
                            <td>{{ $data['end'] }}</td>
                        </tr>
                        <tr>
                            @php
                                $data = ClsPeriod::getStartEndTime(7);
                            @endphp
                            <th scope="row">{{ $data['period'] }}</th>
                            <td>{{ Subject::getSubjectName($routine->period_7_sub_id) }}</td>
                            <td>{{ Teacher::getTeacherName($routine->period_7_t_id) }}</td>
                            <td>{{ $data['start'] }}</td>
                            <td>{{ $data['end'] }}</td>
                        </tr>
                        <tr>
                            @php
                                $data = ClsPeriod::getStartEndTime(8);
                            @endphp
                            <th scope="row">{{ $data['period'] }}</th>
                            <td>{{ Subject::getSubjectName($routine->period_8_sub_id) }}</td>
                            <td>{{ Teacher::getTeacherName($routine->period_8_t_id) }}</td>
                            <td>{{ $data['start'] }}</td>
                            <td>{{ $data['end'] }}</td>
                        </tr>
                    </tbody>
                </table>
            @else
                <p>No class found</p>
            @endif
        </div>
    </div>
@endsection
