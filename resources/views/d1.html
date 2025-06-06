<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Разработчик - PublishPro</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div id="header-placeholder"></div>

    <main class="container developer-page">
        <div id="software-cards-container">
            <ul class="software-cards">
                <?php
                foreach ($developer_pages as $developer) {
                    echo ' <li class="developer-card">';
                    echo ' <div class="card-content">';
                    echo ' <div class="card-header">';
                    echo ' <h2>' . htmlspecialchars($developer['name']) . '</h2>';
                    echo ' <span class="developer-id">ID: ' . htmlspecialchars($developer['id']) . '</span>';
                    echo ' </div>';
                
                    echo ' <div class="stats">';
                    echo ' <span class="data-rating" data-label="Рейтинг">' . htmlspecialchars($developer['rating']) . '</span>';
                    echo ' <span class="data-downloads" data-label="Загрузок">' . htmlspecialchars($developer['downloads']) . '</span>';
                    echo ' </div>';
                
                    echo ' <section class="description">';
                    echo ' <div class="description-content">' . nl2br(htmlspecialchars($developer['description'])) . '</div>';
                    echo ' </section>';
                
                    if (!empty($developer['products'])) {
                        echo ' <section class="products-section">';
                        echo ' <h3>Продукты разработчика</h3>';
                        echo ' <ul class="products-list">';
                        foreach ($developer['products'] as $product) {
                            echo ' <li>';
                            echo ' <a href="/software/' . htmlspecialchars($product['id']) . '" class="product-link">';
                            echo ' ' . htmlspecialchars($product['name']);
                            echo ' </a>';
                            echo ' </li>';
                        }
                        echo ' </ul>';
                        echo ' </section>';
                    }
                
                    echo ' </div>';
                    echo ' </li>';
                }
                ?>
            </ul>
        </div>

        <script>
            document.addEventListener('DOMContentLoaded', () => {

                // Рендеринг описания
                document.getElementById('description-content').innerHTML = `
                    <p>${developerData.description}</p>
                `;

                // Рендеринг продуктов
                document.getElementById('products-content').innerHTML = `
                    <div class="products-list">
                        ${developerData.products.map(product => `
                            <a href="${product.link}" class="product-link">
                                ${product.name}
                            </a>
                        `).join('')}
                    </div>
                `;

                // Обновление title страницы
                document.title = `${developerData.name} - PublishPro`;
            });
        </script>
    </main>

    <div id="footer-placeholder"></div>
</body>
</html>