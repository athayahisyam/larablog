<!DOCTYPE html>
<html>

<head>
    <title>Project</title>

<body>
    <h1>Projects</h1>

    <ul>

        @foreach ($project as $project)
        <li>{{$project->title}}</li>
        @endforeach

    </ul>
</body>

</html>