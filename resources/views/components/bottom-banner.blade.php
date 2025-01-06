@props([
    'header' => 'Looking to hire?',
    'subheader' => 'Post your job listing now and find the perfect
                candidate.',
])
<section class="container mx-auto my-6">
    <div class="bg-blue-800 text-white rounded p-4 flex items-center justify-between flex-col md:flex-row gap-4">
        <div>
            <h2 class="text-xl font-semibold">{{ $header }}</h2>
            <p class="text-gray-200 text-lg mt-2">
                {{ $subheader }}
            </p>
        </div>
        <x-button-link url="/jobs/create" icon="edit">Create Jobs</x-button-link>

    </div>
</section>
