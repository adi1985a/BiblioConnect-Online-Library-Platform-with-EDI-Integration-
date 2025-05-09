<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wyniki wyszukiwania książek</title>
    <link rel="stylesheet" href="{{ asset('node_modules/bootstrap/dist/css/bootstrap.min.css') }}">

    <!-- Styles -->
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

        /* Dodany nowy styl dla div z wyszukaj książkę */
        .search-box {
            text-align: center;
            margin-top: 10px;
            margin-bottom: 10px;
            padding: 0px;
        }

        /* Zmieniony styl dla tekstu w menu po najechaniu myszką */
        .menu a:hover {
            background-color: #ffe600;
            color: #2d3748;
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
            padding: 1rem;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>

    <!-- Nagłówek strony -->
    <h1>Wyniki wyszukiwania książek</h1>

    <!-- Menu nawigacyjne -->
    <div class="menu">
        <a href="/">Strona Główna</a>
        <a href="{{ route('ksiazki.index') }}">Lista Książek</a>
        <a href="{{ route('ksiazki.dodaj') }}">Dodaj Książkę</a>
        <a href="{{ route('login') }}">Logowanie</a>
        <a href="{{ route('register') }}">Rejestracja</a>
        <a href="{{ route('ksiazki.wyszukaj') }}">Wyszukiwanie szczegółowe</a>
    </div>
    <br/><br/>

    <!-- Nagłówek wyników wyszukiwania -->
    <h1 class="mb-4">Wyniki wyszukiwania książek</h1>

    <!-- Warunek sprawdzający czy są wyniki -->
    @if(count($ksiazki) > 0)
        <!-- Lista wyników w formie listy -->
        <ul class="list-group">
            @foreach($ksiazki as $ksiazka)
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    {{ $ksiazka->tytul }} - {{ $ksiazka->autor }}
                    <span class="badge bg-primary rounded-pill">{{ $ksiazka->kategoria }}</span>
                </li>
            @endforeach
        </ul>
    @else
        <!-- Komunikat o braku wyników -->
        <p class="mt-4">Brak wyników wyszukiwania.</p>
    @endif

    <!-- Skrypty JS -->
    <script src="{{ asset('node_modules/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    
    <!-- Stopka strony -->
    <footer>
        <p>&copy; 2024 Laravel BiblioConnect. Wszelkie prawa zastrzeżone.</p>
    </footer>

</body>
</html>
