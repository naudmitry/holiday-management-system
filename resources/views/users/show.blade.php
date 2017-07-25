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
        <dd>{{ $user->position->name }}</dd>

        <dt>Адрес</dt>
        <dd>{{ $user->address }}</dd>

        <dt>Заблокирован</dt>
        <dd>{{ $user->is_blocked ? 'Да' : 'Нет' }}</dd>

        <dt>Роль</dt>
        <dd>{{ trans('user.roles.' . $user->role) }}</dd>
    </dl>
</div>

<p>
    <a href="{{ route('users.edit', $user->id) }}">Изменить</a> |
    <a href="{{ route('users.index') }}">Вернуться</a>
</p>

@include('layouts.footer')