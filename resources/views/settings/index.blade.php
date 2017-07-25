@include('layouts.header')

<h1>Параметры системы</h1>
<hr/>

<table  class="table">
    <thead>
        <tr>
            <th>Ключ</th>
            <th>Наименование</th>
            <th>Значение</th>
            <th>Действия</th>
        </tr>
    </thead>
    <tbody>
        @foreach($settings as $key => $value)
            <tr>
                <td>{{ $value->key }}</td>
                <td>{{ $value->name }}</td>
                <td>{{ $value->value }}</td>
                <td>
                    <a href="{{ route('settings.edit', $value->id) }}">Изменить</a>
                </td>                                               
            </tr>
        @endforeach
    </tbody>
</table>

@include('layouts.footer')