<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PublishPro - Developers</title>
    <link rel="stylesheet" href="{{ asset('styles.css') }}">
</head>
<body>

    @include('header')
    <!-- Main Content -->
    <main class="container">
        <h1 class="page-title">Developers Directory</h1>

        <!-- Filters Section -->
        <div class="filters">
            <form class="search-form" id="dev-search-form">
                <input type="text"
                       class="search-input"
                       placeholder="Search developers..."
                       name="q"
                       aria-label="Search developers">
                <button type="submit" class="search-button">Search</button>
            </form>

            <select class="sort-select" id="dev-sort-select" aria-label="Sort developers">
                <option value="rating">Sort by Rating</option>
                <option value="downloads">Sort by Downloads</option>
                <option value="alphabetical">Sort A-Z</option>
            </select>
        </div>

        <!-- Developer Cards -->
        <div id="developers-cards-container">
            <ul class="developers-cards">
                <!-- Developer 1 -->
                <li class="developer-card" data-rating="4.9" data-downloads="45200" data-name="devtools inc">
                    <div class="card-icon-wrapper">
                        <div class="card-icon">🏢</div>
                        <div class="card-icon-info">
                            <span class="data-rating" data-label="Rating">4.9</span>
                            <span class="data-downloads" data-label="Downloads">45.2K</span>
                        </div>
                    </div>
                    <div class="card-content">
                        <div class="card-header">
                            <h2>DevTools Inc.</h2>
                        </div>
                        <p class="description">Enterprise software development company specializing in developer tools and IDEs</p>
                    </div>
                </li>

                <!-- Developer 2 -->
                <li class="developer-card" data-rating="4.8" data-downloads="28700" data-name="cybershield">
                    <div class="card-icon-wrapper">
                        <div class="card-icon">🛡️</div>
                        <div class="card-icon-info">
                            <span class="data-rating" data-label="Rating">4.8</span>
                            <span class="data-downloads" data-label="Downloads">28.7K</span>
                        </div>
                    </div>
                    <div class="card-content">
                        <div class="card-header">
                            <h2>CyberShield</h2>
                        </div>
                        <p class="description">Security solutions provider focusing on encryption and cybersecurity products</p>
                    </div>
                </li>

                <!-- Developer 3 -->
                <li class="developer-card" data-rating="4.7" data-downloads="63400" data-name="creativesuite">
                    <div class="card-icon-wrapper">
                        <div class="card-icon">🎨</div>
                        <div class="card-icon-info">
                            <span class="data-rating" data-label="Rating">4.7</span>
                            <span class="data-downloads" data-label="Downloads">63.4K</span>
                        </div>
                    </div>
                    <div class="card-content">
                        <div class="card-header">
                            <h2>CreativeSuite</h2>
                        </div>
                        <p class="description">Digital creativity tools developer with focus on graphic design and multimedia software</p>
                    </div>
                </li>
            </ul>
        </div>
    </main>
    @include('footer')


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
