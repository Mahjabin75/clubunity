@extends('admin.include')
@section('title','Admin Home Page')
@section('content')
<div class="admin-content">

  <div class="container">
    <div class="content">
      <div class="row featurette p-5">
            <div class="col-md-5 text-center">
                <img class="featurette-image img-fluid mx-auto" style="height: 300px;" src="{{ asset('assets/images/' . $club->clubImage) }}">
            </div>
            <div class="col-md-7">
                <h2 class="heading">{{ $club->clubname }}</h2>
                <p class="lead">{{ $club->details }}</p>
                <p><span class="font-weight-bold">Club Email:</span> {{ $club->email }}</p>
                <p><span class="font-weight-bold">Phone no:</span> {{ $club->number }}</p>
                <p><span class="font-weight-bold">Location:</span> {{ $club->location }}</p>
            </div>
        </div>

      <div class="postContent">
        <div class="newPost w-75 mb-5 mx-auto" id="accordion">
            <div class="card mt-5">
                <div class="card-header p-0" id="headingThree">
                    <h5 class="mb-0">
                        <button class="btn text-left collapsed w-100 p-3 shadow-none" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                           New Post
                        </button>
                    </h5>
                </div>
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                    <div class="card-body">
                    <form action="{{ route('upload.image') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="exampleFormControlFile1">Post Image</label>
                            <input type="file" name="image" class="form-control-file border p-1 rounded-sm" id="exampleFormControlFile1">
                        </div>
                        <div class="form-group">
                            <label>Post Title</label>
                            <input type="text" name="title" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-primary">Post</button>
                    </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="oldPost border w-75 mx-auto p-2">
            <h3 class="text-center p-3">Club Posts</h3>
            @foreach($posts as $post)
            <div class="border p-3 rounded mb-2" style="Background:#f7f7f7;">
                <div class="text-center">
                    <img class="w-75 mb-3 rounded" src="{{ asset('assets/images/' . $post->image) }}">
                </div>
                <h5 class="m-auto w-75">{{ $post->title }} <span class="float-right text-secondary text-muted h6">{{ $club->created_at->format('d-m-Y') }}</span></h5>
            </div>
            @endforeach
        </div>
      </div>

    </div>
  </div>

</div>
@endsection