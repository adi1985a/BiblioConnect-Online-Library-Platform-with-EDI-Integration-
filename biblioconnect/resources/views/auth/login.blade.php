<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logowanie</title>

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
            background-color: #4a5568;
            color: #ffe600;
        }

        .main-content {
            text-align: center;
            padding: 20px;
            flex: 1;
        }

        h1 {
            margin-bottom: 1rem;
            color: #4299e1;
        }

        form {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-top: 20px;
        }

        label {
            margin-top: 10px;
            font-size: 1.2rem;
            color: #4299e1;
        }

        input {
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ced4da;
            border-radius: 4px;
            box-sizing: border-box;
            width: 300px; /* Dostosuj szerokość do potrzeb */
        }

        button {
            background-color: #4299e1;
            color: #ffffff;
            padding: 10px 20px;
            margin-top: 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #1a78c2;
        }

        footer {
            background-color: #343a40;
            color: #ffffff;
            padding: 20px;
        }

        p {
            font: 14px Arial, sans-serif;
        }
    </style>
</head>
<body>

<div class="header">
    <h1>Logowanie</h1>
</div>

<div class="menu">
    <a href="/">Strona Główna</a>
    <a href="{{ route('ksiazki.index') }}">Lista Książek</a>
    <a href="{{ route('ksiazki.dodaj') }}">Dodaj Książkę</a>
    <a href="{{ route('login') }}">Logowanie</a>
    <a href="{{ route('register') }}">Rejestracja</a>
    <a href="{{ route('ksiazki.wyszukaj') }}">Wyszukiwanie szczegółowe</a>
</div>
<br/><br/>

<div class="main-content">
    <form action="{{ route('login') }}" method="post">
        @csrf
        <label for="imie">Imię:</label>
        <input type="text" name="imie" required>

        <label for="email">Email:</label>
        <input type="email" name="email" required>

        <label for="haslo">Hasło:</label>
        <input type="password" name="haslo" required>

        <button type="submit">Zaloguj</button>
    </form>
</div>

<footer>
    <p>&copy; 2024 Laravel BiblioConnect. Wszelkie prawa zastrzeżone.</p>
</footer>

</body>
</html>
