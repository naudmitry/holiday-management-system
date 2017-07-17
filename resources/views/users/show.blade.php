@include('layouts.header')

<h2>Детали</h2>

<div>
    <h4>Сотрудник</h4>
    <hr />

    <dl class="dl-horizontal">
        <dt>Email</dt>
        <dd>{{ $user->email }}</dd>

        <dt>ФИО</dt>
        <dd>{{ $user->name }}</dd>

        <dt>Кому</dt>
        <dd>{{ $user->name_r }}</dd>

        <dt>Должность</dt>
        <dd>{{ $user->position_id }}</dd>

        <dt>Адрес</dt>
        <dd>{{ $user->address }}</dd>

        <dt>Заблокирован</dt>
        @if ($user->is_blocked)
            <dd>Да</dd>
        @else
            <dd>Нет</dd>
        @endif
    </dl>
</div>

<p>
    <a href="{{ URL::to('users/'.$user->id.'/edit') }}">Изменить</a> |
    <a href="{{ URL::to('users') }}">Вернуться</a>
</p>

@include('layouts.footer')