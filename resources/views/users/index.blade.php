@include('layouts.header')

<h1>Сотрудники</h1>
<hr/>

<p>
    <a href="{{ route('users.add') }}">Добавить</a>
</p>

<div class="panel panel-primary">
    <div class="panel-heading">
        <h3 class="panel-title">Фильтр</h3>
    </div>
    <form id="form_index" method="GET" action="{{ route('users.index') }}">
        <table class="table">
            <thead>
                <tr>
                    <th><input id="txt_name" type="text" name="name" class="form-control" placeholder="ФИО" value="{{ request('name') }}" /></th>
                    <th><input id="txt_email" type="text" name="email" class="form-control" placeholder="Email" value="{{ request('email') }}" /></th>
                    <th>
                        <select id="select_blocked" name="is_blocked" class="form-control">
                            <option value="" selected>Все</option>
                            <option value="1" {{ request('is_blocked') === '1' ? 'selected' : ''  }} >Да</option>
                            <option value="0" {{ request('is_blocked', null) === '0' ? 'selected' : '' }} >Нет</option>                            
                        </select>
                    </th>
                    <th>
                        <select id="select_position" name="position_id" class="form-control">
                            <option value="" selected>Все должности</option>
                            @foreach(\App\Models\Position::all() as $position)
                                <option value="{{ $position->id }}" {{ request()->get('position_id', -1) == $position->id ? 'selected' : '' }}>{{ $position->name }}</option>
                            @endforeach
                        </select>
                    </th>
                    <th>
                        <select id="select_role" name="role" class="form-control">
                            <option value="" selected>Все</option>
                            @foreach(\App\Enums\RolesEnum::getAll() as $role)
                                <option value="{{ $role }}" {{ request()->get('role') == $role ? 'selected' : '' }}>{{ trans('user.roles.' . $role) }}</option>
                            @endforeach
                        </select>
                    </th>
                    <th>
                        <input type="submit" value="ОК" class="btn btn-default" />
                        <input type="button" id="btn_reset" value="Отмена" class="btn btn-default" />
                        <script type="text/javascript">
                            $('#btn_reset').click(function(){
                                $("#txt_name").val('');
                                $("#txt_email").val('');
                                $('#select_blocked').prop('selectedIndex', 0);
                                $('#select_position').prop('selectedIndex', 0);
                                $('#select_role').prop('selectedIndex', 0);
                                $("#orderDir").val("asc");
                                $("#form_index").submit();
                            });
                        </script>
                    </th>
                    <input type="hidden" name="orderBy" value="name"/>
                    <input id="orderDir" type="hidden" name="orderDir" value="{{ request('orderDir') }}"/>                                                          
                </tr>
                <tr>
                    <th class="sortable" data-field="name">ФИО
                        @if(request('orderBy') == 'name')
                            @if(request('orderDir') == 'asc')
                                <span class="glyphicon glyphicon-triangle-bottom"></span>
                            @else
                                <span class="glyphicon glyphicon-triangle-top"></span>
                            @endif
                        @endif
                    </th>
                    <th class="sortable" data-field="email">Email
                        @if(request('orderBy') == 'email')
                            @if(request('orderDir') == 'asc')
                                <span class="glyphicon glyphicon-triangle-bottom"></span>
                            @else
                                <span class="glyphicon glyphicon-triangle-top"></span>
                            @endif
                        @endif
                    </th>
                    <th>Блокировка</th>
                    <th>Должность</th>
                    <th>Роль</th>
                    <th>Действия</th>
                    <script type="text/javascript">
                        $(".sortable").click(function() {
                            if ($("#orderDir").val() == "asc") {
                                $("#orderDir").val("desc");
                            }
                            else {
                                $("#orderDir").val("asc");
                            }
                            
                            $("#form_index [name=orderBy]").val($(this).attr('data-field'));
                            $("#form_index").submit();
                        });
                    </script>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $key => $value)
                    <tr>
                        <td>{{ $value->name }}</td>
                        <td>{{ $value->email }}</td>            
                        <td>{{ $value->is_blocked ? 'Да' : 'Нет' }}</td>
                        <td>{{ $value->position->name }}</td>
                        <td>{{ trans('user.roles.' . $value->role) }}</td>
                        <td>
                            <a href="{{ route('users.edit', $value->id) }}">Изменить</a> | 
                            <a href="{{ route('users.show', $value->id) }}">Детали</a> | 
                            <a href="{{ route('users.delete', $value->id) }}">Удалить</a>
                        </td>
                    </tr> 
                @endforeach
            </tbody>
        </table>
    </form>
</div>

{{ $users->links() }}

@include('layouts.footer')