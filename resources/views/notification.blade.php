@extends('include')
@section('title','Profile Page')
@section('content')

<div class="container mt-5">
    <h1 class="text-center headding p-3">All Notification</h1>
    
    <div class="container marketing mt-5">
        @foreach ($notifications as $notification)
        <div class="border rounded mb-2 p-3 row">
            <div class="col-1 pr-4">
                <img style="width: 50px" src="{{ asset('assets/images/' . $notification->club->clubImage) }}">
            </div>
            <div class="col-11">
                <h5 class="w-100 m-auto">{{ $notification->club->clubname }} <span class="float-right text-muted h6">{{ $notification->created_at->format('d-m-Y') }}</span></h5>
                <p class="mb-0">{{ $notification->title }}</p>
            </div>
        </div>
        @endforeach
    </div>

</div>


@endsection