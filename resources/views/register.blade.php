<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PublishPro - Регистрация</title>
    <link rel="stylesheet" href="{{ asset('styles.css') }}">
    <style>
        /* Добавленные стили */
        .software-section {
            margin: 2rem 0;
            border-top: 2px solid #eee;
            padding-top: 1.5rem;
        }

        .add-software-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 1rem;
        }

        .add-btn {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: #43B0F1;
            border: none;
            color: white;
            font-size: 1.5rem;
            cursor: pointer;
            transition: transform 0.2s ease;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .add-btn:hover {
            transform: scale(1.1);
        }
    </style>
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
                    <label for="dev-description">Описание разработчика</label>
                    <textarea
                        id="dev-description"
                        class="form-input"
                        name="description"
                        rows="4"
                        placeholder="Расскажите о себе и вашем опыте"></textarea>
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

                <!-- Секция добавления софта -->
                <div class="software-section">
                    <div class="add-software-header">
                        <h3>Добавить софт</h3>
                        <button type="button" class="add-btn">+</button>
                    </div>
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