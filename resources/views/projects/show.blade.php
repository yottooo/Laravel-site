@extends('layout')

@section('content')
<h1 class="text-primary">{{ $project->title}}</h1>

<h2 class="text-muted">{{ $project->description}}</h2>

<p>
    <a href="/projects/{{ $project->id}}/edit">Edit</a>
</p>
@endsection
