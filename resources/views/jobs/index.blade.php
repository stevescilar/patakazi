<x-layout>
    <h1 class="text-xl font-sans font-semibold">Available Jobs</h1>
    <ul>
        @forelse ($jobs as $job)
            <li><a href="{{route('jobs.show', $job->id)}}"> {{ $job->title }} </a> - {{ $job->description }}</li>
        @empty
            <p>No jobs found</p>
        @endforelse
    </ul>
</x-layout>
