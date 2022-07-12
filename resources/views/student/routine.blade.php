@php
use App\Models\Subject;
use App\Models\Teacher;
use App\Models\Routine;

$routineDetails = Routine::where('section_id', $routine)->first();
@endphp
@extends('student.main')
@section('content')
    <div class="container">
        <div class="col-12 d-flex justify-content-between m-2">
            @if ($section)
                <h4>
                    Routine of: {{ $section->sectionToClass->class_name . ' - Section: ' . $section->section }}
                    ||
                    Student Name: {{ auth()->user()->name }}
                </h4>
            @endif
            <button class="btn btn-info" onclick="window.print()">Print</button>
        </div>
        @if ($routine != 0 && isset($routineDetails))
            <table border="5" cellspacing="0" align="center">
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
                        $satDetails = App\Models\Routine::where('section_id', $routine)
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
                        {{ Teacher::getTeacherName($satDetails->period_1_t_id) }}
                    </td>
                    <td class="border" align="center" height="50">
                        {{ Subject::getSubjectName($satDetails->period_2_sub_id) }}
                        <br>
                        {{ Teacher::getTeacherName($satDetails->period_2_t_id) }}
                    </td>
                    <td class="border" align="center" height="50">
                        {{ Subject::getSubjectName($satDetails->period_3_sub_id) }}
                        <br>
                        {{ Teacher::getTeacherName($satDetails->period_3_t_id) }}
                    </td>
                    <td class="border" align="center" height="50">
                        {{ Subject::getSubjectName($satDetails->period_4_sub_id) }}
                        <br>
                        {{ Teacher::getTeacherName($satDetails->period_4_t_id) }}
                    </td>
                    <td class="border" align="center" height="50">

                        <span class="text-success">Lunch</span>
                    </td>
                    <td class="border" align="center" height="50">
                        {{ Subject::getSubjectName($satDetails->period_5_sub_id) }}
                        <br>
                        {{ Teacher::getTeacherName($satDetails->period_5_t_id) }}
                    </td>
                    <td class="border" align="center" height="50">
                        {{ Subject::getSubjectName($satDetails->period_6_sub_id) }}
                        <br>
                        {{ Teacher::getTeacherName($satDetails->period_6_t_id) }}
                    </td>
                    <td class="border" align="center" height="50">
                        {{ Subject::getSubjectName($satDetails->period_7_sub_id) }}
                        <br>
                        {{ Teacher::getTeacherName($satDetails->period_7_t_id) }}
                    </td>
                    <td class="border" align="center" height="50">
                        {{ Subject::getSubjectName($satDetails->period_8_sub_id) }}
                        <br>
                        {{ Teacher::getTeacherName($satDetails->period_8_t_id) }}
                    </td>
                </tr>
                <tr class="border">
                    @php
                        $sunDetails = App\Models\Routine::where('section_id', $routine)
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
                        {{ Teacher::getTeacherName($sunDetails->period_1_t_id) }}
                    </td>
                    <td class="border" align="center" height="50">
                        {{ Subject::getSubjectName($sunDetails->period_2_sub_id) }}
                        <br>
                        {{ Teacher::getTeacherName($sunDetails->period_2_t_id) }}
                    </td>
                    <td class="border" align="center" height="50">
                        {{ Subject::getSubjectName($sunDetails->period_3_sub_id) }}
                        <br>
                        {{ Teacher::getTeacherName($sunDetails->period_3_t_id) }}
                    </td>
                    <td class="border" align="center" height="50">
                        {{ Subject::getSubjectName($sunDetails->period_4_sub_id) }}
                        <br>
                        {{ Teacher::getTeacherName($sunDetails->period_4_t_id) }}
                    </td>
                    <td class="border" align="center" height="50">
                        <span class="text-success">Lunch</span>
                    </td>
                    <td class="border" align="center" height="50">
                        {{ Subject::getSubjectName($sunDetails->period_5_sub_id) }}
                        <br>
                        {{ Teacher::getTeacherName($sunDetails->period_5_t_id) }}
                    </td>
                    <td class="border" align="center" height="50">
                        {{ Subject::getSubjectName($sunDetails->period_6_sub_id) }}
                        <br>
                        {{ Teacher::getTeacherName($sunDetails->period_6_t_id) }}
                    </td>
                    <td class="border" align="center" height="50">
                        {{ Subject::getSubjectName($sunDetails->period_7_sub_id) }}
                        <br>
                        {{ Teacher::getTeacherName($sunDetails->period_7_t_id) }}
                    </td>
                    <td class="border" align="center" height="50">
                        {{ Subject::getSubjectName($sunDetails->period_8_sub_id) }}
                        <br>
                        {{ Teacher::getTeacherName($sunDetails->period_8_t_id) }}
                    </td>
                </tr>
                <tr class="border">
                    @php
                        $monDetails = App\Models\Routine::where('section_id', $routine)
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
                        {{ Teacher::getTeacherName($monDetails->period_1_t_id) }}
                    </td>
                    <td class="border" align="center" height="50">
                        {{ Subject::getSubjectName($monDetails->period_2_sub_id) }}
                        <br>
                        {{ Teacher::getTeacherName($monDetails->period_2_t_id) }}
                    </td>
                    <td class="border" align="center" height="50">
                        {{ Subject::getSubjectName($monDetails->period_3_sub_id) }}
                        <br>
                        {{ Teacher::getTeacherName($monDetails->period_3_t_id) }}
                    </td>
                    <td class="border" align="center" height="50">
                        {{ Subject::getSubjectName($monDetails->period_4_sub_id) }}
                        <br>
                        {{ Teacher::getTeacherName($monDetails->period_4_t_id) }}
                    </td>
                    <td class="border" align="center" height="50">
                        <span class="text-success">Lunch</span>
                    </td>
                    <td class="border" align="center" height="50">
                        {{ Subject::getSubjectName($monDetails->period_5_sub_id) }}
                        <br>
                        {{ Teacher::getTeacherName($monDetails->period_5_t_id) }}
                    </td>
                    <td class="border" align="center" height="50">
                        {{ Subject::getSubjectName($monDetails->period_6_sub_id) }}
                        <br>
                        {{ Teacher::getTeacherName($monDetails->period_6_t_id) }}
                    </td>
                    <td class="border" align="center" height="50">
                        {{ Subject::getSubjectName($monDetails->period_7_sub_id) }}
                        <br>
                        {{ Teacher::getTeacherName($monDetails->period_7_t_id) }}
                    </td>
                    <td class="border" align="center" height="50">
                        {{ Subject::getSubjectName($monDetails->period_8_sub_id) }}
                        <br>
                        {{ Teacher::getTeacherName($monDetails->period_8_t_id) }}
                    </td>
                </tr>
                <tr class="border">
                    @php
                        $tusDetails = App\Models\Routine::where('section_id', $routine)
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
                        {{ Teacher::getTeacherName($tusDetails->period_1_t_id) }}
                    </td>
                    <td class="border" align="center" height="50">
                        {{ Subject::getSubjectName($tusDetails->period_2_sub_id) }}
                        <br>
                        {{ Teacher::getTeacherName($tusDetails->period_2_t_id) }}
                    </td>
                    <td class="border" align="center" height="50">
                        {{ Subject::getSubjectName($tusDetails->period_3_sub_id) }}
                        <br>
                        {{ Teacher::getTeacherName($tusDetails->period_3_t_id) }}
                    </td>
                    <td class="border" align="center" height="50">
                        {{ Subject::getSubjectName($tusDetails->period_4_sub_id) }}
                        <br>
                        {{ Teacher::getTeacherName($tusDetails->period_4_t_id) }}
                    </td>
                    <td class="border" align="center" height="50">
                        <span class="text-success">Lunch</span>
                    </td>
                    <td class="border" align="center" height="50">
                        {{ Subject::getSubjectName($tusDetails->period_5_sub_id) }}
                        <br>
                        {{ Teacher::getTeacherName($tusDetails->period_5_t_id) }}
                    </td>
                    <td class="border" align="center" height="50">
                        {{ Subject::getSubjectName($tusDetails->period_6_sub_id) }}
                        <br>
                        {{ Teacher::getTeacherName($tusDetails->period_6_t_id) }}
                    </td>
                    <td class="border" align="center" height="50">
                        {{ Subject::getSubjectName($tusDetails->period_7_sub_id) }}
                        <br>
                        {{ Teacher::getTeacherName($tusDetails->period_7_t_id) }}
                    </td>
                    <td class="border" align="center" height="50">
                        {{ Subject::getSubjectName($tusDetails->period_8_sub_id) }}
                        <br>
                        {{ Teacher::getTeacherName($tusDetails->period_8_t_id) }}
                    </td>
                </tr>
                <tr class="border">
                    @php
                        $wedDetails = App\Models\Routine::where('section_id', $routine)
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
                        {{ Teacher::getTeacherName($wedDetails->period_1_t_id) }}
                    </td>
                    <td class="border" align="center" height="50">
                        {{ Subject::getSubjectName($wedDetails->period_2_sub_id) }}
                        <br>
                        {{ Teacher::getTeacherName($wedDetails->period_2_t_id) }}
                    </td>
                    <td class="border" align="center" height="50">
                        {{ Subject::getSubjectName($wedDetails->period_3_sub_id) }}
                        <br>
                        {{ Teacher::getTeacherName($wedDetails->period_3_t_id) }}
                    </td>
                    <td class="border" align="center" height="50">
                        {{ Subject::getSubjectName($wedDetails->period_4_sub_id) }}
                        <br>
                        {{ Teacher::getTeacherName($wedDetails->period_4_t_id) }}
                    </td>
                    <td class="border" align="center" height="50">
                        <span class="text-success">Lunch</span>
                    </td>
                    <td class="border" align="center" height="50">
                        {{ Subject::getSubjectName($wedDetails->period_5_sub_id) }}
                        <br>
                        {{ Teacher::getTeacherName($wedDetails->period_5_t_id) }}
                    </td>
                    <td class="border" align="center" height="50">
                        {{ Subject::getSubjectName($wedDetails->period_6_sub_id) }}
                        <br>
                        {{ Teacher::getTeacherName($wedDetails->period_6_t_id) }}
                    </td>
                    <td class="border" align="center" height="50">
                        {{ Subject::getSubjectName($wedDetails->period_7_sub_id) }}
                        <br>
                        {{ Teacher::getTeacherName($wedDetails->period_7_t_id) }}
                    </td>
                    <td class="border" align="center" height="50">
                        {{ Subject::getSubjectName($wedDetails->period_8_sub_id) }}
                        <br>
                        {{ Teacher::getTeacherName($wedDetails->period_8_t_id) }}
                    </td>
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
                    <td class="border" align="center" height="50">
                        {{ Subject::getSubjectName($thuDetails->period_1_sub_id) }}
                        <br>
                        {{ Teacher::getTeacherName($thuDetails->period_1_t_id) }}
                    </td>
                    <td class="border" align="center" height="50">
                        {{ Subject::getSubjectName($thuDetails->period_2_sub_id) }}
                        <br>
                        {{ Teacher::getTeacherName($thuDetails->period_2_t_id) }}
                    </td>
                    <td class="border" align="center" height="50">
                        {{ Subject::getSubjectName($thuDetails->period_3_sub_id) }}
                        <br>
                        {{ Teacher::getTeacherName($thuDetails->period_3_t_id) }}
                    </td>
                    <td class="border" align="center" height="50">
                        {{ Subject::getSubjectName($thuDetails->period_4_sub_id) }}
                        <br>
                        {{ Teacher::getTeacherName($thuDetails->period_4_t_id) }}
                    </td>
                    <td class="border" align="center" height="50">
                        <span class="text-success">Lunch</span>
                    </td>
                    <td class="border" align="center" height="50">
                        {{ Subject::getSubjectName($thuDetails->period_5_sub_id) }}
                        <br>
                        {{ Teacher::getTeacherName($thuDetails->period_5_t_id) }}
                    </td>
                    <td class="border" align="center" height="50">
                        {{ Subject::getSubjectName($thuDetails->period_6_sub_id) }}
                        <br>
                        {{ Teacher::getTeacherName($thuDetails->period_6_t_id) }}
                    </td>
                    <td class="border" align="center" height="50">
                        {{ Subject::getSubjectName($thuDetails->period_7_sub_id) }}
                        <br>
                        {{ Teacher::getTeacherName($thuDetails->period_7_t_id) }}
                    </td>
                    <td class="border" align="center" height="50">
                        {{ Subject::getSubjectName($thuDetails->period_8_sub_id) }}
                        <br>
                        {{ Teacher::getTeacherName($thuDetails->period_8_t_id) }}
                    </td>
                </tr>
            </table>
            <br>
        @else
            <h4>Routine not found</h4>
        @endif
    </div>


@endsection
