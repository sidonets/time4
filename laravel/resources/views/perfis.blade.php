<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Sua Faculdade - Perfil</title>
  <link rel="stylesheet" href="<?php echo asset('css/bootstrap.css')?>" type="text/css">
  <link rel="shortcut icon" href="<?php echo url('/img/logo_aba.png') ?>" type="image/x-icon">
</head>
<body>
  <center>
    <h1>Escolha o perfil desejado:</h1>
    <div class="row">
      <div class="col-md-4">
        <img src="<?php echo url('/img/perfil/professor.jpg') ?>" class="img-circle" width="200px" height="200px">
        <h1>Professor</h1>
      </div>
      <div class="col-md-4">
        <img src="<?php echo url('/img/perfil/coordenador.jpg') ?>" class="img-circle" width="200px" height="200px">
        <h1>Coordenador</h1>
      </div>
      <div class="col-md-4">
        <img src="<?php echo url('/img/perfil/nde.jpg') ?>" class="img-circle" width="200px" height="200px">
        <h1>NDE</h1>
      </div>
    </div>
  </center>
</body>
</html>
