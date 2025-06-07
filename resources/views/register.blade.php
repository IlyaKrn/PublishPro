<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PublishPro - Регистрация</title>
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
                    <label for="reg-password">Пароль</label>
                    <input
                        type="password"
                        id="reg-password"
                        class="form-input"
                        name="password"
                        required
                        placeholder="••••••••">
                </div>

                <div class="form-group">
                    <label for="reg-confirm">Подтвердите пароль</label>
                    <input
                        type="password"
                        id="reg-confirm"
                        class="form-input"
                        name="confirm_password"
                        required
                        placeholder="••••••••">
                </div>

                <button type="submit" class="form-button register-btn">Создать Аккаунт</button>
            </form>

            <div class="auth-links">
                <a href="login.blade.php" class="auth-link">Уже есть аккаунт? Войдите</a>
            </div>
        </div>
    </main>
    @include('footer')
</body>
</html>
