<?php
$teams = TeamData::getAll();
$categories = CategoryData::getAll();
?>

      <div class="page-content">

        <!-- Header Bar -->
<?php Action::load("header");?>
        <!-- End Header Bar -->


          <div class="row">
            <div class="col-lg-12">
            <h2>Nueva Persona</h2>
              <div class="widget">
                <div class="widget-title">
                  <i class="fa fa-male"></i> Persona
                </div>
                <div class="widget-body">
<form class="form-horizontal" role="form" method="post" action="./?r=person/add">
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Codigo</label>
    <div class="col-lg-10">
      <input type="text" name="no" class="form-control" id="inputEmail1" placeholder="Codigo">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Nombre</label>
    <div class="col-lg-5">
      <input type="text" name="name"  required class="form-control" id="inputEmail1" placeholder="Nombre">
    </div>
    <div class="col-lg-5">
      <input type="text" name="lastname"  class="form-control" id="inputEmail1" placeholder="Apellido">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Puesto</label>
    <div class="col-lg-10">
      <input type="text" name="job" class="form-control" id="inputEmail1" placeholder="Puesto">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Unidad Medica</label>
    <div class="col-lg-10">
    <select name="team_id" class="form-control" required>
      <option>-- SELECCIONE UNIDAD MEDICA --</option>
      <?php foreach($teams as $team):?>
        <option value="<?php echo $team->id;?>"><?php echo $team->name;?></option>
      <?php endforeach;?>
    </select>
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Categoria</label>
    <div class="col-lg-10">
    <select name="category_id" class="form-control" required>
      <option>-- SELECCIONE CATEGORIA --</option>
      <?php foreach($categories as $team):?>
        <option value="<?php echo $team->id;?>"><?php echo $team->name;?></option>
      <?php endforeach;?>
    </select>
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Telefono</label>
    <div class="col-lg-5">
      <input type="text" name="phone1"  class="form-control" id="inputEmail1" placeholder="Telefono">
    </div>
    <div class="col-lg-5">
      <input type="text" name="phone2"  class="form-control" id="inputEmail1" placeholder="Telefono">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Direccion</label>
    <div class="col-lg-5">
      <input type="text" name="address1"  class="form-control" id="inputEmail1" placeholder="Direccion">
    </div>
    <div class="col-lg-5">
      <input type="text" name="address2"  class="form-control" id="inputEmail1" placeholder="Direccion">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Email</label>
    <div class="col-lg-5">
      <input type="text" name="email1"  class="form-control" id="inputEmail1" placeholder="Email">
    </div>
    <div class="col-lg-5">
      <input type="text" name="email2"  class="form-control" id="inputEmail1" placeholder="Email">
    </div>

  </div>
  <div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
    <input type="hidden" name="sucursal_id" value="<?php echo $sucursal->id;?>">
      <button type="submit" class="btn btn-default">Agregar Persona</button>
    </div>
  </div>
</form>
                </div>
              </div>
            </div>

          </div>

        <!-- End Main Content -->

      </div><!-- End Page Content -->