<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Application</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            color: #333;
            background-color: #f4f4f9;
        }

        nav {
            background-color: #007BFF;
            padding: 10px 20px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        nav ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            gap: 20px;
        }

        nav ul li {
            display: inline;
        }

        nav ul li a {
            text-decoration: none;
            color: white;
            font-weight: 500;
            padding: 8px 15px;
            transition: background-color 0.3s, color 0.3s;
        }

        nav ul li a:hover {
            background-color: white;
            color: #007BFF;
            border-radius: 4px;
        }

        .container {
            max-width: 1200px;
            margin: 20px auto;
            padding: 20px;
            background-color: white;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }

        h1 {
            font-size: 2.5rem;
            color: #007BFF;
            margin-bottom: 20px;
        }

        p {
            font-size: 1.2rem;
            line-height: 1.6;
        }

        footer {
            text-align: center;
            margin-top: 30px;
            padding: 10px;
            background-color: #007BFF;
            color: white;
            font-size: 0.9rem;
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

    <div class="container">
        @yield('content')
    </div>

    <footer>
        &copy; 2025 Laravel Application. All Rights Reserved.
    </footer>
</body>
</html>
