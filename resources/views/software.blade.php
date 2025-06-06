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

        <script>
            const softwareData = [
                {
                    name: "CodeMaster Pro", //Имя программы
                    developer: "DevTools Inc.", //Имя разраба
                    rating: 4.8, //Рейтинг
                    downloads: 15200, // Загрузки
                    description: "Advanced IDE with real-time collaboration, cloud compilation and AI-assisted coding",
                    //Описание
                    image: "s1d1.png", //Иконка приложения
                    softwareLink: "s1d1.html", //Ссылка на страничку приложения
                    developerLink: "d1.html" //Ссылка на страничку разработчика
                },

                {
                    name: "Penis",
                    developer: "Dildo",
                    rating: 5.0,
                    downloads: 152000,
                    description: "Advanced pisya with real-time collaboration, cloud compilation and AI-assisted coding",
                    image: "s1d2.png",
                    softwareLink: "s1d2.html",
                    developerLink: "d2.html"
                },
                // Добавьте другие программы по аналогии
            ];
        </script>

        <!-- Software Cards -->
        <div id="software-cards-container">
            <ul class="software-cards">
                <!-- Карточки будут рендериться здесь -->
            </ul>
        </div>
    </main>

    <!-- Scripts -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const cards = Array.from(document.querySelectorAll('.software-card'));
            const sortSelect = document.getElementById('sort-select');
            const searchForm = document.getElementById('search-form');
            const searchInput = document.querySelector('.search-input');

            // Sorting functionality
            const sortCards = (criteria) => {
                const sorted = cards.sort((a, b) => {
                    const aVal = a.dataset[criteria];
                    const bVal = b.dataset[criteria];
                    
                    if (criteria === 'alphabetical') {
                        return a.dataset.name.localeCompare(b.dataset.name);
                    }
                    return parseFloat(bVal) - parseFloat(aVal);
                });

                document.querySelector('.software-cards').innerHTML = '';
                sorted.forEach(card => document.querySelector('.software-cards').appendChild(card));
            };

            // Search functionality
            const filterCards = (query) => {
                cards.forEach(card => {
                    const matches = card.dataset.name.includes(query.toLowerCase());
                    card.style.display = matches ? 'flex' : 'none';
                });
            };

            // Event listeners
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