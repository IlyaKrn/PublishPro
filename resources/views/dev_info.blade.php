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
            <div class="developer-card">
		        <div class="card-content">
                    <div class="card-header"><h2><?php echo $developer['name'] ?></h2></div>

                    <div class="stats">
                        <span class="data-rating" data-label="Рейтинг"><?php echo $developer['rating'] ?></span>
                        <span class="data-downloads" data-label="Загрузок"><?php echo $developer['downloads'] ?></span>
                    </div>

                    <section class="description">
                        <div class="description-content"><?php echo $developer['description'] ?></div>
                    </section>
                    <section class="products-section">
                        <ul>
                        <h3>Продукты разработчика</h3>
                        <?php
                            foreach ($developer['products'] as $product) {
                                echo ' <li>';
                                echo ' <a href="/software/' . $product['id'] . '" class="product-link">';
                                echo $product['name'];
                                echo ' </a>';
                                echo ' </li>';
                            }
                        ?>
                        </ul>
                    </section>
                </div>
            </div>
        </div>
    </main>
    @include('footer')

    <div id="footer-placeholder"></div>
</body>
</html>
