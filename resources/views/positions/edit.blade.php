@include('layouts.header')

<h2>Редактирование</h2>

<h4>Параметр системы</h4>
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

<form action="{{ route('positions.update', $position->id) }}" method="POST" class="form-horizontal">
    {{ method_field('PUT') }}

    <div class="form-group">
        <label class="col-md-2 control-label">Наименование</label>
        <div class="col-md-10">
            <input type="text" name="name" class="form-control" value="{{ $position->name }}" />
        </div>
    </div>

    <div class="form-group">
        <label class="col-md-2 control-label">Наименование (Р.п.)</label>
        <div class="col-md-10">
            <input type="text" name="name_r" class="form-control" value="{{ $position->name_r }}" />
        </div>
    </div>

    <div class="form-group">
        <div class="col-md-offset-2 col-md-10">
            <input type="submit" value="Сохранить" class="btn btn-default" />
        </div>
    </div>
</form>

<div>
    <a href="{{ route('positions.index') }}">Вернуться</a>
</div>

@include('layouts.footer')