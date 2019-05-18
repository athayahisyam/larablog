<!DOCTYPE html>
<html>

<head>
    <title>Create a New Project</title>

<body>
    <h1>Create a New Project</h1>

    <form method="POST" action="/projects">

    {{csrf_field()}}
        <div>
            <input type="text" name="title" placeholder="Project Title">
        </div>

        <div>
            <textarea name="description" placeholder="Project Description"></textarea>
        </div>

        <div>
            <button type="submit">Create Project</button>
        </div>
    </form>


</body>

</html>