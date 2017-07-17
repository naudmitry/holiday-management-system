@include('layouts.header')

<div class="col-md-8">

  @if (isset($errors) && is_array($errors))
      <div class="alert alert-danger">
          <ul>
              @foreach ($errors as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div>
  @endif

  <form action=" {{ route('login.action') }}" method="post" class="form-horizontal">
    <h4>Используйте локальную учетную запись для входа.</h4>
    <hr>
    <div class="form-group">
      <label class="col-md-2 control-label">Email</label>
      <div class="col-md-10">
        <input type="text" name="email" class="form-control" />
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
        <input type="submit" value="Войти" class="btn btn-default" />
      </div>
    </div>
  </form>
</div>

@include('layouts.footer')