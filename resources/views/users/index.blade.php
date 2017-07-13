@include('layouts.header')

<div class="container">

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
            <th></th>
        </tr>
        @foreach($users as $key => $value)
            <tr>
                <td>{{ $value->name }}</td>
                <td>{{ $value->email }}</td>
                <td>
                    <a href="#">Изменить</a> | 
                    <a href="#">Детали</a> | 
                    <a href="#">Удалить</a>
                </td>
            </tr> 
        @endforeach
    </table>
</div>

@include('layouts.footer')