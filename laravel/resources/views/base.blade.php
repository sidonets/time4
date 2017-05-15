<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>@yield('titulo')</title>
  <link rel="stylesheet" href="<?php echo asset('css/bootstrap.css')?>" type="text/css">
  <link rel="shortcut icon" href="<?php echo url('/img/logo_aba.png') ?>" type="image/x-icon">
  <style media="screen">
  a{
    color: white;
  }
  .panel{
    background-color: #006ea5;
  }
  #topo{
    border: 20px solid transparent;
  }
  </style>
</head>
<body>
  <center>
    <form class="panel" id="topo">
      <img src="<?php echo url('/img/logo.png') ?>" alt="" width="30%">
    </form>
  </center>
  <form class="panel">
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
      <ul class="nav navbar-nav">
        <li>
          <a href="#">About</a>
        </li>
        <li>
          <a href="#">Services</a>
        </li>
        <li>
          <a href="#">Contact</a>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li>
          <a href="#"><span class="glyphicon glyphicon-off" aria-hidden="true"></span></a>
        </li>
      </ul>
    </div>
  </form>
  <div>
    @yield('conteudo')
  </div>
</body>
</html>
