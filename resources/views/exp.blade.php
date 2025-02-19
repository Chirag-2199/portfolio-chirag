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

        .nav-links {
            display: flex;
            gap: 2rem;
            align-items: center;
        }

        .nav-links a {
            color: white;
            text-decoration: none;
            font-weight: 500;
            font-size: 1.1rem;
            padding: 0.5rem 1rem;
            border-radius: 8px;
            transition: all 0.3s ease;
            opacity: 0.9;
        }

        .nav-links a:hover {
            background: rgba(255, 255, 255, 0.1);
            transform: translateY(-2px);
            opacity: 1;
        }

        .experience-section {
            margin: 4rem auto;
            padding: 2rem;
            max-width: 800px;
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(8px);
            border-radius: 15px;
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.1);
            transform: translateY(20px);
            opacity: 0;
            animation: fadeUp 1s forwards;
        }

        .experience-section h2 {
            font-size: 2.5rem;
            margin-bottom: 1.5rem;
            text-align: center;
            color: #ffd700;
        }

        .experience-list {
            list-style: none;
            padding: 0;
        }

        .experience-list li {
            padding: 1.5rem;
            margin-bottom: 1.5rem;
            background: rgba(255, 255, 255, 0.05);
            border-radius: 12px;
            transition: transform 0.3s ease-in-out;
        }

        .experience-list li:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 20px rgba(255, 255, 255, 0.2);
        }

        .experience-list h3 {
            font-size: 1.8rem;
            color: var(--primary);
            margin-bottom: 0.5rem;
        }

        .experience-list p {
            font-size: 1.1rem;
            color: white;
            opacity: 0.9;
        }

        @keyframes fadeUp {
            to {
                transform: translateY(0);
                opacity: 1;
            }
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
    </nav>

    <div class="experience-section">
        <h2>Experience</h2>
        <ul class="experience-list">
            <li>
                <h3>Software Development Intern</h3>
                <p>Cactus Communications</p>
                <p>Septemeber 2024 - Present</p>
                <p>Job Description: Joined Cactus as a software developer intern . Joined Editage's Platform engineering team and also worked in prodcution supoort team.</p>
            </li>
            <li>
                <h3>Job Title 2</h3>
                <p>Company Name 2</p>
                <p>Duration: June 2018 - December 2019</p>
                <p>Job Description: Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </li>
        </ul>
    </div>
</body>
</html>
