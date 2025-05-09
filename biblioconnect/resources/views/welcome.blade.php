<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- Ustawienia kodowania i widoku dla urządzeń -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>

    <!-- Ładowanie fontów z zewnętrznego źródła i arkusza stylów -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Stylizacja strony -->
    <style>
        /* Styl dla całego ciała dokumentu */
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
            text-align: center;
            color: #343a40;
        }

        /* Styl dla nagłówka strony */
        .header {
            background-color: #4299e1;
            padding: 20px;
            text-align: center;
        }

        /* Styl dla menu nawigacyjnego */
        .menu {
            background-color: #2d3748;
            overflow: hidden;
            display: flex;
            justify-content: center;
            padding: 5px;
        }

        .menu a {
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            margin: 0 10px;
        }

        .menu a:hover {
            background-color: #4a5568;
            color: #ffe600;
        }

        /* Styl dla głównej treści strony */
        .main-content {
            text-align: center;
            padding: 20px;
        }

        .main-content img {
            max-width: 100%;
            height: auto;
            margin-top: 20px;
        }

        /* Styl dla pola wyszukiwania */
        .search-box {
            text-align: center;
            margin-top: 10px;
            margin-bottom: 10px;
            padding: 0px;
        }

        /* Styl dla nagłówka pierwszego poziomu */
        h1 {
            margin-bottom: 1rem;
        }

        /* Styl dla sekcji dokumentu */
        section {
            padding: 2rem;
        }

        /* Styl dla akapitu */
        p {
            font-size: 1.2rem;
            line-height: 1.6;
            color: #6c757d;
        }

        /* Styl dla przycisku call-to-action */
        .cta-button {
            display: inline-block;
            padding: 1rem 2rem;
            font-size: 1.2rem;
            text-decoration: none;
            background-color: #28a745;
            color: #ffffff;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .cta-button:hover {
            background-color: #218838;
        }

        /* Styl dla stopki strony */
        footer {
            background-color: #343a40;
            color: #ffffff;
            padding: 20px; /* Dodany padding dla lepszego wyglądu */
            bottom: 0;
            width: 100%;
        }

        /* Styl dla małego tekstu stopki */
        p {
            font: 14px Arial, sans-serif;
        }
    </style>
</head>
<body class="antialiased">

<!-- Nagłówek strony -->
<div class="header">
    <h1>Laravel BiblioConnect</h1>
    <!-- Formularz wyszukiwania książek -->
    <div class="search-box">
        <form class="form-inline" method="GET" action="{{ route('ksiazki.wyszukaj') }}">
            <label for="search" class="sr-only">Wyszukaj książkę:</label>
            <input type="text" class="form-control" id="search" placeholder="Wpisz nazwę książki">
            <button type="submit" class="btn btn-primary">Szukaj</button>
        </form>
    </div>
</div>

<!-- Menu nawigacyjne -->
<div class="menu">
    <a href="/">Strona Główna</a>
    <a href="{{ route('ksiazki.index') }}">Lista Książek</a>
    <a href="{{ route('ksiazki.dodaj') }}">Dodaj Książkę</a>
    <a href="{{ route('login') }}">Logowanie</a>
    <a href="{{ route('register') }}">Rejestracja</a>
    <a href="{{ route('ksiazki.wyszukaj') }}">Wyszukiwanie szczegółowe</a>
</div>

<!-- Główna treść strony -->
<div class="main-content">
    <header>
        <h1>Witaj w Naszej Bibliotece Online</h1>
        <p>
            Zapraszamy do korzystania z naszej nowoczesnej biblioteki online, gdzie znajdziesz bogaty zbiór książek różnych gatunków. Odkrywaj fascynujące historie, zgłębiaj wiedzę i czerp przyjemność z czytania, gdziekolwiek jesteś.
        </p>
        <!-- Obrazek tła w nagłówku -->
        <img src="{{ asset('img/tlo (4).jpg') }}" alt="Biblioteka">
    </header>

    <!-- Sekcja informacyjna o bibliotece -->
    <section>
        <h2>O Naszej Bibliotece</h2>
        <p>
            Nasza biblioteka oferuje szeroki wybór książek, od literatury pięknej po literaturę naukową. Z nami zawsze będziesz na bieżąco z najnowszymi bestsellerami, a także będziesz mógł eksplorować klasykę literatury. Dołącz do naszej społeczności i dziel się swoimi ulubionymi książkami z innymi czytelnikami.
        </p>
        <!-- Przycisk do zobaczenia listy książek -->
        <a href="{{ route('ksiazki.index') }}" class="cta-button">Zobacz Listę Książek</a>
    </section>
</div>

<!-- Stopka strony -->
<footer>
    <!-- Informacja o prawach autorskich -->
    <p>&copy; 2024 Laravel BiblioConnect. Wszelkie prawa zastrzeżone.</p>
</footer>

</body>
</html>
