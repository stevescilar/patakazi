<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create a new Job</title>
</head>
<body>
    <h1>Create a new job</h1>  
    <form action="/jobs" method="POST">
        @csrf
        <input type="text" name="title" placeholder="Job Title">
        <input type="text" name="desc" placeholder="Description">

        <button type="submit"> Submit </button>

    </form>
</body>
</html>