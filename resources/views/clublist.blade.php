@extends('include')
@section('title','Profile Page')
@section('content')

<section>
    <div class="album container mt-5">
        <div class="col-12">
            <h1 class="headding text-center pb-4">All Clubs</h1>
        </div>
        <div class="row">
            @foreach($clubs as $club)
                <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                        <img class="featurette-image img-fluid mx-auto" style="height: 300px; object-fit:cover;"
                        src="{{ asset('assets/images/' . $club->clubImage) }}">
                        <div class="card-body">
                            <h5 class="card-text">{{ $club->clubname }}</h5>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <a href="{{ route('club', ['clubId' => $club->clubId]) }}"><button type="button" class="btn btn-sm btn-outline-secondary">View</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    </div>
</section>


@endsection