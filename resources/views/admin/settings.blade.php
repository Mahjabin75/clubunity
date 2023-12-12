@extends('admin.include')
@section('title','Settings')
@section('content')
<div class="admin-content">

  <div class="container">
    <div class="heading my-4">
      <h1>Settings</h1>
    </div>
     <div id="accordion">
        <div class="card mt-5">
            <div class="card-header p-0" id="headingTwo">
                <h5 class="mb-0">
                    <button class="btn text-left collapsed w-100 p-3 shadow-none" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Change Logo
                    </button>
                </h5>
            </div>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                <div class="card-body">
                    <form method="POST" action="{{ route('update-club-logo') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="exampleFormControlFile1">Club Image</label>
                            <input type="file" class="form-control-file border p-1 rounded" id="exampleFormControlFile1" name="image">
                        </div>
                        <button type="submit" class="btn btn-primary">Change</button>
                    </form> 
                </div>
            </div>
        </div>
        <div class="card mt-5">
            <div class="card-header p-0" id="headingOne">
                <h5 class="mb-0">
                    <button class="btn text-left collapsed w-100 p-3 shadow-none" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                        Change Club Info
                    </button>
                </h5>
            </div>
            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="card-body">
                <form method="POST" action="{{ route('update.clubInfo') }}">
                    @csrf
                    <div class="form-group">
                        <label for="name">Club name</label>
                        <input type="text" class="form-control" id="name" name="clubname" value="{{ auth()->user()->club->clubname }}">
                    </div>
                    <div class="form-group">
                        <label for="details">Club Description</label>
                        <textarea class="form-control" id="details" name="details" rows="3">{{ auth()->user()->club->details }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="leader">Club Leader Name</label>
                        <input type="text" class="form-control" id="leader" name="leader" value="{{ auth()->user()->name }}">
                    </div>
                    <div class="form-group">
                        <label for="location">Club Location</label>
                        <input type="text" class="form-control" id="location" name="location" value="{{ auth()->user()->club->location }}">
                    </div>
                    <div class="form-group">
                        <label for="number">Club Number</label>
                        <input type="text" class="form-control" id="number" name="number" value="{{ auth()->user()->club->number }}">
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>

                </div>
            </div>
        </div>
        <div class="card mt-5">
            <div class="card-header p-0" id="headingThree">
                <h5 class="mb-0">
                    <button class="btn text-left collapsed w-100 p-3 shadow-none" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Change Password
                    </button>
                </h5>
            </div>
            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                <div class="card-body">
                    <form method="POST" action="{{ route('update-password') }}">
                        @csrf
                        <div class="form-group">
                            <label for="pass">New password</label>
                            <input type="password" class="form-control" id="pass" name="npassword">
                        </div>
                        <div class="form-group">
                            <label for="pass2">Confirm password</label>
                            <input type="password" class="form-control" id="pass2" name="npassword_confirmation">
                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </form> 
                </div>
            </div>
        </div>
    </div>

</div>
@endsection