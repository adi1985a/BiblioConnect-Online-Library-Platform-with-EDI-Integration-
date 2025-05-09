<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dodaj nową książkę</title>

    <!-- Styles -->
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
            text-align: center;
            color: #343a40;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
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

        /* Dodany nowy styl dla div z wyszukaj ksiazke */
        .search-box {
            text-align: center;
            margin-top: 10px;
            margin-bottom: 10px;
            padding: 0px;
        }

        /* Dodany nowy styl dla tekstu w menu po najechaniu myszką */
        .menu a:hover {
            background-color: #ffe600;
            color: #2d3748;
        }

        /* Styl dla nagłówka pierwszego poziomu */
        h1 {
            margin-bottom: 1rem;
            color: #4299e1; /* Kolor dla nagłówka */
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
            padding: 20px;
            margin-top: auto; /* Ustaw stopkę na samym dole ekranu */
        }

        /* Styl dla małego tekstu stopki */
        p {
            font: 14px Arial, sans-serif;
        }

        /* Dodany styl dla formularza */
        form {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-top: 20px;
        }

        /* Dodany styl dla labeli w formularzu */
        label {
            margin-top: 10px;
            font-size: 1.2rem;
            color: #4299e1;
        }

        /* Dodany styl dla inputów w formularzu */
        input {
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ced4da;
            border-radius: 4px;
            box-sizing: border-box;
        }

        /* Dodany styl dla przycisku w formularzu */
        button {
            background-color: #4299e1;
            color: #ffffff;
            padding: 10px 20px;
            margin-top: 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        /* Dodany styl dla przycisku w formularzu po najechaniu myszką */
        button:hover {
            background-color: #1a78c2;
        }
    </style>
</head>
<body>

<!-- Nagłówek strony -->
<div class="header">
    <h1>Dodaj nową książkę</h1>
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
<br/><br/>

<!-- Formularz dodawania książki -->
<form action="{{ route('ksiazki.zapisz') }}" method="post" enctype="multipart/form-data">
    @csrf
    <label for="tytul">Tytuł:</label>
    <input type="text" name="tytul" required>

    <label for="autor">Autor:</label>
    <input type="text" name="autor" required>

    <label for="rok_wydania">Rok wydania:</label>
    <input type="number" name="rok_wydania" required>

    <label for="kategoria">Kategoria:</label>
    <input type="text" name="kategoria" required>

    <label for="zdjecie">Zdjęcie:</label>
    <input type="file" name="zdjecie">

    <button type="submit">Dodaj książkę</button>
</form>

<!-- Stopka strony -->
<footer>
    <p>&copy; 2024 Laravel BiblioConnect. Wszelkie prawa zastrzeżone.</p>
</footer>

</body>
</html>
