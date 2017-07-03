<!DOCTYPE html>
<html>
<head>
    <title>Сотрудники</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">

<nav class="navbar navbar-inverse">
    <div class="navbar-header">
        <a class="navbar-brand" href="{{ URL::to('staff') }}">Сотрудники</a>
    </div>
    <ul class="nav navbar-nav">
        <li><a href="{{ URL::to('staff') }}">Посмотреть</a></li>
        <li><a href="{{ URL::to('staff/create') }}">Добавить</a>
    </ul>
</nav>

<h1>Сотрудники</h1>

@if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <td>ФИО</td>
            <td>Должность</td>
            <td>Оклад</td>
            <td>Действия</td
        </tr>
    </thead>
    <tbody>
    @foreach($staff as $key => $value)
        <tr>
            <td>{{ $value->full_name }}</td>
            <td>{{ $value->position_id }}</td>
            <td>{{ $value->salary }}</td>
            <td>
                <a class="btn btn-small btn-success" href="{{ URL::to('staff/' . $value->staff_id) }}">Посмотреть</a>
                <a class="btn btn-small btn-info" href="{{ URL::to('staff/' . $value->staff_id . '/edit') }}">Изменить</a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>

</div>
</body>
</html>