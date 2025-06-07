<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PublishPro</title>
    <link rel="stylesheet" href="{{ asset('styles.css') }}">
</head>
<body>

    @include('header')
    <main class="container">
        <h1 class="page-title">Лучшие Программы</h1>
        <div id="software-cards-container">
            <ul class="software-cards">
            <?php
                foreach ($software_list as $software) {
                    echo '<li class="software-card"><div class="card-content"><div class="card-header">';
                    echo '<a href="/software/' . $software['id'] . '" class="software-link"><h2>' . $software['name'] . '</h2></a>';
                    echo '<a href="/devs/' . $software['developer_id'] . '" class="developer">' . $software['developer_name'] . '</a></div>';
                    echo '<div class="stats"><span class="data-rating" data-label="Рейтинг">' . $software['rating'] . '</span>';
                    echo '<span class="data-downloads" data-label="Загрузок">' . $software['downloads'] . ' Скачиваний</span></div>';
                    echo '<section class="description"><h3>Описание</h3>';
                    echo '<div class="description-content">' . $software['description'] . '</div>';
                    echo '</section></div></li>';
                }
            ?>
            </ul>
        </div>
    </main>
    @include('footer')

</body>
</html>
