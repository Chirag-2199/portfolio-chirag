<x-guest-layout>
    <head>
        <title>Login</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
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
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
            }

            .login-container {
                background: rgba(255, 255, 255, 0.1);
                backdrop-filter: blur(12px);
                padding: 2rem;
                border-radius: 20px;
                box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
                border: 1px solid rgba(255, 255, 255, 0.1);
                width: 100%;
                max-width: 400px;
                text-align: center;
                animation: fadeUp 0.8s ease-out forwards;
                opacity: 0;
                transform: translateY(20px);
            }

            @keyframes fadeUp {
                to {
                    opacity: 1;
                    transform: translateY(0);
                }
            }

            h1 {
                font-size: 2rem;
                background: linear-gradient(to right, #fff, #ffd700);
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;
                text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.1);
                margin-bottom: 1rem;
            }

            .btn {
                width: 100%;
                padding: 0.75rem;
                border-radius: 50px;
                font-weight: bold;
                transition: all 0.3s ease;
            }

            .btn-primary {
                background: var(--secondary);
                color: white;
                box-shadow: 0 4px 15px rgba(255, 107, 107, 0.4);
            }

            .btn:hover {
                transform: translateY(-3px);
                box-shadow: 0 6px 20px rgba(255, 107, 107, 0.5);
            }

            .form-label {
                font-weight: 600;
            }

            .form-control {
                background: rgba(255, 255, 255, 0.2);
                color: white;
                border: none;
            }

            .form-control:focus {
                background: rgba(255, 255, 255, 0.3);
                color: white;
                box-shadow: none;
            }

            .alert {
                border-radius: 8px;
                font-weight: bold;
            }
        </style>
    </head>

    <body>
        <div class="login-container">
            <h1>Login</h1>

            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')" />

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <!-- Email Address -->
                <div class="mb-3">
                    <x-input-label for="email" :value="__('Email')" />
                    <x-text-input id="email" class="form-control" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2 text-danger" />
                </div>

                <!-- Password -->
                <div class="mb-3">
                    <x-input-label for="password" :value="__('Password')" />
                    <x-text-input id="password" class="form-control" type="password" name="password" required autocomplete="current-password" />
                    <x-input-error :messages="$errors->get('password')" class="mt-2 text-danger" />
                </div>

                <!-- Remember Me -->
                <div class="mb-3 form-check">
                    <input id="remember_me" type="checkbox" class="form-check-input" name="remember">
                    <label for="remember_me" class="form-check-label text-white">
                        {{ __('Remember me') }}
                    </label>
                </div>

                <div class="d-flex justify-content-between">
                    @if (Route::has('password.request'))
                        <a class="text-sm text-warning" href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                    @endif

                    <x-primary-button class="btn btn-primary">
                        {{ __('Log in') }}
                    </x-primary-button>
                </div>
            </form>
        </div>
    </body>
</x-guest-layout>
