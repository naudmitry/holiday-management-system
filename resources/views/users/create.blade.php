@include('layouts.header')

<h2>Добавление</h2>

<h4>Сотрудник</h4>
<hr />

<form method="GET" action="{{ route('users.create') }}" class="form-horizontal">
    <div class="form-group">
        <label class="col-md-2 control-label">Email</label>
        <div class="col-md-10">
            <input type="text" name="email" class="form-control" />
        </div>
    </div>

    <div class="form-group">
        <label class="col-md-2 control-label">ФИО</label>
        <div class="col-md-10">
            <input type="text" name="name" class="form-control" />
        </div>
    </div>

    <div class="form-group">
        <label class="col-md-2 control-label">Кому</label>
        <div class="col-md-10">
            <input type="text" name="name_r" class="form-control" />
        </div>
    </div>

    <div class="form-group">
        <label class="col-md-2 control-label">Должность</label>
        <div class="col-md-10">
            <select class="form-control" name="position_id">
                @foreach(\App\Models\Position::all() as $position)
                    <option value="{{ $position->id }}">{{ $position->name }}</option>
                @endforeach
            </select>
        </div>
    </div>

    <div class="form-group">
        <label class="col-md-2 control-label">Адрес</label>
        <div class="col-md-10">
            <input type="text" name="address" class="form-control" />
        </div>
    </div>

    <div class="form-group">
        <label class="col-md-2 control-label">Заблокирован</label>
        <div class="col-md-10">
            <input type="checkbox" name="is_blocked" />
        </div>
    </div>

    <div class="form-group">
        <label class="col-md-2 control-label">Роль</label>
        <div class="col-md-10">
            <select name="role" class="form-control">
                @foreach(\App\Enums\RolesEnum::getAll() as $role)
                    <option value="{{ $role }}">
                        {{ trans('user.roles.' . $role) }}
                    </option>
                @endforeach
            </select>
        </div>
    </div>

    <div class="form-group">
        <label class="col-md-2 control-label">Пароль</label>
        <div class="col-md-10">
            <input type="password" name="password" class="form-control" />
        </div>
    </div>

    <div class="form-group">
        <div class="col-md-offset-2 col-md-10">
            <input type="submit" value="Сохранить" class="btn btn-default" />
        </div>
    </div>

    <div>
        <a href="{{ route('users.index') }}">Вернуться</a>
    </div>
</form>

@include('layouts.footer')