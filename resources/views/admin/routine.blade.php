@extends('admin.main')
@section('content')
    <div class="">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addNewClass">
            Add Routine
        </button>

        <!-- Modal -->
        <div class="modal fade" id="addNewClass" tabindex="-1" aria-labelledby="addNewClassLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addNewClassLabel">Add Routine</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="{{ route('add_routine') }}" method="post">
                        @csrf
                        <div class="modal-body">
                            <div class="container">
                                <div class="form-group">
                                    <label for="Section_id">Class/Section</label>
                                    <select class="form-select" name="section_id" required>
                                        <option value="">Select Class/Section</option>
                                        @foreach ($sections as $section)
                                            <option value="{{ $section->id }}">
                                                {{ $section->sectionToClass->class_name . ' - Section: ' . $section->section }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                {{-- <div class="form-group">
                                    <label for="Week_day">Week Day</label>
                                    <select class="form-select" name="week_day" required>
                                        <option value="">Select Week</option>
                                        <option value="Saturday">Saturday</option>
                                        <option value="Sunday">Sunday</option>
                                        <option value="Monday">Monday</option>
                                        <option value="Tuesday">Tuesday</option>
                                        <option value="Wednesday">Wednesday</option>
                                        <option value="Thursday">Thursday</option>
                                        <option value="Friday">Friday</option>
                                    </select>
                                </div> --}}
                                {{-- <div class="form-group">
                                    <label for="Subject_name">Subject</label>
                                    <select class="form-select" name="subject_id" required>
                                        <option value="">Select Subject</option>
                                        @foreach ($subjects as $subject)
                                            <option value="{{ $subject->id }}">
                                                {{ $subject->subject_name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div> --}}
                                {{-- <div class="form-group">
                                    <label for="Period">Period</label>
                                    <select class="form-select" name="period_id" required>
                                        <option value="">Select Period</option>
                                        @foreach ($periods as $period)
                                            <option value="{{ $period->id }}">
                                                {{ $period->period . ' - ' . $period->start_time . ' to ' . $period->start_time }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div> --}}
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Add Routine</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-md-12">
            {{-- <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">SL</th>
                        <th scope="col">Section_id</th>
                        <th scope="col">Week_day</th>
                        <th scope="col">Subject_name</th>
                        <th scope="col">Start_time</th>
                        <th scope="col">End_time</th>
                        <th scope="col">Period</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($routines as $key => $routine)
                        <tr>
                            <th scope="row">{{ $key + 1 }}</th>
                            <td>{{ $routine->section_id }}</td>
                            <td>{{ $routine->week_day }}</td>
                            <td>{{ $routine->subject_name }}</td>
                            <td>{{ $routine->start_time }}</td>
                            <td>{{ $routine->end_time }}</td>
                            <td>{{ $routine->period }}</td>
                            <td>
                                <button type="button" class="btn btn-warning" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#updateModat{{ $routine->id }}">
                                    Update

                            </td>
                        </tr>

                        <!-- update Modal -->
                        <div class="modal fade" id="updateModat{{ $routine->id }}" tabindex="-1"
                            aria-labelledby="updateModatLabel{{ $routine->id }}" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="updateModatLabel{{ $routine->id }}">
                                            Update {{ $routine->routine }}
                                        </h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <form action="{{ route('routine_update', $routine->id) }}" method="post">
                                        @csrf
                                        <input type="hidden" name="routine_id" value="{{ $routine->id }}">
                                        <div class="modal-body">
                                            <div class="container">
                                            </div>
                                            <div class="form-group">
                                                <label for="Section_id">Section_id</label>
                                                <input type="text" name="section_id" class="form-control"
                                                    value="{{ $routine->section_id }}" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="Week_day">Week_day</label>
                                                <input type="text" name="week_day" class="form-control"
                                                    value="{{ $routine->week_day }}" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="Subject_name">Subject_name</label>
                                                <input type="text" name="subject_name" class="form-control"
                                                    value="{{ $routine->subject_name }}" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="Start_time">Start_time</label>
                                                <input type="time" name="start_time" class="form-control"
                                                    value="{{ $routine->start_time }}" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="End_time">End_time</label>
                                                <input type="time" name="end_time" class="form-control"
                                                    value="{{ $routine->end_time }}" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="Period">Period</label>
                                                <input type="text" name="period" class="form-control"
                                                    value="{{ $routine->period }}" required>
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
            </table> --}}

            @foreach ($routines as $routine)
                @php
                    $routineDetails = App\Models\Routine::where('section_id', $routine)->first();
                    // dd($routineDetails);
                @endphp
                <table border="5" cellspacing="0" align="center">
                    <caption>
                        {{ $routineDetails->routineToSection->sectionToClass->class_name . ' - Section: ' . $routineDetails->routineToSection->section }}
                    </caption>
                    <tr class="border">
                        <td class="border" align="center" height="50" width="100"><br>
                            <b>Day/Period</b></br>
                        </td>
                        @foreach ($periods as $period)
                            <td class="border" align="center" height="50" width="100">
                                <b>{{ $period->period }}<br>{{ date('h:i A', strtotime($period->start_time)) }} -
                                    {{ date('h:i A', strtotime($period->end_time)) }}</b>
                            </td>
                        @endforeach
                    </tr>

                    <tr class="border">
                        <td class="border" align="center" height="50">
                            <b>Saturday</b>
                        </td>
                        @php
                            $satDetails = App\Models\Routine::where('section_id', $routine)
                                ->where('week_day', 'Saturday')
                                ->first();
                        @endphp
                        <td class="border" align="center" height="50">{{ $satDetails->period_1_sub_id }}</td>
                        <td class="border" align="center" height="50">{{ $satDetails->period_2_sub_id }}</td>
                        <td class="border" align="center" height="50">{{ $satDetails->period_3_sub_id }}</td>
                        <td class="border" align="center" height="50">{{ $satDetails->period_4_sub_id }}</td>
                        <td class="border" align="center" height="50">{{ $satDetails->period_break }}</td>
                        <td class="border" align="center" height="50">{{ $satDetails->period_5_sub_id }}</td>
                        <td class="border" align="center" height="50">{{ $satDetails->period_6_sub_id }}</td>
                        <td class="border" align="center" height="50">{{ $satDetails->period_7_sub_id }}</td>
                    </tr>
                    <tr class="border">
                        <td class="border" align="center" height="50">
                            <b>Sunday</b>
                        </td>
                        @php
                            $sunDetails = App\Models\Routine::where('section_id', $routine)
                                ->where('week_day', 'Sunday')
                                ->first();
                        @endphp
                        <td class="border" align="center" height="50">{{ $sunDetails->period_1_sub_id }}</td>
                        <td class="border" align="center" height="50">{{ $sunDetails->period_2_sub_id }}</td>
                        <td class="border" align="center" height="50">{{ $sunDetails->period_3_sub_id }}</td>
                        <td class="border" align="center" height="50">{{ $sunDetails->period_4_sub_id }}</td>
                        <td class="border" align="center" height="50">{{ $sunDetails->period_break }}</td>
                        <td class="border" align="center" height="50">{{ $sunDetails->period_5_sub_id }}</td>
                        <td class="border" align="center" height="50">{{ $sunDetails->period_6_sub_id }}</td>
                        <td class="border" align="center" height="50">{{ $sunDetails->period_7_sub_id }}</td>
                    </tr>
                    <tr class="border">
                        <td class="border" align="center" height="50">
                            <b>Monday</b>
                        </td>
                        @php
                            $monDetails = App\Models\Routine::where('section_id', $routine)
                                ->where('week_day', 'Monday')
                                ->first();
                        @endphp
                        <td class="border" align="center" height="50">{{ $monDetails->period_1_sub_id }}</td>
                        <td class="border" align="center" height="50">{{ $monDetails->period_2_sub_id }}</td>
                        <td class="border" align="center" height="50">{{ $monDetails->period_3_sub_id }}</td>
                        <td class="border" align="center" height="50">{{ $monDetails->period_4_sub_id }}</td>
                        <td class="border" align="center" height="50">{{ $monDetails->period_break }}</td>
                        <td class="border" align="center" height="50">{{ $monDetails->period_5_sub_id }}</td>
                        <td class="border" align="center" height="50">{{ $monDetails->period_6_sub_id }}</td>
                        <td class="border" align="center" height="50">{{ $monDetails->period_7_sub_id }}</td>
                    </tr>
                    <tr class="border">
                        <td class="border" align="center" height="50">
                            <b>Tuesday</b>
                        </td>
                        @php
                            $tusDetails = App\Models\Routine::where('section_id', $routine)
                                ->where('week_day', 'Tuesday')
                                ->first();
                        @endphp
                        <td class="border" align="center" height="50">{{ $tusDetails->period_1_sub_id }}</td>
                        <td class="border" align="center" height="50">{{ $tusDetails->period_2_sub_id }}</td>
                        <td class="border" align="center" height="50">{{ $tusDetails->period_3_sub_id }}</td>
                        <td class="border" align="center" height="50">{{ $tusDetails->period_4_sub_id }}</td>
                        <td class="border" align="center" height="50">{{ $tusDetails->period_break }}</td>
                        <td class="border" align="center" height="50">{{ $tusDetails->period_5_sub_id }}</td>
                        <td class="border" align="center" height="50">{{ $tusDetails->period_6_sub_id }}</td>
                        <td class="border" align="center" height="50">{{ $tusDetails->period_7_sub_id }}</td>
                    </tr>
                    <tr class="border">
                        <td class="border" align="center" height="50">
                            <b>Wednesday</b>
                        </td>
                        @php
                            $wedDetails = App\Models\Routine::where('section_id', $routine)
                                ->where('week_day', 'Wednesday')
                                ->first();
                        @endphp
                        <td class="border" align="center" height="50">{{ $wedDetails->period_1_sub_id }}</td>
                        <td class="border" align="center" height="50">{{ $wedDetails->period_2_sub_id }}</td>
                        <td class="border" align="center" height="50">{{ $wedDetails->period_3_sub_id }}</td>
                        <td class="border" align="center" height="50">{{ $wedDetails->period_4_sub_id }}</td>
                        <td class="border" align="center" height="50">{{ $wedDetails->period_break }}</td>
                        <td class="border" align="center" height="50">{{ $wedDetails->period_5_sub_id }}</td>
                        <td class="border" align="center" height="50">{{ $wedDetails->period_6_sub_id }}</td>
                        <td class="border" align="center" height="50">{{ $wedDetails->period_7_sub_id }}</td>
                    </tr>
                    <tr class="border">

                        @php
                            $thuDetails = App\Models\Routine::where('section_id', $routine)
                                ->where('week_day', 'Thursday')
                                ->first();
                        @endphp
                        <td class="border" align="center" height="50">
                            <button type="button" class="btn" data-bs-toggle="modal"
                                data-bs-target="#thursday{{ $thuDetails->id }}">
                                <b>Thursday</b>
                            </button>
                        </td>
                        <td class="border" align="center" height="50">{{ $thuDetails->period_1_sub_id }}</td>
                        <td class="border" align="center" height="50">{{ $thuDetails->period_2_sub_id }}</td>
                        <td class="border" align="center" height="50">{{ $thuDetails->period_3_sub_id }}</td>
                        <td class="border" align="center" height="50">{{ $thuDetails->period_4_sub_id }}</td>
                        <td class="border" align="center" height="50">{{ $thuDetails->period_break }}</td>
                        <td class="border" align="center" height="50">{{ $thuDetails->period_5_sub_id }}</td>
                        <td class="border" align="center" height="50">{{ $thuDetails->period_6_sub_id }}</td>
                        <td class="border" align="center" height="50">{{ $thuDetails->period_7_sub_id }}</td>
                    </tr>
                </table>
                <br>

                <!-- Modal -->
                <div class="modal fade" id="thursday{{ $thuDetails->id }}" tabindex="-1"
                    aria-labelledby="thursday{{ $thuDetails->id }}Label" aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="thursday{{ $thuDetails->id }}Label">
                                    Thursday
                                    ({{ $routineDetails->routineToSection->sectionToClass->class_name . ' - Section: ' . $routineDetails->routineToSection->section }})
                                </h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <form>
                                @csrf
                                <div class="modal-body">
                                    {{-- 1st --}}
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">1st Period</label>
                                        <div class="row">
                                            <div class="col">
                                                <select class="form-select" name="subject_id" required>
                                                    <option value="">Select Subject</option>
                                                    @foreach ($subjects as $subject)
                                                        <option value="{{ $subject->id }}">
                                                            {{ $subject->subject_name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col">
                                                <select class="form-select" name="teacher_id" required>
                                                    <option value="">Select Teacher</option>
                                                    @foreach ($teachers as $teacher)
                                                        <option value="{{ $teacher->id }}">
                                                            {{ $teacher->name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- 2nd --}}
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">2nd Period</label>
                                        <div class="row">
                                            <div class="col">
                                                <select class="form-select" name="subject_id" required>
                                                    <option value="">Select Subject</option>
                                                    @foreach ($subjects as $subject)
                                                        <option value="{{ $subject->id }}">
                                                            {{ $subject->subject_name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col">
                                                <select class="form-select" name="teacher_id" required>
                                                    <option value="">Select Teacher</option>
                                                    @foreach ($teachers as $teacher)
                                                        <option value="{{ $teacher->id }}">
                                                            {{ $teacher->name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- 3rd --}}
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">3rd Period</label>
                                        <div class="row">
                                            <div class="col">
                                                <select class="form-select" name="subject_id" required>
                                                    <option value="">Select Subject</option>
                                                    @foreach ($subjects as $subject)
                                                        <option value="{{ $subject->id }}">
                                                            {{ $subject->subject_name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col">
                                                <select class="form-select" name="teacher_id" required>
                                                    <option value="">Select Teacher</option>
                                                    @foreach ($teachers as $teacher)
                                                        <option value="{{ $teacher->id }}">
                                                            {{ $teacher->name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- 4th --}}
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">4th Period</label>
                                        <div class="row">
                                            <div class="col">
                                                <select class="form-select" name="subject_id" required>
                                                    <option value="">Select Subject</option>
                                                    @foreach ($subjects as $subject)
                                                        <option value="{{ $subject->id }}">
                                                            {{ $subject->subject_name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col">
                                                <select class="form-select" name="teacher_id" required>
                                                    <option value="">Select Teacher</option>
                                                    @foreach ($teachers as $teacher)
                                                        <option value="{{ $teacher->id }}">
                                                            {{ $teacher->name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- 5th --}}
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">5th Period</label>
                                        <div class="row">
                                            <div class="col">
                                                <select class="form-select" name="subject_id" required>
                                                    <option value="">Select Subject</option>
                                                    @foreach ($subjects as $subject)
                                                        <option value="{{ $subject->id }}">
                                                            {{ $subject->subject_name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col">
                                                <select class="form-select" name="teacher_id" required>
                                                    <option value="">Select Teacher</option>
                                                    @foreach ($teachers as $teacher)
                                                        <option value="{{ $teacher->id }}">
                                                            {{ $teacher->name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- 6th --}}
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">6th Period</label>
                                        <div class="row">
                                            <div class="col">
                                                <select class="form-select" name="subject_id" required>
                                                    <option value="">Select Subject</option>
                                                    @foreach ($subjects as $subject)
                                                        <option value="{{ $subject->id }}">
                                                            {{ $subject->subject_name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col">
                                                <select class="form-select" name="teacher_id" required>
                                                    <option value="">Select Teacher</option>
                                                    @foreach ($teachers as $teacher)
                                                        <option value="{{ $teacher->id }}">
                                                            {{ $teacher->name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- 7th --}}
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">7th Period</label>
                                        <div class="row">
                                            <div class="col">
                                                <select class="form-select" name="subject_id" required>
                                                    <option value="">Select Subject</option>
                                                    @foreach ($subjects as $subject)
                                                        <option value="{{ $subject->id }}">
                                                            {{ $subject->subject_name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col">
                                                <select class="form-select" name="teacher_id" required>
                                                    <option value="">Select Teacher</option>
                                                    @foreach ($teachers as $teacher)
                                                        <option value="{{ $teacher->id }}">
                                                            {{ $teacher->name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- 8th --}}
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">8th Period</label>
                                        <div class="row">
                                            <div class="col">
                                                <select class="form-select" name="subject_id" required>
                                                    <option value="">Select Subject</option>
                                                    @foreach ($subjects as $subject)
                                                        <option value="{{ $subject->id }}">
                                                            {{ $subject->subject_name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col">
                                                <select class="form-select" name="teacher_id" required>
                                                    <option value="">Select Teacher</option>
                                                    @foreach ($teachers as $teacher)
                                                        <option value="{{ $teacher->id }}">
                                                            {{ $teacher->name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
