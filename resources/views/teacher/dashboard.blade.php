@extends('teacher.main')
@php
use App\Models\Subject;
@endphp
@section('content')
    <div class="container-fluid px-4">
        <div class="d-flex justify-content-between">
            <h1 class="mt-4">Teacher Dashboard</h1>
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
                        <label>Designation:</label>
                        <b>
                            {{ isset(auth()->user()->userToTeacher) ? auth()->user()->userToTeacher->designation : '--' }}
                        </b>
                    </p>
                    <p>
                        <label>Subject:</label>
                        <b>
                            {{ isset(auth()->user()->userToTeacher->subject_id) ? Subject::getSubjectName(auth()->user()->userToTeacher->subject_id) : '--' }}
                        </b>
                    </p>
                    <p>
                        <label>Supervisor of Class </label>
                        <b>
                            {{ isset($section_info->sectionToClass->class_name) ? $section_info->sectionToClass->class_name : '--' }}
                            (Section:
                            {{ isset($section_info) ? $section_info->section : '--' }})
                        </b>
                    </p>
                    <p>
                        <label>Email:</label><b> {{ auth()->user()->email }}</b>
                    </p>
                    <p>
                        <label>Address:</label>
                        <b>
                            {{ isset(auth()->user()->userToTeacher->address) ? auth()->user()->userToTeacher->address : '--' }}
                        </b>
                    </p>
                </div>
            </div>
        </div>

        <div class="p=2">
            <h4>todays classes,</h4>
            @if (!empty($new_arr))
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">Period</th>
                            <th scope="col">Class/Section</th>
                            <th scope="col">Subject</th>
                            <th scope="col">Start</th>
                            <th scope="col">End</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($new_arr as $data)
                            <tr>
                                <td>{{ $data['period'] }}</td>
                                <td>{{ $data['cls_sec'] }}</td>
                                <td>{{ $data['subject'] }}</td>
                                <td>{{ $data['start_time'] }}</td>
                                <td>{{ $data['end_time'] }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
                <p>No class found</p>
            @endif
        </div>





    </div>
@endsection
