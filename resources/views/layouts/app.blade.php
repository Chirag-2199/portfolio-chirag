<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Application</title>
    <style>
        nav ul {
            list-style-type: none;
            padding: 0;
            display: flex;
            gap: 15px;
        }
        nav ul li {
            display: inline;
        }
        nav ul li a {
            text-decoration: none;
            color: #333;
        }
    </style>
</head>
<body>
    <nav>
        <ul>
            <li><a href="{{ route('home') }}">Home</a></li>
            <li><a href="{{ route('exp') }}">Experience</a></li>
            <li><a href="{{ route('about') }}">About Me</a></li>
            <li><a href="{{ route('projects') }}">Projects</a></li>
        </ul>
    </nav>

    <div>
        @yield('content')
    </div>
</body>
</html>
