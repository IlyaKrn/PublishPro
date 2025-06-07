<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PublishPro - Каталог Программ</title>
    <link rel="stylesheet" href="{{ asset('styles.css') }}">
</head>
<body>

    @include('header')
    <!-- Main Content -->
    <main class="container">
        <h1 class="page-title">Каталог Программ</h1>

        <!-- Filters Section -->
        <div class="filters">
            <form class="search-form" id="search-form">
                <input type="text"
                       class="search-input"
                       placeholder="Поиск программ..."
                       name="q"
                       aria-label="Поиск программ">
                <button type="submit" class="search-button">Поиск</button>
            </form>

            <select class="sort-select" id="sort-select" aria-label="Сортировать программы">
                <option value="rating">Сортировать по Рейтингу</option>
                <option value="downloads">Сортировать по Загрузкам</option>
                <option value="alphabetical">Сортировать по Алфавиту</option>
            </select>
        </div>

        <div id="software-cards-container">
            <ul class="software-cards">
            <?php
                foreach ($software_list as $software) {
                    echo '<li class="software-card">';
                    echo '<div class="card-content">';
                    echo '<div class="card-header">';
                    echo '<a href="/software/' . $software['id'] . '" class="software-link"><h2>' . htmlspecialchars($software['name']) . '</h2></a>';
                    echo '<a href="/developer/' . $software['developer_id'] . '" class="developer">' . htmlspecialchars($software['developer_name']) . '</a></div>';
                    echo '<div class="stats">';
                    echo '<span class="data-rating" data-label="Рейтинг">' . $software['rating'] . '</span>';
                    echo '<span class="data-downloads" data-label="Загрузок">' . $software['downloads'] . '</span>';
                    echo '</div>';
                    echo '<section class="description">';
                    echo '<h3>Описание</h3>';
                    echo '<div class="description-content">' . nl2br(htmlspecialchars($software['description'])) . '</div>';
                    echo '</section>';
                    echo '</div>';
                    echo '</li>';
                }
            ?>
            </ul>
        </div>
    </main>
</body>
</html>
