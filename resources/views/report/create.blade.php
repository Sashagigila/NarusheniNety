<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Создание заявления</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        .create-form {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        input, textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 16px;
        }
        button {
            padding: 12px 25px;
            background: #28a745;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }
        .error {
            color: #dc3545;
            font-size: 14px;
            margin-top: 5px;
        }
        .back-link {
            display: inline-block;
            margin-top: 15px;
            color: #007bff;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <header>
        <div class="logo">
            <img src="{{ Vite::asset('resources/images/logo.png') }}" alt="Логотип" width="100">
        </div>
        <nav>
            <ul>
                <li><a href="{{ route('home') }}">Главная</a></li>
                <li><a href="{{ route('array') }}">Массивы</a></li>
                <li><a href="{{ route('reports.index') }}">Заявления</a></li>
            </ul>
        </nav>
    </header>

    <main class="create-form">
        <h1>Создание заявления</h1>
        <form method="POST" action="{{ route('reports.store') }}">
            @csrf
            
            <div class="form-group">
                <label for="number">Номер автомобиля:</label>
                <input type="text" id="number" name="number" value="{{ old('number') }}" required>
                @error('number')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>
            
            <div class="form-group">
                <label for="description">Описание нарушения:</label>
                <textarea id="description" name="description" rows="5" required>{{ old('description') }}</textarea>
                @error('description')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>
            
            <button type="submit">Создать заявление</button>
        </form>
        
        <a href="{{ route('reports.index') }}" class="back-link">← Назад к списку</a>
    </main>

    <footer>
        <p>&copy; {{ date('Y') }} Аминев Александр Анатльевич П-44.</p>
    </footer>
</body>
</html>