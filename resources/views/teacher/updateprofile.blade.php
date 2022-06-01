@extends('teacher.main')
@section('content')
 <!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Add teacher Data</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

<form action="{{ route('updateprofile_dashboard') }}" method="post" >
@csrf
  <!-- <div class="modal-body"> -->
      <div class="mb-3">
            <label for="">Email</label>
              <input type="email" name="email" required class="form-control" >
        
  
      </div>
      <div class="mb-3">
            <label for="">Subject_id</label>
              <input type="text" name="subject_id" required class="form-control" >
      
      </div>
      <div class="mb-3">
            <label for="">Joining</label>
              <input type="date" name="joining" required class="form-control" >
      
      </div>
      <div class="mb-3">
            <label for="">Designation</label>
              <input type="text" name="designation" required class="form-control" >
      
      </div>
      <div class="mb-3">
            <label for="">Date_of_birth</label>
              <input type="date" name="date_of_birth" required class="form-control" >
      
      </div>
      <div class="mb-3">
            <label for="">Contact_no</label>
              <input type="tel" name="contact_no" required class="form-control" >
      
      </div>
      <div class="mb-3">
            <label for="">Address</label>
              <input type="text" name="address" required class="form-control" >
      
      
      </div>
      <div class="mb-3">
            <label for="">Pro_pic</label>
              <input type="text" name="pro_pic" required class="form-control" >
          
      
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">save </button>
      </div>
      </form>
    </div>
  </div>
</div>
<div class="container py-5">
    <div class="row">
        <div class="col-md-12">

          @if(session('success'))
<div class="alter alter.success">{{ session('success') }}</div>
          @endif
            <div class="card">
            <div class="card header">
            <h4>
                Teacher Data
                <button type="button" class=" btn btn- primary flout- end" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Add teacher</button>
            </div>
            <div class="card body">

            </div>
            </div>
            </div>
            </div>
            </div>



@endsection