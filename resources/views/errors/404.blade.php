@include('layouts.header')

    <h2>Ошибка 404</h2>

    <p>Страница не найдена. Это произошло из-за неправильно указанной ссылки.</p>
    <p>Хотите перейти <a href="{{ route('home.view') }}">на главную</a>?</p>

@include('layouts.footer')