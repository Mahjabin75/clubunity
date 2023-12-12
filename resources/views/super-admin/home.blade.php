@extends('admin.include')
@section('title','Super Admin Home Page')
@section('content')
<div class="admin-content">

<div class="container">

<div class="dash mt-4">
<div class="row">

<div class="col-md-4">
      <div class="card-counter danger">
        <i class="ri-ancient-gate-fill"></i>
        <span class="count-numbers">{{ $clubs }}</span>
        <span class="count-name">Total Clubs</span>
      </div>
    </div>

    <div class="col-md-4">
      <div class="card-counter primary">
        <i class="ri-team-fill"></i>
        <span class="count-numbers">{{ $members }}</span>
        <span class="count-name">Total Members</span>
      </div>
    </div>

    <div class="col-md-4">
      <div class="card-counter success">
        <i class="ri-calendar-check-fill"></i>
        <span class="count-numbers">{{ $requests }}</span>
        <span class="count-name">Total Requests</span>
      </div>
    </div>
  </div>
</div>
    <div class="heading my-4">
      <h1>All Clubs</h1>
    </div>
    <div class="content">
      <table class="table border">
        <thead class="bg-secondary">
          <tr>
            <th scope="col">#</th>
            <th scope="col">Club Logo</th>
            <th scope="col">Club Name</th>
            <th scope="col">Club Email</th>
            <th scope="col">Club Location</th>
            <th scope="col">Club Number</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
        @php
            $serial = 1; 
        @endphp
          @foreach($allclubs as $club)
            <tr>
              <td scope="row">{{ $serial++ }}</td> 
              <td><img style="height: 60px; object-fit:cover;" src="{{ asset('assets/images/' . $club->clubImage) }}"></td>
              <td>{{ $club->clubname }}</td>
              <td>{{ $club->email }}</td>
              <td>{{ $club->location }}</td>
              <td>{{ $club->number }}</td>
              <td><a href="{{ route('super-admin/remove-club', ['clubId' => $club->clubId]) }}"><button class="btn btn-danger"><i class="ri-delete-bin-2-fill"></i></button></a></td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>


</div>
@endsection