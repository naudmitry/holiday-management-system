@include('layouts.header')

<h1>Сотрудники</h1>

<p>
    <a href="{{ route('users.add') }}">Добавить</a>
</p>

<div class="panel panel-primary">
    <div class="panel-heading">
        <h3 class="panel-title">Фильтр</h3>
    </div>
    <table class="table">
        <thead>
            <tr>
                <form method="GET" action="{{ route('users.index') }}">
                    <th><input type="text" name="name" class="form-control" placeholder="ФИО" value="{{ request()->get('name') }}" /></th>
                    <th><input type="text" name="email" class="form-control" placeholder="Email" value="{{ request()->get('email') }}" /></th>
                    <th>
                        <select name="is_blocked" class="form-control">
                            <option value="" selected>Все</option>
                            <option value="1" {{ request()->get('is_blocked') === 1 ? 'selected' : ''  }} >Да</option>
                            <option value="0" {{ request()->get('is_blocked') === 0 ? 'selected' : '' }} >Нет</option>                            
                        </select>
                    </th>
                    <th>
                        <select name="position_id" class="form-control">
                            <option value="" selected>Все должности</option>
                            @foreach(\App\Models\Position::all() as $position)
                                <option value="{{ $position->id }}" {{ request()->get('position_id', -1) == $position->id ? 'selected' : '' }}>{{ $position->name }}</option>
                            @endforeach
                        </select>
                    </th>
                    <th>
                        <input type="submit" value="ОК" class="btn btn-default" />
                        <input type="reset" value="Сбросить фильтр" class="btn btn-default" />
                    </th>
                </form>                                                                
            </tr>
        </thead>
        <tbody>
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
    </tbody>
</div>

{{ $users->links() }}

@include('layouts.footer')