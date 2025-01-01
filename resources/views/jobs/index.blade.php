@extends('layout')

{{-- custom title --}}
@section('title')
Job Listings
@endsection

@section('content')
    @if (!empty($jobs))
        <ul>
            <!-- looping through the items using directives -->
            @foreach ($jobs as $job)
                <li>{{ $job }}</li>
            @endforeach

        </ul>
    @else
        <p>No jobs found</p>
    @endif
@endsection
