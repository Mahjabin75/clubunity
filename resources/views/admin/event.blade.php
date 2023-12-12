@extends('admin.include')
@section('title','Event Page')
@section('content')
<div class="admin-content">

  <div class="container">
    <div class="heading my-4">
      <h1>Add Event Request</h1>
    </div>
    <div class="content pt-4">
      <form action="{{ route('event-req') }}" method="POST">
        @csrf
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Event Title</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="title">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Date</label>
                <div class="col-sm-10">
                <input type="date" class="form-control" name="startDate">
                </div>
            </div>
            <div>
                <button type="submit" class="btn btn-primary">Request</button>
            </div>
        </form>
    </div>
  </div>

</div>
@endsection