@extends('admin.include')
@section('title','Members Page')
@section('content')
<div class="admin-content">

  <div class="container">
    <div class="req">
      <div class="heading my-4">
        <h1>New Member Requests</h1>
      </div>
      <div class="content">
        <table class="table border">
          <thead class="bg-secondary">
            <tr>
              <th scope="col">#</th>
              <th scope="col">Name</th>
              <th scope="col">Email</th>
              <th scope="col">Id</th>
              <th class="text-center" scope="col" colspan="2">Action</th>
            </tr>
          </thead>
          <tbody>
            @php
              $serial = 1; 
            @endphp
            @foreach ($memberReqs as $memberReq)
              <tr>
                <td scope="row">{{ $serial++ }}</td> 
                <td>{{ $memberReq->user->name }}</td>
                <td>{{ $memberReq->user->email }}</td>
                <td>{{ $memberReq->userId }}</td>
                <td class="text-center"><a href="{{ route('admin/accept-member/', ['id' => $memberReq->id]) }}"><button class="btn btn-success"><i class="ri-checkbox-circle-fill"></i></button></a></td>
                <td class="text-center"><a href="{{ route('admin/decline-member/', ['id' => $memberReq->id]) }}"><button class="btn btn-danger"><i class="ri-close-circle-fill"></i></button></a></td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
    <div class="all">
      <div class="heading my-4">
        <h1>All Members</h1>
      </div>
      <div class="content">
        <table class="table border">
          <thead class="bg-secondary">
            <tr>
            <th scope="col">#</th>
              <th scope="col">Name</th>
              <th scope="col">Email</th>
              <th scope="col">Id</th>
              <th class="text-center" scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            @php
              $serial = 1; 
            @endphp
            @foreach ($allMember as $member)
              <tr>
                  <td scope="row">{{ $serial++ }}</td> 
                  <td>{{ $member->user->name }}</td>
                  <td>{{ $member->user->email }}</td>
                  <td>{{ $member->userId }}</td>
                  <td class="text-center"><a href="{{ route('admin/remove-member/', ['id' => $member->id]) }}"><button class="btn btn-warning"><i class="ri-user-unfollow-fill"></i></button></a></td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>

</div>
@endsection