<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Experience - Chirag</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        :root {
            --primary: #8a2be2;
            --secondary: #ff6b6b;
            --accent: #4ecdc4;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', system-ui, -apple-system, sans-serif;
            background: linear-gradient(135deg, #667eea, #764ba2);
            color: white;
            line-height: 1.6;
            overflow-x: hidden;
        }

        .nav {
            padding: 1.5rem 5%;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-size: 1.8rem;
            font-weight: 700;
            color: white;
            text-decoration: none;
        }

        .nav-links a {
            color: white;
            text-decoration: none;
            font-weight: 500;
            font-size: 1.1rem;
            padding: 0.5rem 1rem;
        }

        .container {
            max-width: 1200px;
            margin: 4rem auto;
            padding: 3rem;
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(12px);
            border-radius: 20px;
        }

        h1 {
            font-size: 3.5rem;
            background: linear-gradient(to right, #fff, #ffd700);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            text-align: center;
        }
        .btn {
            padding: 1rem 2rem;
            border-radius: 50px;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            gap: 0.8rem;
        }
        .btn-secondary {
            background: rgba(255, 255, 255, 0.1);
            color: white;
            border: 2px solid rgba(255, 255, 255, 0.2);
        }

        .experience-list {
            list-style: none;
            padding: 0;
            margin-top: 2rem;
        }

        .experience-item {
            padding: 2rem;
            background: rgba(255, 255, 255, 0.05);
            border-radius: 15px;
            margin-bottom: 1.5rem;
        }

        footer {
            text-align: center;
            padding: 2rem;
        }
    </style>
</head>
<body>
    <nav class="nav">
        <a href="/" class="logo">Chirag</a>
        <div class="nav-links">
            <a href="/about">About</a>
            <a href="/exp">Experience</a>
            <a href="/projects">Projects</a>
        </div>
        <div class="auth-links">
            <a href="{{ route('login') }}" class="btn btn-secondary">Sign In</a>
        </div>
    </nav>

    <div class="container">
        <h1>Experience</h1>
        <ul class="experience-list">
            <li class="experience-item">
                <h3>Software Development Intern</h3>
                <p>Cactus Communications</p>
                <p>September 2024 - Present</p>
                <p>Joined Cactus as a software developer intern. Joined Editage's Platform Engineering team and also worked in production support.</p>
            </li>
            <li class="experience-item">
                <h3>FrontEnd Developer Intern</h3>
                <p>VerveBridge</p>
                <p>June 2024 - July 2024</p>
                <p>Worked individually on frontend projects and completed all of them with a SER of 9.7/10. Optimized the main website using Next.js, worked on the Upgrade Website project.</p>
            </li>
        </ul>
    </div>

    <footer>
        <p>© 2023 Chirag. Crafted with <i class="fas fa-heart"></i> for the web</p>
    </footer>
</body>
</html>
