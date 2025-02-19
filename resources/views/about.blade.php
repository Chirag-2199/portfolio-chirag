<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About - NextGen App</title>
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
        }

        .features {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            margin-top: 4rem;
        }

        .feature-card {
            padding: 2rem;
            background: rgba(255, 255, 255, 0.05);
            border-radius: 15px;
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
        <h1>About Me</h1>
        <p class="hero-text">
            I am Chirag, a passionate software developer with expertise in modern web technologies. I specialize in creating dynamic, user-friendly applications with a focus on performance and security.
        </p>

        <div class="features">
            <div class="feature-card">
                <i class="fas fa-code feature-icon"></i>
                <h3 class="feature-title">Full-Stack Development</h3>
                <p class="feature-text">Skilled in frontend and backend technologies, including React.js, Laravel, and Node.js.</p>
            </div>
            <div class="feature-card">
                <i class="fas fa-lightbulb feature-icon"></i>
                <h3 class="feature-title">Innovative Solutions</h3>
                <p class="feature-text">Building scalable, efficient applications tailored to user needs.</p>
            </div>
            <div class="feature-card">
                <i class="fas fa-users feature-icon"></i>
                <h3 class="feature-title">Collaboration</h3>
                <p class="feature-text">Working with teams to create seamless and engaging digital experiences.</p>
            </div>
        </div>
    </div>

    <footer>
        <p>© 2023 NextGen. Crafted with <i class="fas fa-heart"></i> for the web</p>
    </footer>
</body>
</html>
