@include('layouts.header')
<form action="" method="post">
    <h4>Персональные данные пользователя.</h4>
    <hr>
    <div class="panel panel-default">
        <div class="panel-heading">Личные данные</div>
        <div class="panel-body">
            <div class="form-group row">
                <label class="col-md-2 control-label">Имя</label>
                <div class="col-md-10">
                    <input class="form-control" type="text">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-2 control-label">Имя в родительном падеже</label>
                <div class="col-md-10">
                    <input class="form-control" type="text">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-2 control-label">Адрес</label>
                <div class="col-md-10">
                    <input class="form-control" type="text">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-2 control-label">Должность</label>
                <div class="col-md-10">
                    <input class="form-control" type="text">
                </div>
            </div>
        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading">Данные для входа</div>
        <div class="panel-body">
            <div class="form-group row">
                <label class="col-md-2 control-label">Email</label>
                <div class="col-md-10">
                    <input class="form-control" type="text">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-2 control-label">Пароль</label>
                <div class="col-md-10">
                    <input class="form-control" type="text">
                </div>
            </div> 
        </div>
    </div>
    
    <div class="form-group row">
      <div class="col-md-offset-2 col-md-10">
        <input type="submit" value="Сохранить" class="btn btn-default" />
      </div>
    </div>
</form>

@include('layouts.footer')