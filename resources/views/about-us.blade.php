<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PublishPro - О Нас</title>
    <link rel="stylesheet" href="{{ asset('styles.css') }}">
</head>
<body>

    @include('header')
    <main class="container">
        <h1 class="page-title">Информация</h1>

        <div class="content-block">
            <p>Наша компания специализируется на предоставлении качественных продуктов для наших потребителей. Цель этой платформы - создать место, где каждый может легко поделиться качественным программным обеспечением или получить к нему доступ.</p>
        </div>

        <h2 class="policy-title">Политика Конфиденциальности</h2>

        <div class="content-block policy-section">
            <p>1. Уважайте других пользователей
2. Не выкладывайте вредоносные программы
3. Не выдавайте чужие программы за свои</p>
        </div>
    </main>
    @include('footer')

</body>
</html>
