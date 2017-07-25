@include('layouts.header')

<h2>Детали</h2>

<h4>Должность</h4>
<hr />

<dl class="dl-horizontal">
    <dt>Наименование</dt>
    <dd>{{ $position->name }}</dd>

    <dt>Наименование (Р.п.)</dt>
    <dd>{{ $position->name_r }}</dd>
</dl>

<p>
    <a href="{{ route('positions.edit', $position->id) }}">Изменить</a> |
    <a href="{{ route('positions.index') }}">Вернуться</a>
</p>

@include('layouts.footer')