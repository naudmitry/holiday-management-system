@include('layouts.header')

<h2>Редактирование</h2>

<div>
    <h4>Сотрудник</h4>
    <hr />

    <form method="put" action="{{ route('users.update', $user->id) }}" class="form-horizontal">
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
                <select class="form-control">
                    @foreach(\App\Models\User::positions() as $position)
                        <option value="{{ $position->name }}" {{ $user->position_id == $position->id ? "selected" : "" }}>{{ $position->name }}</option>
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