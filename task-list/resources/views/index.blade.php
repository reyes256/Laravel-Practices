<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Task List</h1>

    @forelse ($tasks as $task)
        <p>This is task #{{ $task->id }}, and is about: <a href="{{ Route('task.show', ['id' => $task->id]) }}">{{ $task->title }}</a></p>
    @empty
        <h2><strong>No tasks to do maifren</strong></h2>
    @endforelse
</body>
</html>