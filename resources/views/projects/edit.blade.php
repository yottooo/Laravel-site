@extends('layout')

@section('content')
<h1 class="title">Edit Project</h1>

<form method="POST" action="/projects/{{ $project->id }}">
    @method('PATCH')
    @csrf

    <div class="form-group">
        <label class="label" for="title">Title</label>

        <div class="control">
            <input type="text" class="md-input form-control" name="title" value="{{ $project->title }}">
        </div>

    </div>

    <div class="form-group">
        <label class="label" for="description">Description</label>

        <div class="control">
            <textarea class="md-textarea form-control" rows="5"
                name="description">{{ $project->description }}</textarea>
        </div>

    </div>

    <div class=" form-group">

        <div class="control">
            <button type="submit" class="btn btn-primary">Update Project </button>
        </div>

    </div>
</form>

<form method="POST" action="/projects/{{ $project->id }}">
    <div class=" form-group">
        @method('DELETE')
        @csrf
        <div class="control">
            <button type="submit" class="btn btn-primary">Delete Project </button>
        </div>
</form>
@endsection
