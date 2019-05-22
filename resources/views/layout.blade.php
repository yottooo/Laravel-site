<!doctype html>
<html>

<head>
    <title>@yield('title', 'Laracasts')</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <style>
        .is-complete {
            text-decoration: line-through;
        }
    </style>
</head>

<body>
    @yield('content')
    <ul>
        <li><a href="/">Home</a></li>
        <li><a href="/contact">Contact</a> us to learn more</li>
        <li><a href="/about">About US</a></li>
        <li><a href="/projects">Projects</a></li>
        <li><a href="/projects/create">Create a new project</a></li>
    </ul>
</body>

</html>
