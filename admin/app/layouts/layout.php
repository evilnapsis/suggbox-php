<!doctype html>
<html lang="en" ng-app="Dashboard">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>.: SUGGBOX :.</title>

  <link rel="stylesheet" type="text/css" href="res/bootstrap3/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="res/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="res/dashboard/dashboard.css">
  <link rel="stylesheet" type="text/css" href="res/themes/black.css">
  <!--
  <link rel="stylesheet" type="text/css" href="css/themes/green.css">
  <link rel="stylesheet" type="text/css" href="css/themes/red.css">
  -->

  <script type="text/javascript" src="res/jquery.min.js"></script>

<script src="res/morris/raphael-min.js"></script>
<script src="res/morris/morris.js"></script>  
<link rel="stylesheet" href="res/morris/morris.css">
  <link rel="stylesheet" href="res/morris/example.css">


  <script type="text/javascript" src="res/jquery.min.js"></script>
  <script type="text/javascript" src="res/angular-cookies.js"></script>
  <script type="text/javascript" src="res/ng-bootstrap-tpls.min.js"></script>
  <script type="text/javascript" src="res/angular/bootstrap.js"></script>

</head>
<body ng-controller="MasterCtrl">
<?php 
if(isset($_SESSION["admin_id"])):?>
  <div id="page-wrapper" ng-class="{'active': toggle}" ng-cloak>

    <!-- Sidebar -->
    <div id="sidebar-wrapper">

      <ul class="sidebar">
        <li class="sidebar-main">
          <a href="#" ng-click="toggleSidebar()">
            SUGGBOX
            <span class="menu-icon fa fa-align-justify"></span>
          </a>
        </li>
        <li class="sidebar-list">
          <a href="./">Inicio <span class="menu-icon fa fa-home"></span></a>
        </li>
        <li class="sidebar-list">
          <a href="./?r=index/msgs">Mensajes <span class="menu-icon fa fa-envelope-o"></span></a>
        </li>
<!--        <li class="sidebar-list">
          <a href="./?r=team/index">Grupos <span class="menu-icon fa fa-th-large"></span></a>
        </li> -->
        <li class="sidebar-title separator"><span>Administracion</span></li>
        <li class="sidebar-list">
          <a href="./index.php?r=index/units">Departamentos <span class="menu-icon fa fa-th-list"></span></a>
        </li>
        <li class="sidebar-list">
          <a href="./index.php?r=auth/logout">Salir <span class="menu-icon fa fa-remove"></span></a>
        </li>
      </ul>
<!--
      <div class="sidebar-footer">
        <div class="col-xs-4">
          <a href="https://github.com/Ehesp/Responsive-Dashboard" target="_blank">
            Github
          </a>
        </div>
        <div class="col-xs-4">
          <a href="#" target="_blank">
            About
          </a>
        </div>
        <div class="col-xs-4">
          <a href="#">
            Support
          </a>
        </div>
      </div>
      -->
    </div>

    <!-- End Sidebar -->

    <div id="content-wrapper">


<?php 
  require_once(View::$content);
?>


    </div><!-- End Content Wrapper -->
  </div><!-- End Page Wrapper -->
<?php else:?>
<br><br><br><br><br><br>
<div class="container">
<div class="row">
<div class="col-md-4 col-md-offset-4">
<div class="panel panel-default">
<div class="panel-heading">
Ingresar
</div>
<div class="panel-body">

<form role="form" method="post" action="./?r=auth/login">
  <div class="form-group">
    <label for="exampleInputEmail1">Nombre de usuario</label>
    <input type="text" name="email"  class="form-control" placeholder="Usuario">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="password" class="form-control" placeholder="Password">
  </div>
  <button type="submit" class="btn btn-default">Iniciar sesi&oacute;n</button>
</form>
</div>
</div>
</div>
</div>
</div>

<?php endif; ?>
  <script src="res/bootstrap3/js/bootstrap.min.js"></script>
</body>
</html>