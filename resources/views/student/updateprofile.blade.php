@extends('student.main')
@section('content')
<form class="container" action="{{ route('update_student_profile') }}" method="post">
    @csrf
    <div class="modal-body">
      <div class="mb-3">
            <label for="">Name</label>
              <input type="text" name="name" required class="form-control" >
      </div>
      <div class="mb-3">
            <label for="">Email</label>
              <input type="email" name="email" required class="form-control" >
      
      </div>
      <div class="mb-3">
            <label for="">Class</label>
              <input type="number" name="class" required class="form-control" >
      
      </div>
      <div class="mb-3">
            <label for="">Adress</label>
              <input type="text" name="adress" required class="form-control" >
      
      </div>
      <div class="mb-3">
            <label for="">Guardian_name</label>
              <input type="text" name="guardian_nmae" required class="form-control" >
      
      </div>
      <div class="mb-3">
            <label for="">Guardian_no</label>
              <input type="number" name="guardian_no" required class="form-control" >
      
      </div>
      <div class="mb-3">
            <label for="">Guardian_relation</label>
              <input type="text" name="guardian_relation" required class="form-control" >
     
      </div>
      </form>
    </div>
  </div>
</div>
<div class="container py-5">
    <div class="row">
        <div class="col-md-12">

          @if(session('success'))
<div class="alter alter.success">{{ successful('success') }}</div>
          @endif
            <div class="card">
            <div class="card header">
            <h4>
                
                </div>
                    <button type="submit" class="btn btn-primary">Update</button>
            <div class="card body">

            </div>
            </div>
            </div>
            </div>
            </div>


@endsection