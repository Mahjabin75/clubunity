@extends('admin.include')
@section('title','Requests Page')
@section('content')
<div class="admin-content">

  <div class="container">
    <div class="req">
      <div class="heading my-4">
        <h1>New Event Requests</h1>
      </div>
      <div class="content">
        <table class="table border">
          <thead class="bg-secondary">
            <tr>
              <th scope="col">#</th>
              <th scope="col">Club Name</th>
              <th scope="col">Date</th>
              <th scope="col">Title</th>
              <th class="text-center" scope="col" colspan="2">Action</th>
            </tr>
          </thead>
          <tbody>
          @php
            $serial = 1; 
          @endphp
            @foreach ($eventReqs as $req)
                <tr>
                  <td scope="row">{{ $serial++ }}</td> 
                  <td>{{ $req->club->clubname }}</td>
                  <td>{{ (new \DateTime($req->startDate))->format('d-m-Y') }}</td>
                  <td>{{ $req->title }}</td>
                  <td class="text-center"><a href="{{ route('super-admin/accept-eve', ['id' => $req->id]) }}"><button class="btn btn-success"><i class="ri-checkbox-circle-fill"></i></button></a></td>
                  <td class="text-center"><a href="{{ route('super-admin/decline-eve', ['id' => $req->id]) }}"><button class="btn btn-danger"><i class="ri-close-circle-fill"></i></button></a></td>
                </tr>
              @endforeach
          </tbody>
        </table>
      </div>
    </div>
    <div class="all">
      <div class="heading my-4">
        <h1>All Approved Events</h1>
      </div>
      <div class="content">
        <table class="table border">
          <thead class="bg-secondary">
            <tr>
              <th scope="col">#</th>
              <th scope="col">Club Name</th>
              <th scope="col">Date</th>
              <th scope="col">Title</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($allEvent as $event)
                <tr>
                    <th scope="row">1</th>
                    <td>{{ $event->club->clubname }}</td>
                    <td>{{ (new \DateTime($event->startDate))->format('d-m-Y') }}</td>
                    <td>{{ $event->title }}</td>
                </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>

</div>
@endsection