@include('layouts.header')

<h2>Добавление</h2>

<h4>Сотрудник</h4>
<hr />

<form method="post" action="" class="form-horizontal">
    <div class="form-group">
        <label class="col-md-2 control-label">Email</label>
        <div class="col-md-10">
            <input type="text" name="email" class="form-control" />
        </div>
    </div>

    <div class="form-group">
        <label class="col-md-2 control-label">ФИО</label>
        <div class="col-md-10">
            <input type="text" name="email" class="form-control" />
        </div>
    </div>

    <div class="form-group">
        <label class="col-md-2 control-label">Кому</label>
        <div class="col-md-10">
            <input type="text" name="email" class="form-control" />
        </div>
    </div>

    <div class="form-group">
        <label class="col-md-2 control-label">Должность</label>
        <div class="col-md-10">
            <input type="text" name="email" class="form-control" />
        </div>
    </div>

    <div class="form-group">
        <label class="col-md-2 control-label">Адрес</label>
        <div class="col-md-10">
            <input type="text" name="email" class="form-control" />
        </div>
    </div>

    <div class="form-group">
        <label class="col-md-2 control-label">Заблокирован</label>
        <div class="col-md-10">
            <input type="text" name="email" class="form-control" />
        </div>
    </div>

    <div class="form-group">
        <div class="col-md-offset-2 col-md-10">
            <input type="submit" value="Сохранить" class="btn btn-default" />
        </div>
    </div>
</form>

@include('layouts.footer')