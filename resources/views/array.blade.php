<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Страница массивов</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        .products-grid {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            padding: 20px;
        }
        .product-card {
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 15px;
            width: 200px;
            text-align: center;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        .product-card img {
            max-width: 100%;
            height: auto;
            border-radius: 4px;
        }
    </style>
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
                <li><a href="{{ route('reports.index') }}">Заявления</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <h1>Наши товары</h1>
        <div class="products-grid">
            @foreach($array as $product)
                <div class="product-card">
                    <img src="{{ Vite::asset('resources/images/' . $product['path']) }}" alt="{{ $product['title'] }}">
                    <h3>{{ $product['title'] }}</h3>
                    <p>Цена: {{ $product['price'] }} руб.</p>
                </div>
            @endforeach
        </div>
    </main>
    <footer>
        <p>&copy; {{ date('Y') }} Аминев Александр Анатльевич П-44.</p>
    </footer>

</body>
</html>