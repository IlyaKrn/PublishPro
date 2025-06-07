<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Software Details - PublishPro</title>
    @include('header')
    @include('footer')
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div id="header-placeholder"></div>

    <main class="container software-page">
        <div id="software-cards-container">
            <ul class="software-cards">
            <?php
                foreach ($software_pages as $software) {
                    echo '<li class="software-card">';
                    echo '<div class="card-content">';
                            
                    // Заголовок и основная информация
                    echo '<div class="card-header">';
                    echo '<a href="/software/' . $software['id'] . '" class="software-link">';
                    echo '<h2>' . htmlspecialchars($software['name']) . '</h2>';
                    echo '</a>';
                    echo '<a href="/developer/' . $software['developer_id'] . '" class="developer">';
                    echo htmlspecialchars($software['developer_name']);
                    echo '</a>';
                    echo '</div>';
                        
                    // Статистика
                    echo '<div class="stats">';
                    echo '<span class="data-rating" data-label="Рейтинг">' . htmlspecialchars($software['rating']) . '</span>';
                    echo '<span class="data-downloads" data-label="Загрузок">' . htmlspecialchars($software['downloads']) . '</span>';
                    echo '</div>';
                    
                    // Описание
                    echo '<section class="description">';
                    echo '<div class="description-content">' . nl2br(htmlspecialchars($software['description'])) . '</div>';
                    echo '</section>';
                    
                    // История изменений
                    if (!empty($software['changelog'])) {
                        echo '<section class="content-section">';
                        echo '<h2>История изменений</h2>';
                        echo '<ul class="changelog-list">';
                        foreach (explode("\n", $software['changelog']) as $change) {
                            echo '<li>' . htmlspecialchars(trim($change)) . '</li>';
                        }
                    echo '</ul>';
                    echo '</section>';
                    }
                    
                    // Ссылки для скачивания
                    if (!empty($software['downloads'])) {
                        echo '<section class="content-section">';
                        echo '<h2>Скачать</h2>';
                        echo '<div class="download-links">';
                        foreach ($software['downloads'] as $link) {
                            echo '<a href="' . htmlspecialchars($link['url']) . '" class="download-button">';
                            echo htmlspecialchars($link['label']);
                            echo '</a>';
                        }
                        echo '</div>';
                        echo '</section>';
                    }
                    echo '</div>'; // закрываем card-content
                    echo '</li>'; // закрываем software-card
                }
            ?>
            </ul>
        </div>

        <script>
            document.addEventListener('DOMContentLoaded', () => {

                // Рендеринг описания
                document.getElementById('description-content').innerHTML = `
                    <p>${softwareData.description}</p>
                `;

                // Рендеринг списка изменений
                document.getElementById('changelog-content').innerHTML = `
                    <ul class="changelog-list">
                        ${softwareData.changelog.map(item => `<li>${item}</li>`).join('')}
                    </ul>
                `;

                // Рендеринг ссылок для скачивания
                document.getElementById('downloads-content').innerHTML = `
                    <div class="download-links">
                        ${softwareData.downloadLinks.map(link => `
                            <a href="${link.url}" class="download-button">
                                ${link.text}
                            </a>
                        `).join('')}
                    </div>
                `;

                // Обновление title страницы
                document.title = `${softwareData.name} - PublishPro`;
            });
        </script>
    </main>

    <div id="footer-placeholder"></div>
</body>
</html>