@include('layouts.header')

<h2>Удалить</h2>

<h3>Вы действительно хотите удалить данную запись?</h3>
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

    <form>
        <div class="form-actions no-color" method="delete">
            <input type="submit" value="Удалить" class="btn btn-default" /> |
            <a href="{{ URL::to('users') }}">Вернуться</a>
        </div>
    </form>
</div>

@include('layouts.footer')