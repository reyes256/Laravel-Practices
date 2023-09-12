@extends('layouts.app')

@section('title', 'List of tasks')

@section('content')
    @forelse ($tasks as $task)
        <p>This is task #{{ $task->id }}, and is about: <a href="{{ Route('task.show', ['id' => $task->id]) }}">{{ $task->title }}</a></p>
    @empty
        <h2><strong>No tasks to do maifren</strong></h2>
    @endforelse
@endsection
