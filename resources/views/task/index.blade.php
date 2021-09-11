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
            <div class="tasks">
                @foreach($tasks as $task)
                <div class="single-task">
                    <div class="task-name">
                        <h3>{{$task->name}}</h3>
                    </div>
                    <div class="task-actions">
                        <button><a href="/tasks/{{$task->id}}/edit">Edit</a></button>
                        <form action="/tasks/{{$task->id}}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button class="delete-btn">Delete</button>
                        </form>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="primary-btn"><button><a href="/tasks/create">New Task</a></button></div>
        </div>
    </div>
</body>

</html>