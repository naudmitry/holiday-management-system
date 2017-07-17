@include('layouts.header')

<h1>Сотрудники</h1>

<p>
    <a href='#'>Добавить</a>
</p>

@if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
@endif 

<table class="table">
    <tr>
        <th>ФИО</th>
        <th>Email</th>
        <th>Блокировка</th>
        <th></th>
    </tr>
    @foreach($users as $key => $value)
        <tr>
            <td>{{ $value->name }}</td>
            <td>{{ $value->email }}</td>
            
            @if ($value->is_blocked)
                <td>Да</td>
            @else
                <td>Нет</td>
            @endif
            
            <td>
                <a href="{{ URL::to('users/'.$value->id.'/edit') }}">Изменить</a> | 
                <a href="{{ URL::to('users/'.$value->id) }}">Детали</a> | 
                <a href="{{ URL::to('users/'.$value->id.'/delete') }}">Удалить</a>
            </td>
        </tr> 
    @endforeach
</table>

{{ $users->links() }}

@include('layouts.footer')