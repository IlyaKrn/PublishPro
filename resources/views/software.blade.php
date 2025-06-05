<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PublishPro - Software Catalog</title>
    <link rel="stylesheet" href="{{ asset('styles.css') }}">
</head>
<body>

    @include('header')
    <!-- Main Content -->
    <main class="container">
        <h1 class="page-title">Software Catalog</h1>

        <!-- Filters Section -->
        <div class="filters">
            <form class="search-form" id="search-form">
                <input type="text"
                       class="search-input"
                       placeholder="Search software..."
                       name="q"
                       aria-label="Search software">
                <button type="submit" class="search-button">Search</button>
            </form>

            <select class="sort-select" id="sort-select" aria-label="Sort software">
                <option value="rating">Sort by Rating</option>
                <option value="downloads">Sort by Downloads</option>
                <option value="alphabetical">Sort A-Z</option>
            </select>
        </div>

        <!-- Software Cards -->
        <div id="software-cards-container">
            <ul class="software-cards">
                <!-- Card 1 -->
                <li class="software-card" data-rating="4.8" data-downloads="15200" data-name="codemaster pro">
                    <div class="card-icon-wrapper">
                        <div class="card-icon">💻</div>
                        <div class="card-icon-info">
                            <span class="data-rating" data-label="Rating">4.8</span>
                            <span class="data-downloads" data-label="Downloads">15.2K</span>
                        </div>
                    </div>
                    <div class="card-content">
                        <div class="card-header">
                            <h2>CodeMaster Pro <span class="developer">by DevTools Inc.</span></h2>
                        </div>
                        <p class="description">Advanced IDE with real-time collaboration, cloud compilation and AI-assisted coding</p>
                    </div>
                </li>

                <!-- Card 2 -->
                <li class="software-card" data-rating="4.9" data-downloads="9700" data-name="securevault">
                    <div class="card-icon-wrapper">
                        <div class="card-icon">🔐</div>
                        <div class="card-icon-info">
                            <span class="data-rating" data-label="Rating">4.9</span>
                            <span class="data-downloads" data-label="Downloads">9.7K</span>
                        </div>
                    </div>
                    <div class="card-content">
                        <div class="card-header">
                            <h2>SecureVault <span class="developer">by CyberShield</span></h2>
                        </div>
                        <p class="description">Military-grade encryption solution with multi-factor authentication</p>
                    </div>
                </li>

                <!-- Card 3 -->
                <li class="software-card" data-rating="4.6" data-downloads="23100" data-name="pixelartist">
                    <div class="card-icon-wrapper">
                        <div class="card-icon">🖼️</div>
                        <div class="card-icon-info">
                            <span class="data-rating" data-label="Rating">4.6</span>
                            <span class="data-downloads" data-label="Downloads">23.1K</span>
                        </div>
                    </div>
                    <div class="card-content">
                        <div class="card-header">
                            <h2>PixelArtist <span class="developer">by CreativeSuite</span></h2>
                        </div>
                        <p class="description">Professional raster graphics editor with layer support and 100+ filters</p>
                    </div>
                </li>

                <!-- Card 4 -->
                <li class="software-card" data-rating="4.7" data-downloads="5400" data-name="dataanalyzer">
                    <div class="card-icon-wrapper">
                        <div class="card-icon">📊</div>
                        <div class="card-icon-info">
                            <span class="data-rating" data-label="Rating">4.7</span>
                            <span class="data-downloads" data-label="Downloads">5.4K</span>
                        </div>
                    </div>
                    <div class="card-content">
                        <div class="card-header">
                            <h2>DataAnalyzer <span class="developer">by StatsLab</span></h2>
                        </div>
                        <p class="description">Statistical analysis software with R/Python integration and visualization tools</p>
                    </div>
                </li>
            </ul>
        </div>
    </main>
    @include('footer')


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
