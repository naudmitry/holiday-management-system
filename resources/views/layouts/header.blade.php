<!DOCTYPE html>
<html>
  <head>
    <title>HMS</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/bootstrap-theme.min.css">
    <script src="./js/jquery.js"></script>
    <script src="./js/bootstrap.js"></script>
  </head>
  <body>  
    <div class="container">
      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
            <a class="navbar-brand" href="./">Holiday Management System</a>  
          </div>
          <!--<ul class="nav navbar-nav">
            <li><a href="#">About</a></li>
            <li><a href="#">Contact</a></li>
          </ul>-->
          <ul class="nav navbar-nav navbar-right">
            @if (Auth::check())
              <li><a href="{{ route('logout.action') }}">Выйти</a></li>  
            @else
              <li><a href="login">Войти</a></li>
            @endif
          </ul>
        </div>
      </nav>
    </div>
    <div class="container">