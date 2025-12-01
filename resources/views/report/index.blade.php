<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Список заявлений</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        .reports-list {
            max-width: 750px;
            margin: 0 auto;
            padding: 20px;
        }
        .report-item {
            border: 1px solid #ddd;
            padding: 15px;
            margin-bottom: 10px;
            border-radius: 5px;
        }
        .create-link {
            display: inline-block;
            margin-bottom: 20px;
            padding: 10px 15px;
            background: #007bff;
            color: white;
            text-decoration: none;
            border-radius: 5px;
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

    <main class="reports-list">
        <h1>Список заявлений</h1>
        <div>
            <span>Сортировка по дате создания: </span>
            <a href="{{route('reports.index', ['sort' => 'desc'])}}">сначала новые</a>
            <a href="{{route('reports.index', ['sort' => 'asc'])}}">сначала старые</a>
        </div>
        <br>
        <a href="{{ route('reports.create') }}" class="create-link">Создать заявление</a>

        @foreach($reports as $report)
            <div class="report-item">
                <h3>Номер автомобиля: {{ $report->number }}</h3>
                <p><strong>Описание:</strong> {{ $report->description }}</p>
                <p><strong>Дата создания:</strong> {{ $report->created_at->format('d.m.Y H:i') }}</p>
                <p><strong>Статус:</strong> {{$report->status->name}}</p>
            
                  <div class="report-actions">
            <a href="{{ route('reports.edit', $report->id) }}" 
               style="margin-right: 10px; color: #007bff; text-decoration: none;">
                Редактировать
            </a>
    </div>
<br>
                <form method="POST" action="{{ route('reports.destroy', $report->id) }}" style="display: inline;">
        @csrf
        @method('DELETE')
        <button type="submit" >Удалить</button>
    </form>

            </div>
        @endforeach
{{$reports->links()}}
        @if($reports->count() == 0)
            <p>Заявлений пока нет.</p>
        @endif
    </main>

    <footer>
        <p>&copy; {{ date('Y') }} Аминев Александр Анатльевич П-44.</p>
    </footer>
</body>
</html>