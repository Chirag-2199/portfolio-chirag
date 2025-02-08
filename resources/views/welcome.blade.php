<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to NextGen App</title>
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

        .particles {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 0;
        }

        .nav {
            position: relative;
            padding: 1.5rem 5%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            z-index: 100;
        }

        .logo {
            font-size: 1.8rem;
            font-weight: 700;
            text-decoration: none;
            color: white;
            transition: transform 0.3s;
        }

        .logo:hover {
            transform: scale(1.05);
        }

        .container {
            position: relative;
            max-width: 1200px;
            margin: 4rem auto;
            padding: 3rem;
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(12px);
            border-radius: 20px;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.1);
            transform: translateY(20px);
            opacity: 0;
            animation: fadeUp 1s forwards;
        }

        @keyframes fadeUp {
            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        h1 {
            font-size: 3.5rem;
            margin-bottom: 1.5rem;
            background: linear-gradient(to right, #fff, #ffd700);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.1);
        }

        .hero-text {
            font-size: 1.3rem;
            margin-bottom: 3rem;
            opacity: 0.9;
        }

        .cta-buttons {
            display: flex;
            gap: 1.5rem;
            justify-content: center;
            margin-bottom: 4rem;
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

        .btn-primary {
            background: var(--secondary);
            color: white;
            box-shadow: 0 4px 15px rgba(255, 107, 107, 0.4);
        }

        .btn-secondary {
            background: rgba(255, 255, 255, 0.1);
            color: white;
            border: 2px solid rgba(255, 255, 255, 0.2);
        }

        .btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 6px 20px rgba(255, 107, 107, 0.5);
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
            transition: transform 0.3s;
        }

        .feature-card:hover {
            transform: translateY(-5px);
        }

        .feature-icon {
            font-size: 2.5rem;
            margin-bottom: 1rem;
            color: var(--accent);
        }

        .feature-title {
            font-size: 1.3rem;
            margin-bottom: 1rem;
        }

        .feature-text {
            opacity: 0.8;
        }

        footer {
            text-align: center;
            padding: 2rem;
            opacity: 0.8;
        }

        @media (max-width: 768px) {
            .container {
                margin: 2rem;
                padding: 1.5rem;
            }

            h1 {
                font-size: 2.5rem;
            }

            .features {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <nav class="nav">
        <a href="#" class="logo">Chirag</a>
        <div class="auth-links">
            <a href="{{ route('login') }}" class="btn btn-secondary">Sign In</a>
        </div>
    </nav>

    <div class="container">
        <h1>Transform Your Digital Experience</h1>
        <p class="hero-text">
            Welcome to NextGen - Where innovation meets simplicity. 
            Empower your workflow with our cutting-edge Laravel-powered platform.
        </p>

        <div class="cta-buttons">
            <a href="{{ route('register') }}" class="btn btn-primary">
                <i class="fas fa-rocket"></i>
                Get Started Free
            </a>
            <a href="#features" class="btn btn-secondary">
                <i class="fas fa-binoculars"></i>
                Explore Features
            </a>
        </div>

        <div class="features" id="features">
            <div class="feature-card">
                <i class="fas fa-bolt feature-icon"></i>
                <h3 class="feature-title">Lightning Fast</h3>
                <p class="feature-text">Optimized performance with Laravel Octane and Redis caching</p>
            </div>
            <div class="feature-card">
                <i class="fas fa-shield-alt feature-icon"></i>
                <h3 class="feature-title">Enterprise Security</h3>
                <p class="feature-text">Military-grade encryption and secure authentication flows</p>
            </div>
            <div class="feature-card">
                <i class="fas fa-magic feature-icon"></i>
                <h3 class="feature-title">Smart UI</h3>
                <p class="feature-text">AI-powered interface that adapts to your workflow</p>
            </div>
        </div>
    </div>

    <footer>
        <p>© 2023 NextGen. Crafted with <i class="fas fa-heart"></i> for the web</p>
    </footer>
</body>
</html>