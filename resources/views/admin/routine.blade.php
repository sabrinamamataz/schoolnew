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
                    $routineDetails = App\Models\Routine::where('section_id', $routine)->get();
                    // dd($routineDetails);
                @endphp
                <table border="5" cellspacing="0" align="center">
                    <caption>
                        {{ $routineDetails[0]->routineToSection->sectionToClass->class_name . ' - Section: ' . $routineDetails[0]->routineToSection->section }}
                    </caption <tr class="border">
                    <td class="border" align="center" height="50" width="100"><br>
                        <b>Day/Period</b></br>
                    </td>
                    <td class="border" align="center" height="50" width="100">
                        <b>I<br>9:30-10:20</b>
                    </td>
                    <td class="border" align="center" height="50" width="100">
                        <b>II<br>10:20-11:10</b>
                    </td>
                    <td class="border" align="center" height="50" width="100">
                        <b>III<br>11:10-12:00</b>
                    </td>
                    <td class="border" align="center" height="50" width="100">
                        <b>12:00-12:40</b>
                    </td>
                    <td class="border" align="center" height="50" width="100">
                        <b>IV<br>12:40-1:30</b>
                    </td>
                    <td class="border" align="center" height="50" width="100">
                        <b>V<br>1:30-2:20</b>
                    </td>
                    <td class="border" align="center" height="50" width="100">
                        <b>VI<br>2:20-3:10</b>
                    </td>
                    <td class="border" align="center" height="50" width="100">
                        <b>VII<br>3:10-4:00</b>
                    </td>
                    </tr>
                    <tr class="border">
                        <td class="border" align="center" height="50">
                            <b>Monday</b>
                        </td>
                        <td class="border" align="center" height="50">Eng</td>
                        <td class="border" align="center" height="50">Mat</td>
                        <td class="border" align="center" height="50">Che</td>
                        <td rowspan="6" align="center" height="50">
                            <h2>L<br>U<br>N<br>C<br>H</h2>
                        </td>
                        <td colspan="3" align="center" height="50">LAB</td>
                        <td class="border" align="center" height="50">Phy</td>
                    </tr>
                    <tr class="border">
                        <td class="border" align="center" height="50">
                            <b>Tuesday</b>
                        </td>
                        <td colspan="3" align="center" height="50">LAB
                        </td>
                        <td class="border" align="center" height="50">Eng</td>
                        <td class="border" align="center" height="50">Che</td>
                        <td class="border" align="center" height="50">Mat</td>
                        <td class="border" align="center" height="50">SPORTS</td>
                    </tr>
                    <tr class="border">
                        <td class="border" align="center" height="50">
                            <b>Wednesday</b>
                        </td>
                        <td class="border" align="center" height="50">Mat</td>
                        <td class="border" align="center" height="50">phy</td>
                        <td class="border" align="center" height="50">Eng</td>
                        <td class="border" align="center" height="50">Che</td>
                        <td colspan="3" align="center" height="50">LIBRARY
                        </td>
                    </tr>
                    <tr class="border">
                        <td class="border" align="center" height="50">
                            <b>Thursday</b>
                        </td>
                        <td class="border" align="center" height="50">Phy</td>
                        <td class="border" align="center" height="50">Eng</td>
                        <td class="border" align="center" height="50">Che</td>
                        <td colspan="3" align="center" height="50">LAB
                        </td>
                        <td class="border" align="center" height="50">Mat</td>
                    </tr>
                    <tr class="border">
                        <td class="border" align="center" height="50">
                            <b>Friday</b>
                        </td>
                        <td colspan="3" align="center" height="50">LAB
                        </td>
                        <td class="border" align="center" height="50">Mat</td>
                        <td class="border" align="center" height="50">Che</td>
                        <td class="border" align="center" height="50">Eng</td>
                        <td class="border" align="center" height="50">Phy</td>
                    </tr>
                    <tr class="border">
                        <td class="border" align="center" height="50">
                            <b>Saturday</b>
                        </td>
                        <td class="border" align="center" height="50">Eng</td>
                        <td class="border" align="center" height="50">Che</td>
                        <td class="border" align="center" height="50">Mat</td>
                        <td colspan="3" align="center" height="50">SEMINAR
                        </td>
                        <td class="border" align="center" height="50">SPORTS</td>
                    </tr>
                </table>
                <br>
            @endforeach
        </div>
    </div>
@endsection
