@include('layouts.header')

<h2>Редактирование</h2>

<div>
    <h4>Сотрудник</h4>
    <hr />

    @if(count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('users.update', $user->id) }}" class="form-horizontal" >
        {{ method_field('PUT') }}
        <div class="form-group">
            <label class="col-md-2 control-label">Email</label>
            <div class="col-md-10">
                <input type="text" name="email" class="form-control" value="{{ $user->email }}" />
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-2 control-label">ФИО</label>
            <div class="col-md-10">
                <input type="text" name="name" class="form-control" value="{{ $user->name }}" />
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-2 control-label">Кому</label>
            <div class="col-md-10">
                <input type="text" name="name_r" class="form-control" value="{{ $user->name_r }}" />
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-2 control-label">Должность</label>
            <div class="col-md-10">
                <select class="form-control" name="position_id">
                    @foreach(\App\Models\Position::all() as $position)
                        <option value="{{ $position->id }}" {{ $user->position_id == $position->id ? "selected" : "" }}>{{ $position->name }}</option>
                    @endforeach
                </select>  
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-2 control-label">Адрес</label>
            <div class="col-md-10">
                <input type="text" name="address" class="form-control" value="{{ $user->address }}" />
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-2 control-label">Роль</label>
            <div class="col-md-10">
                <select class="form-control" name="role">
                    @foreach(\App\Enums\RolesEnum::getAll() as $role)
                        <option value="{{ $role }}" {{ $user->role == $role ? "selected" : "" }}>
                            {{ trans('user.roles.' . $role) }}
                        </option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-2 control-label">Заблокирован</label>
            <div class="col-md-10">
                <input type="checkbox" name="is_blocked" {{ $user->is_blocked ? 'checked' : '' }} />
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-offset-2 col-md-10">
                <input type="submit" value="Сохранить" class="btn btn-default" />
            </div>
        </div>
    </form>

    <div>
        <a href="{{ route('users.index') }}">Вернуться</a>
    </div>
</div>

@include('layouts.footer')