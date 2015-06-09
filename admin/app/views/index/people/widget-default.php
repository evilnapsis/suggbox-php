<?php
$persons = PersonData::getAll();
?>
      <div class="page-content">

        <!-- Header Bar -->
<?php Action::load("header");?>
        <!-- End Header Bar -->

          <div class="row">
            <div class="col-lg-12">
<a href="./?r=team/newclient" class="btn btn-default pull-right">Agregar Persona</a>
            <h1>Personas</h1>
<?php if(count($persons)==0):?>
  <p class="alert alert-danger">No hay personas</p>
<?php endif; ?>
              <div class="widget">
                <div class="widget-title">
                  <i class="fa fa-th-list"></i> Personas
                </div>
                <div class="widget-body no-padding">

                  <div class="table-responsive">
<?php if(count($persons)>0):?>
                    <table class="table">
                    <thead>
                    <th></th>
                      <th>Numero</th>
                      <th>Nombre</th>
                      <th>Unidad Medica</th>
                      <th>Categoria</th>
                      <th>Puesto</th>
                      <th>Direccion</th>
                      <th>Telefono</th>
                      <th></th>
                    </thead>
                      <tbody>
                      <?php foreach($persons as $autor):?>
                        <tr>
                        <td style="width:30px;">
                        </td>
                        <td><?php echo $autor->no; ?></td>
                        <td><?php echo $autor->name." ".$autor->lastname; ?></td>
                        <td><?php echo $autor->getTeam()->name; ?></td>
                        <td><?php echo $autor->getCategory()->name; ?></td>
                        <td><?php echo $autor->job; ?></td>
                        <td><?php echo $autor->address1; ?></td>
                        <td><?php echo $autor->phone1; ?></td>
                        <td style="width:180px;">
                        <a href="./?r=person/edit&id=<?php echo $autor->id; ?>" class="btn btn-warning btn-xs">Editar</a>
                        <a href="./?r=person/del&id=<?php echo $autor->id; ?>" class="btn btn-danger btn-xs">Eliminar</a>
                        </td>
                        </tr>
                      <?php endforeach; ?>
                      </tbody>
                    </table>
<?php endif; ?>
                  </div>
                </div>
              </div>
            </div>

          </div>













</div>