<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Sua Faculdade - Login</title>
  <link rel="stylesheet" href="<?php echo asset('css/bootstrap.css')?>" type="text/css">
  <link rel="shortcut icon" href="<?php echo url('/img/logo_aba.png') ?>" type="image/x-icon">
  <style type="text/css">
  body{
    background-color: #006ea5;
  }
  .panel {
    margin-bottom: 20px;
    border: 50px solid transparent;
   }
   .btn-primary{
     background-color: #006ea5;
   }
   .form-control {
    background-color: #e8e8e8;
    border: 0px solid transparent;
}
  </style>
</head>
<body>
  <center>
  </br>
  </br>
    <div class="col-md-6 col-md-offset-3">
      <img src="<?php echo url('/img/logo.png') ?> " width="70%"/>
    </div>
    <div class="row" >
      <div class="col-md-6 col-md-offset-3">
      </br>
      </br>
        <form class="panel">
          <div class="form-group">
            <input type="text" class="form-control" id="matriculaUser" placeholder="Matricula">
          </div>
          <div class="form-group">
            <input type="password" class="form-control" id="passwordUser" placeholder="Senha">
          </div>
          <button type="submit" class="btn btn-primary btn-lg btn-block">Entrar</button>
        </form>
      </div>
    </div>
  </center>
</body>
</html>
