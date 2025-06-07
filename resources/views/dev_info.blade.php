<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Разработчик - PublishPro</title>
    <link rel="stylesheet" href="{{ asset('styles.css') }}">
</head>
<body>

    @include('header')
    <main class="container developer-page">
        <div id="software-cards-container">
            <?php
		        echo ' <div class="developer-card">';
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
                echo ' </div>';
		    ?>
        </div>
    </main>
    @include('footer')

    <div id="footer-placeholder"></div>
</body>
</html>
