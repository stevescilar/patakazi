<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jobs Listing</title>
</head>

<body>
    <h1>{{ $title }}</h1>
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
</body>
 
</html>
