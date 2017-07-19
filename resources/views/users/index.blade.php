@include('layouts.header')

<h1>Сотрудники</h1>

<p>
    <a href="{{ route('users.add') }}">Добавить</a>
</p>

@if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

<table class="table">
    <tr>
        <th>ФИО</th>
        <th>Email</th>
        <th>Блокировка</th>
        <th>Должность</th>
        <th></th>
    </tr>
    
    @foreach($users as $key => $value)
        <tr>
            <td>{{ $value->name }}</td>
            <td>{{ $value->email }}</td>            
            <td>{{$value->is_blocked ? 'Да' : 'Нет'}}</td>
            <td>{{ $value->position->name }}</td>
            
            <td>
                <a href="{{ route('users.edit', $value->id) }}">Изменить</a> | 
                <a href="{{ route('users.show', $value->id) }}">Детали</a> | 
                <a href="{{ route('users.delete', $value->id) }}">Удалить</a>
            </td>
        </tr> 
    @endforeach
</table>

{{ $users->links() }}

@include('layouts.footer')