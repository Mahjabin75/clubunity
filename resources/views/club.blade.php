@extends('include')
@section('title','Profile Page')
@section('content')

<section>
   
    <div class="container marketing mt-5">
        
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

                @auth
                @if(auth()->user()->role == 'user')
                    @if($joinedCheck=="joined")
                        <a href="{{ route('leave-req', ['clubId' => $club->clubId]) }}"><button type="button" class="btn btn-danger">Leave</button></a>
                    @elseif($joinedCheck=="pending")
                        <button type="button" class="btn btn-secondary disabled">Requested</button>
                    @else
                        <a href="{{ route('join-req', ['clubId' => $club->clubId]) }}"><button type="button" class="btn btn-primary">Join</button></a>
                    @endif
                @endif
                @endauth
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

</section>


@endsection