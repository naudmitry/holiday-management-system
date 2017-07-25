@include('layouts.header')

<h1>Должности</h1>
<hr/>

<p>
    <a href="#">Добавить</a>
</p>

<form action="#" method="GET">
    <table class="table">
        <thead>
            <tr>
                <th>Наименование</th>
                <th>Наименование (Р.п.)</th>
                <th>Действия</th>
            </tr>
        </thead>
        <tbody>
            @foreach($positions as $key => $value)
                <tr>
                    <td>{{ $value->name }}</td>
                    <td>{{ $value->name_r }}</td>
                    <td>
                        <a href="{{ route('positions.edit', $value->id) }}">Изменить</a> | 
                        <a href="{{ route('positions.show', $value->id) }}">Детали</a> | 
                        <a href="#">Удалить</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</form>

{{ $positions->links() }}

@include('layouts.footer')