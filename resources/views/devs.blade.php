<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PublishPro - Разработчики</title>
    <link rel="stylesheet" href="{{ asset('styles.css') }}">
</head>
<body>

    @include('header')
    <!-- Main Content -->
    <main class="container">
        <h1 class="page-title">Список Разработчиков</h1>
        
        <!-- Filters Section -->
        <div class="filters">
            <form class="search-form" id="dev-search-form">
                <input type="text" 
                       class="search-input" 
                       placeholder="Поиск разработчиков..."
                       name="q"
                       aria-label="Поиск разработчиков">
                <button type="submit" class="search-button">Поиск</button>
            </form>

            <select class="sort-select" id="dev-sort-select" aria-label="Сортировать разработчиков">
                <option value="rating">Сортировать по Рейтингу</option>
                <option value="downloads">Сортировать по Загрузкам</option>
                <option value="alphabetical">Сортировать по Алфавиту</option>
            </select>
        </div>

        <script>
            const developersData = [
                {
                    name: "DevTools Inc.", //Имя разработчика
                    rating: 4.9, //Рейтинг
                    downloads: 45200, //Загрузки
                    description: "Enterprise software development company specializing in developer tools and IDEs",
                    //Описание
                    //image: "d1.png", //Иконка разработчика
                    developerLink: "d1.html" //Ссылка на страничку разраба
                },
                {
                    name: "CyberShield",
                    rating: 4.8,
                    downloads: 28700,
                    description: "Security solutions provider focusing on encryption and cybersecurity products",
                    //image: "d2.png",
                    developerLink: "d2.html"
                },
                // Добавьте других разработчиков
            ];
        </script>

        <!-- Developer Cards -->
        <div id="developers-cards-container">
            <ul class="developers-cards">
                <!-- Карточки будут рендериться здесь -->
            </ul>
        </div>
    </main>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const devCards = Array.from(document.querySelectorAll('.developer-card'));
            const sortSelect = document.getElementById('dev-sort-select');
            const searchForm = document.getElementById('dev-search-form');
            const searchInput = document.querySelector('#dev-search-form .search-input');

            const sortCards = (criteria) => {
                const sorted = devCards.sort((a, b) => {
                    const aVal = a.dataset[criteria];
                    const bVal = b.dataset[criteria];
                    
                    if (criteria === 'alphabetical') {
                        return a.dataset.name.localeCompare(b.dataset.name);
                    }
                    return parseFloat(bVal) - parseFloat(aVal);
                });

                document.querySelector('.developers-cards').innerHTML = '';
                sorted.forEach(card => document.querySelector('.developers-cards').appendChild(card));
            };

            const filterCards = (query) => {
                devCards.forEach(card => {
                    const matches = card.dataset.name.includes(query.toLowerCase());
                    card.style.display = matches ? 'flex' : 'none';
                });
            };

            sortSelect.addEventListener('change', (e) => sortCards(e.target.value));
            searchForm.addEventListener('submit', (e) => {
                e.preventDefault();
                filterCards(searchInput.value);
            });
            searchInput.addEventListener('input', () => filterCards(searchInput.value));
        });
    </script>

</body>
</html>