      <div class="page-content">

        <!-- Header Bar -->
<?php

$person = PersonData::getById($_GET["id"]);
$teams  = TeamData::getAll();
$categories  = CategoryData::getAll();
 Action::load("header");?>
        <!-- End Header Bar -->


          <div class="row">
            <div class="col-lg-12">
            <h2><?php echo $person->name." ".$person->lastname; ?> <small>Editar</small></h2>
              <div class="widget">
                <div class="widget-title">
                  <i class="fa fa-male"></i> Contacto
                </div>
                <div class="widget-body">
<form class="form-horizontal" role="form" method="post" action="./?r=person/update">
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Numero</label>
    <div class="col-lg-10">
      <input type="text" name="no" value="<?php echo $person->no;?>" required class="form-control" id="inputEmail1" placeholder="Numero">
    </div>
  </div>  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Nombre</label>
    <div class="col-lg-5">
      <input type="text" name="name"  required class="form-control" value="<?php echo $person->name;?>" id="inputEmail1" placeholder="Nombre">
    </div>
    <div class="col-lg-5">
      <input type="text" name="lastname"  class="form-control" value="<?php echo $person->lastname;?>" id="inputEmail1" placeholder="Apellido">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Puesto</label>
    <div class="col-lg-10">
      <input type="text" name="job" value="<?php echo $person->job;?>" class="form-control" id="inputEmail1" placeholder="Puesto">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Unidad Medica</label>
    <div class="col-lg-10">
    <select name="team_id" class="form-control" required>
      <option>-- SELECCIONE UNIDAD MEDICA --</option>
      <?php foreach($teams as $team):?>
        <option value="<?php echo $team->id;?>" <?php if($team->id==$person->team_id){ echo "selected"; }?>><?php echo $team->name;?></option>
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
        <option value="<?php echo $team->id;?>" <?php if($team->id==$person->category_id){ echo "selected"; }?>><?php echo $team->name;?></option>
      <?php endforeach;?>
    </select>
    </div>
  </div>


  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Telefono</label>
    <div class="col-lg-5">
      <input type="text" name="phone1" value="<?php echo $person->phone1;?>"  class="form-control" id="inputEmail1" placeholder="Telefono">
    </div>
    <div class="col-lg-5">
      <input type="text" name="phone2" value="<?php echo $person->phone2;?>"  class="form-control" id="inputEmail1" placeholder="Telefono">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Direccion</label>
    <div class="col-lg-5">
      <input type="text" name="address1" value="<?php echo $person->address1;?>"  class="form-control" id="inputEmail1" placeholder="Direccion">
    </div>
    <div class="col-lg-5">
      <input type="text" name="address2" value="<?php echo $person->address2;?>"  class="form-control" id="inputEmail1" placeholder="Direccion">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Email</label>
    <div class="col-lg-5">
      <input type="text" name="email1" value="<?php echo $person->email1;?>"  class="form-control" id="inputEmail1" placeholder="Email">
    </div>
    <div class="col-lg-5">
      <input type="text" name="email2" value="<?php echo $person->email2;?>"  class="form-control" id="inputEmail1" placeholder="Email">
    </div>

  </div>
  <div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
    <input type="hidden" name="id" value="<?php echo $person->id; ?>">
      <button type="submit" class="btn btn-default">Actualizar Cliente</button>
    </div>
  </div>
</form>
                </div>
              </div>
            </div>

          </div>

        <!-- End Main Content -->

      </div><!-- End Page Content -->