@include('layouts.header')

<div class="jumbotron">
    <h1>Holiday Management System</h1>
    <p class="lead">Система предназначена для упрощения учёта отпусков сотрудников.</p>
    @if (Auth::check())
        <p><a class="btn btn-lg btn-success" href="{{ route('logout.action') }}" role="button">Выйти</a></p>
    @else
        <p><a class="btn btn-lg btn-success" href="{{ route('login.view') }}" role="button">Войти</a></p>
    @endif
</div>

@include('layouts.footer')