@extends('layout')

@section('content')
<h1 class="text-primary">{{ $project->title}}</h1>

<h2 class="text-muted">{{ $project->description}}</h2>
<p>
    <a class="btn btn-primary" href="/projects/{{ $project->id}}/edit" role="button">Edit</a>
</p>

@if ($project->tasks->count())
<div>
    @foreach ($project->tasks as $task)
    <div class="form-check">
        <form method="POST" action="/tasks/{{ $task->id}}">
            @method('PATCH')
            @csrf
            <label {{ $task->completed ? 'is-complete' : ''}} for="completed">
                <input type="checkbox" class="form-check-input" name="completed" onchange="this.form.submit()"
                    {{ $task->completed ? 'checked' : ''}}>
                {{ $task->description}}
            </label>
        </form>
    </div>
    @endforeach
</div>
@endif
{{--add a new task form --}}
<form method="POST" action="/projects/{{$project->id}}/tasks">
    @csrf
    <div class="form-group">
        <label for="description">New Task</label>
        <input type="text" class="form-control" name="description">
        <button type="submit" class="btn btn-primary">Add Task</button>
    </div>
</form>
@endsection
