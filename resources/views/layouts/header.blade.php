<!DOCTYPE html>
<html>
    <head>
        <title>HMS</title>
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
        <script src="{{ asset('js/jquery.js') }}"></script>
        <script src="{{ asset('js/bootstrap.js') }}"></script>
    </head>

    <body>  
        <div class="container">
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <a class="navbar-brand" href="{{ route('home.view') }}">Holiday Management System</a>  
                    </div>
                    <ul class="nav navbar-nav">
                        @if(Auth::check())
                            <li role="presentation" class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                                    Администрирование <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu">
                                    @if (Auth::user()->hasRole(App\Enums\RolesEnum::HEAD))
                                        <li><a href="{{ route('users.index') }}">Сотрудники</a></li>
                                        <li><a href="#">Параметры системы</a></li>
                                    @endif
                                </ul>
                            </li>
                            <li><a href="#">Мониторинг</a></li>
                        @endif
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        @if (Auth::check())
                            <li><a href="{{ route('logout.action') }}">Выйти</a></li>  
                        @else
                            <li><a href="{{ route('login.view') }}">Войти</a></li>
                        @endif
                    </ul>
                </div>
            </nav>
        </div>
        <div class="container">