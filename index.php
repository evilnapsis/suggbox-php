<?php
include "admin/app/autoload.php";
include "admin/app/models/TeamData.php";
include "admin/app/models/PersonData.php";
?>

<!doctype html>
<html lang="en" ng-app="Dashboard">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>.: SUGGBOX :.</title>

  <link rel="stylesheet" type="text/css" href="admin/res/bootstrap3/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="admin/res/font-awesome/css/font-awesome.min.css">

  <script type="text/javascript" src="admin/res/jquery.min.js"></script>

</head>
<body >
<nav class="navbar navbar-default" role="navigation">
<div class="container">
  <!-- Brand and toggle get grouped for better mobile display -->
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="./"><b>SUGGBOX</b></a>
  </div>

  <!-- Collect the nav links, forms, and other content for toggling -->
  <div class="collapse navbar-collapse navbar-ex1-collapse">
    <ul class="nav navbar-nav">
      <li><a href="./">INICIO</a></li>
    </ul>
 </div><!-- /.navbar-collapse -->
 </div>
</nav>

<div class="container">
<div class="row">
<div class="col-md-9"></div>
<div class="col-md-3">




  <!-- Button trigger modal -->
  <a data-toggle="modal" href="#myModal" class="btn btn-warning ">Enviar queja o sugerencia</a>

  <!-- Modal -->
  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Enviar Queja o Sugerencia</h4>
        </div>
        <div class="modal-body">
<form class="form-horizontal" role="form" method="post" action="./process.php">
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-3 control-label">Nombre</label>
    <div class="col-lg-4">
      <input type="text" name="fullname" class="form-control" id="inputEmail1" placeholder="Nombre">
    </div>
    <label for="inputEmail1" class="col-lg-2 control-label">Tel.</label>
    <div class="col-lg-3">
      <input type="phone" name="phone" class="form-control" id="inputEmail1" placeholder="Telefono">
    </div>
  </div>

  <div class="form-group">
    <label for="inputPassword1" class="col-lg-3 control-label">Domicilio</label>
    <div class="col-lg-9">
      <input type="text" name="address" class="form-control" id="inputPassword1" placeholder="Domicilio">
    </div>
  </div>



  <div class="form-group">
    <div class="col-lg-3 col-md-offset-3">
		<div class="radio">
		  <label>
		    <input type="radio" name="kind" value="1" required>
		    Queja
		  </label>
		</div>
    </div>
    <div class="col-lg-3">
		<div class="radio">
		  <label>
		    <input type="radio" name="kind" value="2" required>
		    Sugerencia
		  </label>
		</div>
    </div>
    <div class="col-lg-3">
		<div class="radio">
		  <label>
		    <input type="radio" name="kind" value="3" required>
		    Agradecimiento
		  </label>
		</div>
    </div>
  </div>

  <?php $teams = TeamData::getAll();?>
  <div class="form-group">
    <label for="inputPassword1" class="col-lg-3 control-label">Departamento</label>
    <div class="col-lg-9">
<select name="team_id" class="form-control" required="required">
      <option value="">-- SELECCIONE DEPARTAMENTO --</option>
      <?php foreach($teams as $team):?>
        <option value="<?php echo $team->id;?>"><?php echo $team->name;?></option>
      <?php endforeach;?>
    </select>
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword1" class="col-lg-3 control-label">Mensaje</label>
    <div class="col-lg-9">
    <textarea name="msg" class="form-control" rows="3" placeholder="Mensaje" required></textarea>
    </div>
  </div>

  <div class="form-group">
    <div class="col-lg-offset-3 col-lg-9">
      <button type="submit" class="btn btn-default">Enviar mensaje</button>
    </div>
  </div>
</form>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->






</div>
</div>
</div>

  <script src="admin/res/bootstrap3/js/bootstrap.min.js"></script>
</body>
</html>