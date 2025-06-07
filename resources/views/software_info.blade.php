<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Software Details - PublishPro</title>
    <link rel="stylesheet" href="{{ asset('styles.css') }}">
</head>
<body>

    @include('header')
    <main class="container software-page">
        <div id="software-cards-container">
            <ul class="software-cards">
            <?php
                echo '<li class="software-card"><div class="card-content">';

                echo '<div class="card-header">';
                echo '<h2>' . $software['name'] . '</h2>';
                echo '<a href="/developer/' . $software['developer_id'] . '" class="developer">' . $software['developer_name'] . '</a></div>';

                echo '<div class="stats">';
                echo '<span class="data-rating" data-label="Рейтинг">' . $software['rating'] . '</span>';
                echo '<span class="data-downloads" data-label="Загрузок">' . $software['downloads'] . '</span>';
                echo '</div>';

                echo '<section class="description">';
                echo '<div class="description-content">' . $software['description'] . '</div>';
                echo '</section>';

                if (!empty($software['changelog'])) {
                    echo '<section class="content-section"><h2>История изменений</h2><ul class="changelog-list">';
                    foreach ($software['changelog'] as $change) {
                        echo '<li>' . $change['description'] . '</li>';
                    }
                    echo '</ul></section>';
                }

                if (!empty($software['downloads_list'])) {
                    echo '<section class="content-section"><h2>Скачать</h2><div class="download-links">';
                    foreach ($software['downloads_list'] as $link) {
                        echo '<a href="' . $link['url'] . '" class="download-button">' . $link['label'] . '</a>';
                    }
                    echo '</div></section>';
                }
                echo '</div></li>'; // закрываем software-card

            ?>
            </ul>
        </div>
        @include('footer')
</body>
</html>
