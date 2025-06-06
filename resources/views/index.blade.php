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
                    foreach ($top_software as $software){
                        //здесь надо вывести оставшиеся значения по аналогии с уже готовыми (сделать слили и html)
/id
//name
//description
//developer_id
//developer_name
//rating
//downloads
                        echo '<li>';
                        echo '<a href="/software/' . $software['id'] . '" class="software-header">' . $software['name'] . '</a>';
                        echo '<section class="content-section"><h2>Описание</h2><div class="description-content">' . $software['description'] . '</div></section>';
                        echo '</li>';
                    }
                ?>
            </ul>
        </div>
    </main>
    @include('footer')

</body>
</html>
