@extends('admin.include')
@section('title','Announcement Page')
@section('content')
<div class="admin-content">

  <div class="container">
    <div class="heading my-4">
      <h1>Add Announcement</h1>
    </div>
    <div class="content pt-4">
      <form action="{{ route('save-announcement') }}" method="POST">
      @csrf
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Announcement Title</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="title">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Announcement Description</label>
                <div class="col-sm-10">
                <textarea class="form-control" rows="3" name="description"></textarea>
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