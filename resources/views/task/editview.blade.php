<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task Manager App</title>
    <link rel="stylesheet" href="{{URL::asset('css/index.css');}}" class="css">
</head>

<body>
    <div class="container">
        <div class="header">
            <h1>Task Manager App</h1>
        </div>
        <div class="main-content">
            <form action="/tasks/{{$task->id}}" method="POST">
                @method('PUT')
                @csrf
                <div class="tasks-field">
                    <input type="text" placeholder="Task Name" name="name" value="{{$task->name}}">
                </div>
                <div class="primary-btn"><button><a>Update Task</a></button></div>
            </form>
        </div>

    </div>
</body>

</html>