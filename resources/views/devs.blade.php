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
                    name: "DevTools Inc.",
                    rating: 4.9,
                    downloads: 45200,
                    description: "Enterprise software development company specializing in developer tools and IDEs",
                    image: "d1.png",
                    developerLink: "d1.html"
                },
                {
                    name: "CyberShield",
                    rating: 4.8,
                    downloads: 28700,
                    description: "Security solutions provider focusing on encryption and cybersecurity products",
                    image: "d2.png",
                    developerLink: "d2.html"
                },
                // Добавьте других разработчиков
            ];
        
            function renderDeveloperCards() {
                const container = document.querySelector('.developers-cards');
                container.innerHTML = developersData.map(dev => `
                    <li class="developer-card" 
                        data-rating="${dev.rating}" 
                        data-downloads="${dev.downloads}" 
                        data-name="${dev.name.toLowerCase()}">
                        
                        <div class="card-icon-wrapper">
                            <a href="${dev.developerLink}" class="card-icon-link">
                                <img src="${dev.image}" alt="${dev.name}" class="card-icon-image">
                            </a>
                            <div class="card-icon-info">
                                <span class="data-rating" data-label="Rating">${dev.rating}</span>
                                <span class="data-downloads" data-label="Downloads">${(dev.downloads/1000).toFixed(1)}K</span>
                            </div>
                        </div>
                        
                        <div class="card-content">
                            <div class="card-header">
                                <h2>
                                    <a href="${dev.developerLink}" class="developer-link">${dev.name}</a>
                                </h2>
                            </div>
                            <p class="description">${dev.description}</p>
                        </div>
                    </li>
                `).join('');
            }
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
            renderDeveloperCards();
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