<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PublishPro - Register</title>
    <link rel="stylesheet" href="{{ asset('styles.css') }}">
</head>
<body>

    @include('header')
    <main class="container auth-container">
        <div class="auth-card">
            <h2 class="auth-title">Create Account</h2>
            <form class="auth-form" id="register-form">
                <div class="form-group">
                    <label for="reg-email">Email</label>
                    <input
                        type="email"
                        id="reg-email"
                        class="form-input"
                        name="email"
                        required
                        placeholder="user@example.com">
                </div>

                <div class="form-group">
                    <label for="reg-password">Password</label>
                    <input
                        type="password"
                        id="reg-password"
                        class="form-input"
                        name="password"
                        required
                        placeholder="••••••••">
                </div>

                <div class="form-group">
                    <label for="reg-confirm">Confirm Password</label>
                    <input
                        type="password"
                        id="reg-confirm"
                        class="form-input"
                        name="confirm_password"
                        required
                        placeholder="••••••••">
                </div>

                <button type="submit" class="form-button register-btn">Create Account</button>
            </form>

            <div class="auth-links">
                <a href="login.blade.php" class="auth-link">Already have an account? Sign In</a>
            </div>
        </div>
    </main>
    @include('footer')


    <script>
        document.getElementById('register-form').addEventListener('submit', function(e) {
            e.preventDefault();
            // Add registration logic here
            alert('Registration functionality coming soon!');
        });
    </script>
</body>
</html>
