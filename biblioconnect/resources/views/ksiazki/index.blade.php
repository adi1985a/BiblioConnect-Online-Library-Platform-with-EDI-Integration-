<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Wyniki wyszukiwania książek</title>
    
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <script src="{{ asset('js/main.js') }}" defer></script>

    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
            text-align: center;
            color: #343a40;
        }

        .header {
            background-color: #4299e1;
            padding: 20px;
            text-align: center;
        }

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
            background-color: #ffe600;
            color: #2d3748;
        }

        h1 {
            margin-bottom: 1rem;
        }

        section {
            padding: 2rem;
        }

        p {
            font-size: 1.2rem;
            line-height: 1.6;
            color: #6c757d;
        }

        .cta-button {
            display: block;
            margin: 10px auto;
            padding: 10px 20px;
            font-size: 1.2rem;
            text-decoration: none;
            background-color: #007bff;
            color: #ffffff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .cta-button:hover {
            background-color: #0056b3;
        }

        footer {
            background-color: #343a40;
            color: #ffffff;
            padding: 20px;
            
            bottom: 0;
            width: 100%;
        }

        p {
            font: 14px Arial, sans-serif;
        }

        /* Nowe style dla tabeli i przycisków */
        table {
        width: 80%; /* Dostosuj szerokość tabeli według potrzeb */
        margin: 20px auto; /* Ustawienie marginesów, aby tabela była wyśrodkowana */
        border-collapse: collapse;
        }

        th, td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        .actions button {
        padding: 10px 15px;
        margin: 5px;
        background-color: #007bff;
        color: #ffffff;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

        .actions button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

    <h1>Wyszukiwanie Książek</h1>

    <div class="menu">
        <a href="/">Strona Główna</a>
        <a href="{{ route('ksiazki.index') }}">Lista Książek</a>
        <a href="{{ route('ksiazki.dodaj') }}">Dodaj Książkę</a>
        <a href="{{ route('login') }}">Logowanie</a>
        <a href="{{ route('register') }}">Rejestracja</a>
        <a href="{{ route('ksiazki.wyszukaj') }}">Wyszukiwanie szczegółowe</a>
    </div>
    <br/><br/>

  

    <h1 class="mb-4">Lista dostępnych książek.</h1>
<hr/>
    <table>
        <tr>
            <th>Tytuł</th>
            <th>Autor</th>
            <th>Kategoria</th>
            <th>Akcje</th>
        </tr>
        @foreach($ksiazki as $ksiazka)
            <tr>
                <td>{{ $ksiazka->tytul }}</td>
                <td>{{ $ksiazka->autor }}</td>
                <td>{{ $ksiazka->kategoria }}</td>
                <td class="actions">
                    @if($ksiazka->dostepnosc)
                        <form action="{{ route('ksiazki.wypozycz', $ksiazka) }}" method="post">
                            @csrf
                            <button type="submit" class="cta-button">Wypożycz</button>
                        </form>
                    @else
                        <form action="{{ route('ksiazki.zwroc', $ksiazka) }}" method="post">
                            @csrf
                            <button type="submit" class="cta-button">Zwróć</button>
                        </form>
                    @endif
                </td>
            </tr>
        @endforeach
    </table>

    <footer>
    <p>&copy; 2024 Laravel BiblioConnect. Wszelkie prawa zastrzeżone.</p>
</footer>

    <script src="{{ asset('node_modules/bootstrap/dist/js/bootstrap.min.js') }}"></script>
</body>
</html>
