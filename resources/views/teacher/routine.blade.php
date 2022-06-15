@extends('teacher.main')
@section('content')

@php
    use App\Models\Routine;
    use App\Models\Teacher;
    @endphp
    
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Day</th>
      <th scope="col">Period</th>
      <th scope="col">Subject Name</th>
      <th scope="col">Time</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">saturday</th>
      <td>1st</td>
      <td>Bangla</td>
      <td>8:30 AM</td>
    </tr>
    <tr>
      <th scope="row">Sunday</th>
      <td>1st</td>
      <td>English</td>
      <td>9:30am</td>
    </tr>
    <tr>
      <th scope="row">Mondday</th>
      <td >1st</td>
      <td>Math</td>
      <td>9:30am</td>
    </tr>
  </tbody>
</table>

@endsection