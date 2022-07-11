@extends('admin.main')
@section('content')
    @php
    use App\Models\Subject;
    use App\Models\Teacher;
    use App\Models\Routine;
    @endphp
    <div class="container">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary mt-2" data-bs-toggle="modal" data-bs-target="#addNewClass">
            Add Routine
        </button>
        <hr>
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
            @foreach ($routines as $routine)
                @php
                    $routineDetails = Routine::where('section_id', $routine)->first();
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
                        @php
                            $satDetails = Routine::where('section_id', $routine)
                                ->where('week_day', 'Saturday')
                                ->first();
                        @endphp
                        <td class="border" align="center" height="50">
                            <button type="button" class="btn" data-bs-toggle="modal"
                                data-bs-target="#saturday{{ $satDetails->id }}">
                                <b>Saturday</b>
                            </button>
                        </td>
                        <td class="border" align="center" height="50">
                            {{ Subject::getSubjectName($satDetails->period_1_sub_id) }}
                            <br>
                            <button type="button" class="btn teacherOnClick" period-number="1"
                                routine-id="{{ $satDetails->id }}" week-day="Saturday" data-bs-toggle="modal"
                                data-bs-target="#teacherSelector">
                                {{ Teacher::getTeacherName($satDetails->period_1_t_id) }}
                            </button>
                        </td>
                        <td class="border" align="center" height="50">
                            {{ Subject::getSubjectName($satDetails->period_2_sub_id) }}
                            <br>
                            <button type="button" class="btn teacherOnClick" period-number="2"
                                routine-id="{{ $satDetails->id }}" week-day="Saturday" data-bs-toggle="modal"
                                data-bs-target="#teacherSelector">
                                {{ Teacher::getTeacherName($satDetails->period_2_t_id) }}
                            </button>
                        </td>
                        <td class="border" align="center" height="50">
                            {{ Subject::getSubjectName($satDetails->period_3_sub_id) }}
                            <br>
                            <button type="button" class="btn teacherOnClick" period-number="3"
                                routine-id="{{ $satDetails->id }}" week-day="Saturday" data-bs-toggle="modal"
                                data-bs-target="#teacherSelector">
                                {{ Teacher::getTeacherName($satDetails->period_3_t_id) }}
                            </button>
                        </td>
                        <td class="border" align="center" height="50">
                            {{ Subject::getSubjectName($satDetails->period_4_sub_id) }}
                            <br>
                            <button type="button" class="btn teacherOnClick" period-number="4"
                                routine-id="{{ $satDetails->id }}" week-day="Saturday" data-bs-toggle="modal"
                                data-bs-target="#teacherSelector">
                                {{ Teacher::getTeacherName($satDetails->period_4_t_id) }}
                            </button>
                        </td>
                        <td class="border" align="center" height="50">
                            <span class="text-success">Lunch</span>
                        </td>
                        <td class="border" align="center" height="50">
                            {{ Subject::getSubjectName($satDetails->period_5_sub_id) }}
                            <br>
                            <button type="button" class="btn teacherOnClick" period-number="5"
                                routine-id="{{ $satDetails->id }}" week-day="Saturday" data-bs-toggle="modal"
                                data-bs-target="#teacherSelector">
                                {{ Teacher::getTeacherName($satDetails->period_5_t_id) }}
                            </button>
                        </td>
                        <td class="border" align="center" height="50">
                            {{ Subject::getSubjectName($satDetails->period_6_sub_id) }}
                            <br>
                            <button type="button" class="btn teacherOnClick" period-number="6"
                                routine-id="{{ $satDetails->id }}" week-day="Saturday" data-bs-toggle="modal"
                                data-bs-target="#teacherSelector">
                                {{ Teacher::getTeacherName($satDetails->period_6_t_id) }}
                            </button>
                        </td>
                        <td class="border" align="center" height="50">
                            {{ Subject::getSubjectName($satDetails->period_7_sub_id) }}
                            <br>
                            <button type="button" class="btn teacherOnClick" period-number="7"
                                routine-id="{{ $satDetails->id }}" week-day="Saturday" data-bs-toggle="modal"
                                data-bs-target="#teacherSelector">
                                {{ Teacher::getTeacherName($satDetails->period_7_t_id) }}
                            </button>
                        </td>
                        <td class="border" align="center" height="50">
                            {{ Subject::getSubjectName($satDetails->period_8_sub_id) }}
                            <br>
                            <button type="button" class="btn teacherOnClick" period-number="8"
                                routine-id="{{ $satDetails->id }}" week-day="Saturday" data-bs-toggle="modal"
                                data-bs-target="#teacherSelector">
                                {{ Teacher::getTeacherName($satDetails->period_8_t_id) }}
                            </button>
                        </td>
                    </tr>
                    <tr class="border">
                        @php
                            $sunDetails = Routine::where('section_id', $routine)
                                ->where('week_day', 'Sunday')
                                ->first();
                        @endphp
                        <td class="border" align="center" height="50">
                            <button type="button" class="btn" data-bs-toggle="modal"
                                data-bs-target="#sunday{{ $sunDetails->id }}">
                                <b>Sunday</b>
                            </button>
                        </td>
                        <td class="border" align="center" height="50">
                            {{ Subject::getSubjectName($sunDetails->period_1_sub_id) }}
                            <br>
                            <button type="button" class="btn teacherOnClick" period-number="1"
                                routine-id="{{ $sunDetails->id }}" week-day="Sunday" data-bs-toggle="modal"
                                data-bs-target="#teacherSelector">
                                {{ Teacher::getTeacherName($sunDetails->period_1_t_id) }}
                            </button>
                        </td>
                        <td class="border" align="center" height="50">
                            {{ Subject::getSubjectName($sunDetails->period_2_sub_id) }}
                            <br>
                            <button type="button" class="btn teacherOnClick" period-number="2"
                                routine-id="{{ $sunDetails->id }}" week-day="Sunday" data-bs-toggle="modal"
                                data-bs-target="#teacherSelector">
                                {{ Teacher::getTeacherName($sunDetails->period_2_t_id) }}
                            </button>
                        </td>
                        <td class="border" align="center" height="50">
                            {{ Subject::getSubjectName($sunDetails->period_3_sub_id) }}
                            <br>
                            <button type="button" class="btn teacherOnClick" period-number="3"
                                routine-id="{{ $sunDetails->id }}" week-day="Sunday" data-bs-toggle="modal"
                                data-bs-target="#teacherSelector">
                                {{ Teacher::getTeacherName($sunDetails->period_3_t_id) }}
                            </button>
                        </td>
                        <td class="border" align="center" height="50">
                            {{ Subject::getSubjectName($sunDetails->period_4_sub_id) }}
                            <br>
                            <button type="button" class="btn teacherOnClick" period-number="4"
                                routine-id="{{ $sunDetails->id }}" week-day="Sunday" data-bs-toggle="modal"
                                data-bs-target="#teacherSelector">
                                {{ Teacher::getTeacherName($sunDetails->period_4_t_id) }}
                            </button>
                        </td>
                        <td class="border" align="center" height="50">
                            <span class="text-success">Lunch</span>
                        </td>
                        <td class="border" align="center" height="50">
                            {{ Subject::getSubjectName($sunDetails->period_5_sub_id) }}
                            <br>
                            <button type="button" class="btn teacherOnClick" period-number="5"
                                routine-id="{{ $sunDetails->id }}" week-day="Sunday" data-bs-toggle="modal"
                                data-bs-target="#teacherSelector">
                                {{ Teacher::getTeacherName($sunDetails->period_5_t_id) }}
                            </button>
                        </td>
                        <td class="border" align="center" height="50">
                            {{ Subject::getSubjectName($sunDetails->period_6_sub_id) }}
                            <br>
                            <button type="button" class="btn teacherOnClick" period-number="6"
                                routine-id="{{ $sunDetails->id }}" week-day="Sunday" data-bs-toggle="modal"
                                data-bs-target="#teacherSelector">
                                {{ Teacher::getTeacherName($sunDetails->period_6_t_id) }}
                            </button>
                        </td>
                        <td class="border" align="center" height="50">
                            {{ Subject::getSubjectName($sunDetails->period_7_sub_id) }}
                            <br>
                            <button type="button" class="btn teacherOnClick" period-number="7"
                                routine-id="{{ $sunDetails->id }}" week-day="Sunday" data-bs-toggle="modal"
                                data-bs-target="#teacherSelector">
                                {{ Teacher::getTeacherName($sunDetails->period_7_t_id) }}
                            </button>
                        </td>
                        <td class="border" align="center" height="50">
                            {{ Subject::getSubjectName($sunDetails->period_8_sub_id) }}
                            <br>
                            <button type="button" class="btn teacherOnClick" period-number="8"
                                routine-id="{{ $sunDetails->id }}" week-day="Sunday" data-bs-toggle="modal"
                                data-bs-target="#teacherSelector">
                                {{ Teacher::getTeacherName($sunDetails->period_8_t_id) }}
                            </button>
                        </td>
                    </tr>
                    <tr class="border">
                        @php
                            $monDetails = Routine::where('section_id', $routine)
                                ->where('week_day', 'Monday')
                                ->first();
                        @endphp
                        <td class="border" align="center" height="50">
                            <button type="button" class="btn" data-bs-toggle="modal"
                                data-bs-target="#monday{{ $monDetails->id }}">
                                <b>Monday</b>
                            </button>
                        </td>
                        <td class="border" align="center" height="50">
                            {{ Subject::getSubjectName($monDetails->period_1_sub_id) }}
                            <br>
                            <button type="button" class="btn teacherOnClick" period-number="1"
                                routine-id="{{ $monDetails->id }}" week-day="Monday" data-bs-toggle="modal"
                                data-bs-target="#teacherSelector">
                                {{ Teacher::getTeacherName($monDetails->period_1_t_id) }}
                            </button>
                        </td>
                        <td class="border" align="center" height="50">
                            {{ Subject::getSubjectName($monDetails->period_2_sub_id) }}
                            <br>
                            <button type="button" class="btn teacherOnClick" period-number="2"
                                routine-id="{{ $monDetails->id }}" week-day="Monday" data-bs-toggle="modal"
                                data-bs-target="#teacherSelector">
                                {{ Teacher::getTeacherName($monDetails->period_2_t_id) }}
                            </button>
                        </td>
                        <td class="border" align="center" height="50">
                            {{ Subject::getSubjectName($monDetails->period_3_sub_id) }}
                            <br>
                            <button type="button" class="btn teacherOnClick" period-number="3"
                                routine-id="{{ $monDetails->id }}" week-day="Monday" data-bs-toggle="modal"
                                data-bs-target="#teacherSelector">
                                {{ Teacher::getTeacherName($monDetails->period_3_t_id) }}
                            </button>
                        </td>
                        <td class="border" align="center" height="50">
                            {{ Subject::getSubjectName($monDetails->period_4_sub_id) }}
                            <br>
                            <button type="button" class="btn teacherOnClick" period-number="4"
                                routine-id="{{ $monDetails->id }}" week-day="Monday" data-bs-toggle="modal"
                                data-bs-target="#teacherSelector">
                                {{ Teacher::getTeacherName($monDetails->period_4_t_id) }}
                            </button>
                        </td>
                        <td class="border" align="center" height="50">
                            <span class="text-success">Lunch</span>
                        </td>
                        <td class="border" align="center" height="50">
                            {{ Subject::getSubjectName($monDetails->period_5_sub_id) }}
                            <br>
                            <button type="button" class="btn teacherOnClick" period-number="5"
                                routine-id="{{ $monDetails->id }}" week-day="Monday" data-bs-toggle="modal"
                                data-bs-target="#teacherSelector">
                                {{ Teacher::getTeacherName($monDetails->period_5_t_id) }}
                            </button>
                        </td>
                        <td class="border" align="center" height="50">
                            {{ Subject::getSubjectName($monDetails->period_6_sub_id) }}
                            <br>
                            <button type="button" class="btn teacherOnClick" period-number="6"
                                routine-id="{{ $monDetails->id }}" week-day="Monday" data-bs-toggle="modal"
                                data-bs-target="#teacherSelector">
                                {{ Teacher::getTeacherName($monDetails->period_6_t_id) }}
                            </button>
                        </td>
                        <td class="border" align="center" height="50">
                            {{ Subject::getSubjectName($monDetails->period_7_sub_id) }}
                            <br>
                            <button type="button" class="btn teacherOnClick" period-number="7"
                                routine-id="{{ $monDetails->id }}" week-day="Monday" data-bs-toggle="modal"
                                data-bs-target="#teacherSelector">
                                {{ Teacher::getTeacherName($monDetails->period_7_t_id) }}
                            </button>
                        </td>
                        <td class="border" align="center" height="50">
                            {{ Subject::getSubjectName($monDetails->period_8_sub_id) }}
                            <br>
                            <button type="button" class="btn teacherOnClick" period-number="8"
                                routine-id="{{ $monDetails->id }}" week-day="Monday" data-bs-toggle="modal"
                                data-bs-target="#teacherSelector">
                                {{ Teacher::getTeacherName($monDetails->period_8_t_id) }}
                            </button>
                        </td>
                    </tr>
                    <tr class="border">
                        @php
                            $tusDetails = Routine::where('section_id', $routine)
                                ->where('week_day', 'Tuesday')
                                ->first();
                        @endphp
                        <td class="border" align="center" height="50">
                            <button type="button" class="btn" data-bs-toggle="modal"
                                data-bs-target="#tuesday{{ $tusDetails->id }}">
                                <b>Tuesday</b>
                            </button>
                        </td>
                        <td class="border" align="center" height="50">
                            {{ Subject::getSubjectName($tusDetails->period_1_sub_id) }}
                            <br>
                            <button type="button" class="btn teacherOnClick" period-number="1"
                                routine-id="{{ $tusDetails->id }}" week-day="Tuesday" data-bs-toggle="modal"
                                data-bs-target="#teacherSelector">
                                {{ Teacher::getTeacherName($tusDetails->period_1_t_id) }}
                            </button>
                        </td>
                        <td class="border" align="center" height="50">
                            {{ Subject::getSubjectName($tusDetails->period_2_sub_id) }}
                            <br>
                            <button type="button" class="btn teacherOnClick" period-number="2"
                                routine-id="{{ $tusDetails->id }}" week-day="Tuesday" data-bs-toggle="modal"
                                data-bs-target="#teacherSelector">
                                {{ Teacher::getTeacherName($tusDetails->period_2_t_id) }}
                            </button>
                        </td>
                        <td class="border" align="center" height="50">
                            {{ Subject::getSubjectName($tusDetails->period_3_sub_id) }}
                            <br>
                            <button type="button" class="btn teacherOnClick" period-number="3"
                                routine-id="{{ $tusDetails->id }}" week-day="Tuesday" data-bs-toggle="modal"
                                data-bs-target="#teacherSelector">
                                {{ Teacher::getTeacherName($tusDetails->period_3_t_id) }}
                            </button>
                        </td>
                        <td class="border" align="center" height="50">
                            {{ Subject::getSubjectName($tusDetails->period_4_sub_id) }}
                            <br>
                            <button type="button" class="btn teacherOnClick" period-number="4"
                                routine-id="{{ $tusDetails->id }}" week-day="Tuesday" data-bs-toggle="modal"
                                data-bs-target="#teacherSelector">
                                {{ Teacher::getTeacherName($tusDetails->period_4_t_id) }}
                            </button>
                        </td>
                        <td class="border" align="center" height="50">
                            <span class="text-success">Lunch</span>
                        </td>
                        <td class="border" align="center" height="50">
                            {{ Subject::getSubjectName($tusDetails->period_5_sub_id) }}
                            <br>
                            <button type="button" class="btn teacherOnClick" period-number="5"
                                routine-id="{{ $tusDetails->id }}" week-day="Tuesday" data-bs-toggle="modal"
                                data-bs-target="#teacherSelector">
                                {{ Teacher::getTeacherName($tusDetails->period_5_t_id) }}
                            </button>
                        </td>
                        <td class="border" align="center" height="50">
                            {{ Subject::getSubjectName($tusDetails->period_6_sub_id) }}
                            <br>
                            <button type="button" class="btn teacherOnClick" period-number="6"
                                routine-id="{{ $tusDetails->id }}" week-day="Tuesday" data-bs-toggle="modal"
                                data-bs-target="#teacherSelector">
                                {{ Teacher::getTeacherName($tusDetails->period_6_t_id) }}
                            </button>
                        </td>
                        <td class="border" align="center" height="50">
                            {{ Subject::getSubjectName($tusDetails->period_7_sub_id) }}
                            <br>
                            <button type="button" class="btn teacherOnClick" period-number="7"
                                routine-id="{{ $tusDetails->id }}" week-day="Tuesday" data-bs-toggle="modal"
                                data-bs-target="#teacherSelector">
                                {{ Teacher::getTeacherName($tusDetails->period_7_t_id) }}
                            </button>
                        </td>
                        <td class="border" align="center" height="50">
                            {{ Subject::getSubjectName($tusDetails->period_8_sub_id) }}
                            <br>
                            <button type="button" class="btn teacherOnClick" period-number="8"
                                routine-id="{{ $tusDetails->id }}" week-day="Tuesday" data-bs-toggle="modal"
                                data-bs-target="#teacherSelector">
                                {{ Teacher::getTeacherName($tusDetails->period_8_t_id) }}
                            </button>
                        </td>
                    </tr>
                    <tr class="border">
                        @php
                            $wedDetails = Routine::where('section_id', $routine)
                                ->where('week_day', 'Wednesday')
                                ->first();
                        @endphp
                        <td class="border" align="center" height="50">
                            <button type="button" class="btn" data-bs-toggle="modal"
                                data-bs-target="#wednesday{{ $wedDetails->id }}">
                                <b>Wednesday</b>
                            </button>
                        </td>
                        <td class="border" align="center" height="50">
                            {{ Subject::getSubjectName($wedDetails->period_1_sub_id) }}
                            <br>
                            <button type="button" class="btn teacherOnClick" period-number="1"
                                routine-id="{{ $wedDetails->id }}" week-day="Wednesday" data-bs-toggle="modal"
                                data-bs-target="#teacherSelector">
                                {{ Teacher::getTeacherName($wedDetails->period_1_t_id) }}
                            </button>
                        </td>
                        <td class="border" align="center" height="50">
                            {{ Subject::getSubjectName($wedDetails->period_2_sub_id) }}
                            <br>
                            <button type="button" class="btn teacherOnClick" period-number="2"
                                routine-id="{{ $wedDetails->id }}" week-day="Wednesday" data-bs-toggle="modal"
                                data-bs-target="#teacherSelector">
                                {{ Teacher::getTeacherName($wedDetails->period_2_t_id) }}
                            </button>
                        </td>
                        <td class="border" align="center" height="50">
                            {{ Subject::getSubjectName($wedDetails->period_3_sub_id) }}
                            <br>
                            <button type="button" class="btn teacherOnClick" period-number="3"
                                routine-id="{{ $wedDetails->id }}" week-day="Wednesday" data-bs-toggle="modal"
                                data-bs-target="#teacherSelector">
                                {{ Teacher::getTeacherName($wedDetails->period_3_t_id) }}
                            </button>
                        </td>
                        <td class="border" align="center" height="50">
                            {{ Subject::getSubjectName($wedDetails->period_4_sub_id) }}
                            <br>
                            <button type="button" class="btn teacherOnClick" period-number="4"
                                routine-id="{{ $wedDetails->id }}" week-day="Wednesday" data-bs-toggle="modal"
                                data-bs-target="#teacherSelector">
                                {{ Teacher::getTeacherName($wedDetails->period_4_t_id) }}
                            </button>
                        </td>
                        <td class="border" align="center" height="50">
                            <span class="text-success">Lunch</span>
                        </td>
                        <td class="border" align="center" height="50">
                            {{ Subject::getSubjectName($wedDetails->period_5_sub_id) }}
                            <br>
                            <button type="button" class="btn teacherOnClick" period-number="5"
                                routine-id="{{ $wedDetails->id }}" week-day="Wednesday" data-bs-toggle="modal"
                                data-bs-target="#teacherSelector">
                                {{ Teacher::getTeacherName($wedDetails->period_5_t_id) }}
                            </button>
                        </td>
                        <td class="border" align="center" height="50">
                            {{ Subject::getSubjectName($wedDetails->period_6_sub_id) }}
                            <br>
                            <button type="button" class="btn teacherOnClick" period-number="6"
                                routine-id="{{ $wedDetails->id }}" week-day="Wednesday" data-bs-toggle="modal"
                                data-bs-target="#teacherSelector">
                                {{ Teacher::getTeacherName($wedDetails->period_6_t_id) }}
                            </button>
                        </td>
                        <td class="border" align="center" height="50">
                            {{ Subject::getSubjectName($wedDetails->period_7_sub_id) }}
                            <br>
                            <button type="button" class="btn teacherOnClick" period-number="7"
                                routine-id="{{ $wedDetails->id }}" week-day="Wednesday" data-bs-toggle="modal"
                                data-bs-target="#teacherSelector">
                                {{ Teacher::getTeacherName($wedDetails->period_7_t_id) }}
                            </button>
                        </td>
                        <td class="border" align="center" height="50">
                            {{ Subject::getSubjectName($wedDetails->period_8_sub_id) }}
                            <br>
                            <button type="button" class="btn teacherOnClick" period-number="8"
                                routine-id="{{ $wedDetails->id }}" week-day="Wednesday" data-bs-toggle="modal"
                                data-bs-target="#teacherSelector">
                                {{ Teacher::getTeacherName($wedDetails->period_8_t_id) }}
                            </button>
                        </td>
                    </tr>
                    <tr class="border">
                        @php
                            $thuDetails = Routine::where('section_id', $routine)
                                ->where('week_day', 'Thursday')
                                ->first();
                        @endphp
                        <td class="border" align="center" height="50">
                            <button type="button" class="btn" data-bs-toggle="modal"
                                data-bs-target="#thursday{{ $thuDetails->id }}">
                                <b>Thursday</b>
                            </button>
                        </td>
                        <td class="border" align="center" height="50">
                            {{ Subject::getSubjectName($thuDetails->period_1_sub_id) }}
                            <br>
                            <button type="button" class="btn teacherOnClick" period-number="1"
                                routine-id="{{ $thuDetails->id }}" week-day="Thursday" data-bs-toggle="modal"
                                data-bs-target="#teacherSelector">
                                {{ Teacher::getTeacherName($thuDetails->period_1_t_id) }}
                            </button>
                        </td>
                        <td class="border" align="center" height="50">
                            {{ Subject::getSubjectName($thuDetails->period_2_sub_id) }}
                            <br>
                            <button type="button" class="btn teacherOnClick" period-number="2"
                                routine-id="{{ $thuDetails->id }}" week-day="Thursday" data-bs-toggle="modal"
                                data-bs-target="#teacherSelector">
                                {{ Teacher::getTeacherName($thuDetails->period_2_t_id) }}
                            </button>
                        </td>
                        <td class="border" align="center" height="50">
                            {{ Subject::getSubjectName($thuDetails->period_3_sub_id) }}
                            <br>
                            <button type="button" class="btn teacherOnClick" period-number="3"
                                routine-id="{{ $thuDetails->id }}" week-day="Thursday" data-bs-toggle="modal"
                                data-bs-target="#teacherSelector">
                                {{ Teacher::getTeacherName($thuDetails->period_3_t_id) }}
                            </button>
                        </td>
                        <td class="border" align="center" height="50">
                            {{ Subject::getSubjectName($thuDetails->period_4_sub_id) }}
                            <br>
                            <button type="button" class="btn teacherOnClick" period-number="4"
                                routine-id="{{ $thuDetails->id }}" week-day="Thursday" data-bs-toggle="modal"
                                data-bs-target="#teacherSelector">
                                {{ Teacher::getTeacherName($thuDetails->period_4_t_id) }}
                            </button>
                        </td>
                        <td class="border" align="center" height="50">
                            <span class="text-success">Lunch</span>
                        </td>
                        <td class="border" align="center" height="50">
                            {{ Subject::getSubjectName($thuDetails->period_5_sub_id) }}
                            <br>
                            <button type="button" class="btn teacherOnClick" period-number="5"
                                routine-id="{{ $thuDetails->id }}" week-day="Thursday" data-bs-toggle="modal"
                                data-bs-target="#teacherSelector">
                                {{ Teacher::getTeacherName($thuDetails->period_5_t_id) }}
                            </button>
                        </td>
                        <td class="border" align="center" height="50">
                            {{ Subject::getSubjectName($thuDetails->period_6_sub_id) }}
                            <br>
                            <button type="button" class="btn teacherOnClick" period-number="6"
                                routine-id="{{ $thuDetails->id }}" week-day="Thursday" data-bs-toggle="modal"
                                data-bs-target="#teacherSelector">
                                {{ Teacher::getTeacherName($thuDetails->period_6_t_id) }}
                            </button>
                        </td>
                        <td class="border" align="center" height="50">
                            {{ Subject::getSubjectName($thuDetails->period_7_sub_id) }}
                            <br>
                            <button type="button" class="btn teacherOnClick" period-number="7"
                                routine-id="{{ $thuDetails->id }}" week-day="Thursday" data-bs-toggle="modal"
                                data-bs-target="#teacherSelector">
                                {{ Teacher::getTeacherName($thuDetails->period_7_t_id) }}
                            </button>
                        </td>
                        <td class="border" align="center" height="50">
                            {{ Subject::getSubjectName($thuDetails->period_8_sub_id) }}
                            <br>
                            <button type="button" class="btn teacherOnClick" period-number="8"
                                routine-id="{{ $thuDetails->id }}" week-day="Thursday" data-bs-toggle="modal"
                                data-bs-target="#teacherSelector">
                                {{ Teacher::getTeacherName($thuDetails->period_8_t_id) }}
                            </button>
                        </td>
                    </tr>
                </table>
                <br>

                {{-- teacher selector --}}
                <div class="modal fade" id="teacherSelector" tabindex="-1" aria-labelledby="teacherSelectorLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="teacherSelectorLabel">
                                    Update Teacher
                                </h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <form action="{{ route('routine_update_teacher') }}" method="post">
                                @csrf
                                <input type="hidden" id="t_selector_r_id" name="routine_id" value="0">
                                <input type="hidden" id="t_selector_p_no" name="period" value="0">
                                <input type="hidden" id="t_selector_week_day" name="week_day" value="null">
                                <div class="modal-body">
                                    <div class="mb-3">
                                        <div class="row">
                                            <div class="col">
                                                <select class="form-select" name="t_id" required>
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
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- saturday Modal -->
                <div class="modal fade" id="saturday{{ $satDetails->id }}" tabindex="-1"
                    aria-labelledby="saturday{{ $satDetails->id }}Label" aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="saturday{{ $satDetails->id }}Label">
                                    Saturday
                                    ({{ $routineDetails->routineToSection->sectionToClass->class_name . ' - Section: ' . $routineDetails->routineToSection->section }})
                                </h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <form action="{{ route('routine_update_week_day') }}" method="post">
                                @csrf
                                <input type="hidden" name="routine_id" value="{{ $satDetails->id }}">
                                <div class="modal-body">
                                    {{-- 1st --}}
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">1st Period</label>
                                        <div class="row">
                                            <div class="col">
                                                <select class="form-select" name="period_1_sub_id" required>
                                                    <option value="">Select Subject</option>
                                                    @foreach ($subjects as $subject)
                                                        <option value="{{ $subject->id }}"
                                                            {{ $satDetails->period_1_sub_id == $subject->id ? 'selected' : '' }}>
                                                            {{ $subject->subject_name }}
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
                                                <select class="form-select" name="period_2_sub_id" required>
                                                    <option value="">Select Subject</option>
                                                    @foreach ($subjects as $subject)
                                                        <option value="{{ $subject->id }}"
                                                            {{ $satDetails->period_2_sub_id == $subject->id ? 'selected' : '' }}>
                                                            {{ $subject->subject_name }}
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
                                                <select class="form-select" name="period_3_sub_id" required>
                                                    <option value="">Select Subject</option>
                                                    @foreach ($subjects as $subject)
                                                        <option value="{{ $subject->id }}"
                                                            {{ $satDetails->period_3_sub_id == $subject->id ? 'selected' : '' }}>
                                                            {{ $subject->subject_name }}
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
                                                <select class="form-select" name="period_4_sub_id" required>
                                                    <option value="">Select Subject</option>
                                                    @foreach ($subjects as $subject)
                                                        <option value="{{ $subject->id }}"
                                                            {{ $satDetails->period_4_sub_id == $subject->id ? 'selected' : '' }}>
                                                            {{ $subject->subject_name }}
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
                                                <select class="form-select" name="period_5_sub_id" required>
                                                    <option value="">Select Subject</option>
                                                    @foreach ($subjects as $subject)
                                                        <option value="{{ $subject->id }}"
                                                            {{ $satDetails->period_5_sub_id == $subject->id ? 'selected' : '' }}>
                                                            {{ $subject->subject_name }}
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
                                                <select class="form-select" name="period_6_sub_id" required>
                                                    <option value="">Select Subject</option>
                                                    @foreach ($subjects as $subject)
                                                        <option value="{{ $subject->id }}"
                                                            {{ $satDetails->period_6_sub_id == $subject->id ? 'selected' : '' }}>
                                                            {{ $subject->subject_name }}
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
                                                <select class="form-select" name="period_7_sub_id" required>
                                                    <option value="">Select Subject</option>
                                                    @foreach ($subjects as $subject)
                                                        <option value="{{ $subject->id }}"
                                                            {{ $satDetails->period_7_sub_id == $subject->id ? 'selected' : '' }}>
                                                            {{ $subject->subject_name }}
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
                                                <select class="form-select" name="period_8_sub_id" required>
                                                    <option value="">Select Subject</option>
                                                    @foreach ($subjects as $subject)
                                                        <option value="{{ $subject->id }}"
                                                            {{ $satDetails->period_8_sub_id == $subject->id ? 'selected' : '' }}>
                                                            {{ $subject->subject_name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- sunday Modal -->
                <div class="modal fade" id="sunday{{ $sunDetails->id }}" tabindex="-1"
                    aria-labelledby="sunday{{ $sunDetails->id }}Label" aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="sunday{{ $sunDetails->id }}Label">
                                    Sunday
                                    ({{ $routineDetails->routineToSection->sectionToClass->class_name . ' - Section: ' . $routineDetails->routineToSection->section }})
                                </h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <form action="{{ route('routine_update_week_day') }}" method="post">
                                @csrf
                                <input type="hidden" name="routine_id" value="{{ $sunDetails->id }}">
                                <div class="modal-body">
                                    {{-- 1st --}}
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">1st Period</label>
                                        <div class="row">
                                            <div class="col">
                                                <select class="form-select" name="period_1_sub_id" required>
                                                    <option value="">Select Subject</option>
                                                    @foreach ($subjects as $subject)
                                                        <option value="{{ $subject->id }}"
                                                            {{ $sunDetails->period_1_sub_id == $subject->id ? 'selected' : '' }}>
                                                            {{ $subject->subject_name }}
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
                                                <select class="form-select" name="period_2_sub_id" required>
                                                    <option value="">Select Subject</option>
                                                    @foreach ($subjects as $subject)
                                                        <option value="{{ $subject->id }}"
                                                            {{ $sunDetails->period_2_sub_id == $subject->id ? 'selected' : '' }}>
                                                            {{ $subject->subject_name }}
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
                                                <select class="form-select" name="period_3_sub_id" required>
                                                    <option value="">Select Subject</option>
                                                    @foreach ($subjects as $subject)
                                                        <option value="{{ $subject->id }}"
                                                            {{ $sunDetails->period_3_sub_id == $subject->id ? 'selected' : '' }}>
                                                            {{ $subject->subject_name }}
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
                                                <select class="form-select" name="period_4_sub_id" required>
                                                    <option value="">Select Subject</option>
                                                    @foreach ($subjects as $subject)
                                                        <option value="{{ $subject->id }}"
                                                            {{ $sunDetails->period_4_sub_id == $subject->id ? 'selected' : '' }}>
                                                            {{ $subject->subject_name }}
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
                                                <select class="form-select" name="period_5_sub_id" required>
                                                    <option value="">Select Subject</option>
                                                    @foreach ($subjects as $subject)
                                                        <option value="{{ $subject->id }}"
                                                            {{ $sunDetails->period_5_sub_id == $subject->id ? 'selected' : '' }}>
                                                            {{ $subject->subject_name }}
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
                                                <select class="form-select" name="period_6_sub_id" required>
                                                    <option value="">Select Subject</option>
                                                    @foreach ($subjects as $subject)
                                                        <option value="{{ $subject->id }}"
                                                            {{ $sunDetails->period_6_sub_id == $subject->id ? 'selected' : '' }}>
                                                            {{ $subject->subject_name }}
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
                                                <select class="form-select" name="period_7_sub_id" required>
                                                    <option value="">Select Subject</option>
                                                    @foreach ($subjects as $subject)
                                                        <option value="{{ $subject->id }}"
                                                            {{ $sunDetails->period_7_sub_id == $subject->id ? 'selected' : '' }}>
                                                            {{ $subject->subject_name }}
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
                                                <select class="form-select" name="period_8_sub_id" required>
                                                    <option value="">Select Subject</option>
                                                    @foreach ($subjects as $subject)
                                                        <option value="{{ $subject->id }}"
                                                            {{ $sunDetails->period_8_sub_id == $subject->id ? 'selected' : '' }}>
                                                            {{ $subject->subject_name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- monday Modal -->
                <div class="modal fade" id="monday{{ $monDetails->id }}" tabindex="-1"
                    aria-labelledby="monday{{ $monDetails->id }}Label" aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="monday{{ $monDetails->id }}Label">
                                    Monday
                                    ({{ $routineDetails->routineToSection->sectionToClass->class_name . ' - Section: ' . $routineDetails->routineToSection->section }})
                                </h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <form action="{{ route('routine_update_week_day') }}" method="post">
                                @csrf
                                <input type="hidden" name="routine_id" value="{{ $monDetails->id }}">
                                <div class="modal-body">
                                    {{-- 1st --}}
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">1st Period</label>
                                        <div class="row">
                                            <div class="col">
                                                <select class="form-select" name="period_1_sub_id" required>
                                                    <option value="">Select Subject</option>
                                                    @foreach ($subjects as $subject)
                                                        <option value="{{ $subject->id }}"
                                                            {{ $monDetails->period_1_sub_id == $subject->id ? 'selected' : '' }}>
                                                            {{ $subject->subject_name }}
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
                                                <select class="form-select" name="period_2_sub_id" required>
                                                    <option value="">Select Subject</option>
                                                    @foreach ($subjects as $subject)
                                                        <option value="{{ $subject->id }}"
                                                            {{ $monDetails->period_2_sub_id == $subject->id ? 'selected' : '' }}>
                                                            {{ $subject->subject_name }}
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
                                                <select class="form-select" name="period_3_sub_id" required>
                                                    <option value="">Select Subject</option>
                                                    @foreach ($subjects as $subject)
                                                        <option value="{{ $subject->id }}"
                                                            {{ $monDetails->period_3_sub_id == $subject->id ? 'selected' : '' }}>
                                                            {{ $subject->subject_name }}
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
                                                <select class="form-select" name="period_4_sub_id" required>
                                                    <option value="">Select Subject</option>
                                                    @foreach ($subjects as $subject)
                                                        <option value="{{ $subject->id }}"
                                                            {{ $monDetails->period_4_sub_id == $subject->id ? 'selected' : '' }}>
                                                            {{ $subject->subject_name }}
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
                                                <select class="form-select" name="period_5_sub_id" required>
                                                    <option value="">Select Subject</option>
                                                    @foreach ($subjects as $subject)
                                                        <option value="{{ $subject->id }}"
                                                            {{ $monDetails->period_5_sub_id == $subject->id ? 'selected' : '' }}>
                                                            {{ $subject->subject_name }}
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
                                                <select class="form-select" name="period_6_sub_id" required>
                                                    <option value="">Select Subject</option>
                                                    @foreach ($subjects as $subject)
                                                        <option value="{{ $subject->id }}"
                                                            {{ $monDetails->period_6_sub_id == $subject->id ? 'selected' : '' }}>
                                                            {{ $subject->subject_name }}
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
                                                <select class="form-select" name="period_7_sub_id" required>
                                                    <option value="">Select Subject</option>
                                                    @foreach ($subjects as $subject)
                                                        <option value="{{ $subject->id }}"
                                                            {{ $monDetails->period_7_sub_id == $subject->id ? 'selected' : '' }}>
                                                            {{ $subject->subject_name }}
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
                                                <select class="form-select" name="period_8_sub_id" required>
                                                    <option value="">Select Subject</option>
                                                    @foreach ($subjects as $subject)
                                                        <option value="{{ $subject->id }}"
                                                            {{ $monDetails->period_8_sub_id == $subject->id ? 'selected' : '' }}>
                                                            {{ $subject->subject_name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- tuesday Modal -->
                <div class="modal fade" id="tuesday{{ $tusDetails->id }}" tabindex="-1"
                    aria-labelledby="tuesday{{ $tusDetails->id }}Label" aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="tuesday{{ $tusDetails->id }}Label">
                                    Tuesday
                                    ({{ $routineDetails->routineToSection->sectionToClass->class_name . ' - Section: ' . $routineDetails->routineToSection->section }})
                                </h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <form action="{{ route('routine_update_week_day') }}" method="post">
                                @csrf
                                <input type="hidden" name="routine_id" value="{{ $tusDetails->id }}">
                                <div class="modal-body">
                                    {{-- 1st --}}
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">1st Period</label>
                                        <div class="row">
                                            <div class="col">
                                                <select class="form-select" name="period_1_sub_id" required>
                                                    <option value="">Select Subject</option>
                                                    @foreach ($subjects as $subject)
                                                        <option value="{{ $subject->id }}"
                                                            {{ $tusDetails->period_1_sub_id == $subject->id ? 'selected' : '' }}>
                                                            {{ $subject->subject_name }}
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
                                                <select class="form-select" name="period_2_sub_id" required>
                                                    <option value="">Select Subject</option>
                                                    @foreach ($subjects as $subject)
                                                        <option value="{{ $subject->id }}"
                                                            {{ $tusDetails->period_2_sub_id == $subject->id ? 'selected' : '' }}>
                                                            {{ $subject->subject_name }}
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
                                                <select class="form-select" name="period_3_sub_id" required>
                                                    <option value="">Select Subject</option>
                                                    @foreach ($subjects as $subject)
                                                        <option value="{{ $subject->id }}"
                                                            {{ $tusDetails->period_3_sub_id == $subject->id ? 'selected' : '' }}>
                                                            {{ $subject->subject_name }}
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
                                                <select class="form-select" name="period_4_sub_id" required>
                                                    <option value="">Select Subject</option>
                                                    @foreach ($subjects as $subject)
                                                        <option value="{{ $subject->id }}"
                                                            {{ $tusDetails->period_4_sub_id == $subject->id ? 'selected' : '' }}>
                                                            {{ $subject->subject_name }}
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
                                                <select class="form-select" name="period_5_sub_id" required>
                                                    <option value="">Select Subject</option>
                                                    @foreach ($subjects as $subject)
                                                        <option value="{{ $subject->id }}"
                                                            {{ $tusDetails->period_5_sub_id == $subject->id ? 'selected' : '' }}>
                                                            {{ $subject->subject_name }}
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
                                                <select class="form-select" name="period_6_sub_id" required>
                                                    <option value="">Select Subject</option>
                                                    @foreach ($subjects as $subject)
                                                        <option value="{{ $subject->id }}"
                                                            {{ $tusDetails->period_6_sub_id == $subject->id ? 'selected' : '' }}>
                                                            {{ $subject->subject_name }}
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
                                                <select class="form-select" name="period_7_sub_id" required>
                                                    <option value="">Select Subject</option>
                                                    @foreach ($subjects as $subject)
                                                        <option value="{{ $subject->id }}"
                                                            {{ $tusDetails->period_7_sub_id == $subject->id ? 'selected' : '' }}>
                                                            {{ $subject->subject_name }}
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
                                                <select class="form-select" name="period_8_sub_id" required>
                                                    <option value="">Select Subject</option>
                                                    @foreach ($subjects as $subject)
                                                        <option value="{{ $subject->id }}"
                                                            {{ $tusDetails->period_8_sub_id == $subject->id ? 'selected' : '' }}>
                                                            {{ $subject->subject_name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- wednesday Modal -->
                <div class="modal fade" id="wednesday{{ $wedDetails->id }}" tabindex="-1"
                    aria-labelledby="wednesday{{ $wedDetails->id }}Label" aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="wednesday{{ $wedDetails->id }}Label">
                                    Wednesday
                                    ({{ $routineDetails->routineToSection->sectionToClass->class_name . ' - Section: ' . $routineDetails->routineToSection->section }})
                                </h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <form action="{{ route('routine_update_week_day') }}" method="post">
                                @csrf
                                <input type="hidden" name="routine_id" value="{{ $wedDetails->id }}">
                                <div class="modal-body">
                                    {{-- 1st --}}
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">1st Period</label>
                                        <div class="row">
                                            <div class="col">
                                                <select class="form-select" name="period_1_sub_id" required>
                                                    <option value="">Select Subject</option>
                                                    @foreach ($subjects as $subject)
                                                        <option value="{{ $subject->id }}"
                                                            {{ $wedDetails->period_1_sub_id == $subject->id ? 'selected' : '' }}>
                                                            {{ $subject->subject_name }}
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
                                                <select class="form-select" name="period_2_sub_id" required>
                                                    <option value="">Select Subject</option>
                                                    @foreach ($subjects as $subject)
                                                        <option value="{{ $subject->id }}"
                                                            {{ $wedDetails->period_2_sub_id == $subject->id ? 'selected' : '' }}>
                                                            {{ $subject->subject_name }}
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
                                                <select class="form-select" name="period_3_sub_id" required>
                                                    <option value="">Select Subject</option>
                                                    @foreach ($subjects as $subject)
                                                        <option value="{{ $subject->id }}"
                                                            {{ $wedDetails->period_3_sub_id == $subject->id ? 'selected' : '' }}>
                                                            {{ $subject->subject_name }}
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
                                                <select class="form-select" name="period_4_sub_id" required>
                                                    <option value="">Select Subject</option>
                                                    @foreach ($subjects as $subject)
                                                        <option value="{{ $subject->id }}"
                                                            {{ $wedDetails->period_4_sub_id == $subject->id ? 'selected' : '' }}>
                                                            {{ $subject->subject_name }}
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
                                                <select class="form-select" name="period_5_sub_id" required>
                                                    <option value="">Select Subject</option>
                                                    @foreach ($subjects as $subject)
                                                        <option value="{{ $subject->id }}"
                                                            {{ $wedDetails->period_5_sub_id == $subject->id ? 'selected' : '' }}>
                                                            {{ $subject->subject_name }}
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
                                                <select class="form-select" name="period_6_sub_id" required>
                                                    <option value="">Select Subject</option>
                                                    @foreach ($subjects as $subject)
                                                        <option value="{{ $subject->id }}"
                                                            {{ $wedDetails->period_6_sub_id == $subject->id ? 'selected' : '' }}>
                                                            {{ $subject->subject_name }}
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
                                                <select class="form-select" name="period_7_sub_id" required>
                                                    <option value="">Select Subject</option>
                                                    @foreach ($subjects as $subject)
                                                        <option value="{{ $subject->id }}"
                                                            {{ $wedDetails->period_7_sub_id == $subject->id ? 'selected' : '' }}>
                                                            {{ $subject->subject_name }}
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
                                                <select class="form-select" name="period_8_sub_id" required>
                                                    <option value="">Select Subject</option>
                                                    @foreach ($subjects as $subject)
                                                        <option value="{{ $subject->id }}"
                                                            {{ $wedDetails->period_8_sub_id == $subject->id ? 'selected' : '' }}>
                                                            {{ $subject->subject_name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- thursday Modal -->
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
                            <form action="{{ route('routine_update_week_day') }}" method="post">
                                @csrf
                                <input type="hidden" name="routine_id" value="{{ $thuDetails->id }}">
                                <div class="modal-body">
                                    {{-- 1st --}}
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">1st Period</label>
                                        <div class="row">
                                            <div class="col">
                                                <select class="form-select" name="period_1_sub_id" required>
                                                    <option value="">Select Subject</option>
                                                    @foreach ($subjects as $subject)
                                                        <option value="{{ $subject->id }}"
                                                            {{ $thuDetails->period_1_sub_id == $subject->id ? 'selected' : '' }}>
                                                            {{ $subject->subject_name }}
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
                                                <select class="form-select" name="period_2_sub_id" required>
                                                    <option value="">Select Subject</option>
                                                    @foreach ($subjects as $subject)
                                                        <option value="{{ $subject->id }}"
                                                            {{ $thuDetails->period_2_sub_id == $subject->id ? 'selected' : '' }}>
                                                            {{ $subject->subject_name }}
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
                                                <select class="form-select" name="period_3_sub_id" required>
                                                    <option value="">Select Subject</option>
                                                    @foreach ($subjects as $subject)
                                                        <option value="{{ $subject->id }}"
                                                            {{ $thuDetails->period_3_sub_id == $subject->id ? 'selected' : '' }}>
                                                            {{ $subject->subject_name }}
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
                                                <select class="form-select" name="period_4_sub_id" required>
                                                    <option value="">Select Subject</option>
                                                    @foreach ($subjects as $subject)
                                                        <option value="{{ $subject->id }}"
                                                            {{ $thuDetails->period_4_sub_id == $subject->id ? 'selected' : '' }}>
                                                            {{ $subject->subject_name }}
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
                                                <select class="form-select" name="period_5_sub_id" required>
                                                    <option value="">Select Subject</option>
                                                    @foreach ($subjects as $subject)
                                                        <option value="{{ $subject->id }}"
                                                            {{ $thuDetails->period_5_sub_id == $subject->id ? 'selected' : '' }}>
                                                            {{ $subject->subject_name }}
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
                                                <select class="form-select" name="period_6_sub_id" required>
                                                    <option value="">Select Subject</option>
                                                    @foreach ($subjects as $subject)
                                                        <option value="{{ $subject->id }}"
                                                            {{ $thuDetails->period_6_sub_id == $subject->id ? 'selected' : '' }}>
                                                            {{ $subject->subject_name }}
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
                                                <select class="form-select" name="period_7_sub_id" required>
                                                    <option value="">Select Subject</option>
                                                    @foreach ($subjects as $subject)
                                                        <option value="{{ $subject->id }}"
                                                            {{ $thuDetails->period_7_sub_id == $subject->id ? 'selected' : '' }}>
                                                            {{ $subject->subject_name }}
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
                                                <select class="form-select" name="period_8_sub_id" required>
                                                    <option value="">Select Subject</option>
                                                    @foreach ($subjects as $subject)
                                                        <option value="{{ $subject->id }}"
                                                            {{ $thuDetails->period_8_sub_id == $subject->id ? 'selected' : '' }}>
                                                            {{ $subject->subject_name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <hr>
            @endforeach
        </div>
    </div>
@endsection
@section('script')
    <script>
        $(".teacherOnClick").on('click', function() {
            var _period = $(this).attr("period-number");
            var _routine_id = $(this).attr("routine-id");
            var _week_day = $(this).attr("week-day");
            $('#t_selector_p_no').val(_period);
            $('#t_selector_r_id').val(_routine_id);
            $('#t_selector_week_day').val(_week_day);
        });
    </script>
@endsection
