<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Главная страница</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <header>
        <div class="logo">
            <img src="{{ Vite::asset('resources/images/logo.png') }}" alt="Логотип сайта" width="100">
        </div>
        <nav>
            <ul>
                <li><a href="{{ route('home') }}">Главная</a></li>
                <li><a href="{{ route('array') }}">Массивы</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <h1>НАРУШЕНИЙ.НЕТ</h1>
        <img src="{{ Vite::asset('resources/images/main-pic.jpg') }}" alt="Основная картинка" width="400">
        <p></p>
    </main>
    <footer>
        <p>&copy; {{ date('Y') }} Аминев Александр Анатльевич П-44.</p>
    </footer>
</body>
</html>