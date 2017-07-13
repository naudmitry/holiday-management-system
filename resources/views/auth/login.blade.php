@include('layouts.header')

<div class="col-md-8">
  <form action=" {{action('UsersController@auth')}}" method="post">
    <h4>Используйте локальную учетную запись для входа.</h4>
    <hr>
    <div class="form-group row">
      <label class="col-md-2 control-label">Email</label>
      <div class="col-md-10">
        <input type="text" name="email" class="form-control" />
      </div>
    </div>
    <div class="form-group row">
      <label class="col-md-2 control-label">Пароль</label>
      <div class="col-md-10">
        <input type="password" name="password" class="form-control" />
      </div>
    </div>
    <div class="form-group row">
      <div class="col-md-offset-2 col-md-10">
        <a type="submit" class="btn btn-default">Войти</a>
      </div>
    </div>
  </form>
</div>

@include('layouts.footer')