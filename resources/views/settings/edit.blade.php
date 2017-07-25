@include('layouts.header')

<h2>Редактирование</h2>

<h4>Параметр системы</h4>
<hr />

<form action="{{ route('settings.update', $setting->id) }}" method="POST" class="form-horizontal">
    {{ method_field('PUT') }}

    <div class="form-group">
        <label class="col-md-2 control-label">Наименование</label>
        <div class="col-md-10">
            <input type="text" name="name" class="form-control" value="{{ $setting->name }}" />
        </div>
    </div>

    <div class="form-group">
        <label class="col-md-2 control-label">Значение</label>
        <div class="col-md-10">
            <input type="text" name="value" class="form-control" value="{{ $setting->value }}" />
        </div>
    </div>

    <div class="form-group">
        <div class="col-md-offset-2 col-md-10">
            <input type="submit" value="Сохранить" class="btn btn-default" />
        </div>
    </div>
</form>

<div>
    <a href="{{ route('settings.index') }}">Вернуться</a>
</div>

@include('layouts.footer')