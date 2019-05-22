@extends('layout')
@section('content')
<h1> Create a new Project</h1>


<form method="POST" action="/projects">
    {{csrf_field()}}

    <div class="form-group">
        <input class="form-control" type="text" name="title" placeholder="Project Title" value="{{ old('title')}}">
    </div>

    <div class="form-group">
        <textarea class="form-control" name="description" placeholder="Project description" cols="30"
            rows="10"></textarea>
    </div>

    <div>
        <button type="submit">Create project</button>
    </div>

    <div class="text-warning">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
</form>
