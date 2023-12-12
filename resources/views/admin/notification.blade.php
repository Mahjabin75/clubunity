@extends('admin.include')
@section('title','Notification Page')
@section('content')
<div class="admin-content">

  <div class="container">
    <div class="heading my-4">
      <h1>Add Notification</h1>
    </div>
    <div class="content pt-4">
      <form action="{{ route('save-notification') }}" method="POST">
      @csrf
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Notification Title</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="title">
                </div>
            </div>
            <div>
                <button type="submit" class="btn btn-primary">Add</button>
            </div>
        </form>
    </div>
  </div>

</div>
@endsection