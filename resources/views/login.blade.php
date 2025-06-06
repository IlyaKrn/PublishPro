<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PublishPro - Логин</title>
    <link rel="stylesheet" href="{{ asset('styles.css') }}">
</head>
<body>

    @include('header')
    <main class="container auth-container">
        <div class="auth-card">
            <h2 class="auth-title">Sign In to DevHub</h2>
            <form class="auth-form" id="login-form">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input
                        type="email"
                        id="email"
                        class="form-input"
                        name="email"
                        required
                        placeholder="user@example.com">
                </div>

                <div class="form-group">
                    <label for="password">Пароль</label>
                    <input
                        type="password"
                        id="password"
                        class="form-input"
                        name="password"
                        required
                        placeholder="••••••••">
                </div>

                <button type="submit" class="form-button login-btn">Sign In</button>
            </form>

            <div class="auth-links">
                <a href="register.blade.php" class="auth-link">Create new account</a>
                <a href="#" class="auth-link">Забыли пароль?</a>
            </div>
        </div>
    </main>
    @include('footer')


    <script>
        document.getElementById('login-form').addEventListener('submit', function(e) {
            e.preventDefault();
            // Add login logic here
            alert('Login functionality coming soon!');
        });
    </script>
</body>
</html>
