<x-layout>
    <h1>Create a new job</h1>
    <form action="/jobs" method="POST">
        @csrf
        <input type="text" name="title" placeholder="Job Title">
        <input type="text" name="desc" placeholder="Description">

        <button type="submit"> Submit </button>

    </form>
</x-layout>
