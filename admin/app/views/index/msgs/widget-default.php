<?php
$persons = ItemData::getAll();
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
                      <th>Tipo</th>
                      <th>Nombre</th>
                      <th>Direccion</th>
                      <th>Telefono</th>
                      <th>Afectado</th>
                      <th>Mensaje</th>
                      <th></th>
                    </thead>
                      <tbody>
                      <?php foreach($persons as $autor):?>
                        <tr>
                        <td style="width:30px;">
                        
                        </td>
                        <td>
                        <?php
                        switch ($autor->kind) {
                          case 1: echo "Queja";      break;
                          case 2: echo "Sugerencia";      break;
                          case 3: echo "Agradecimiento";      break;
                          
                          default:
                            # code...
                            break;
                        }
                        ?>
                        </td>

                        <td><?php echo $autor->fullname; ?></td>
                        <td><?php echo $autor->address; ?></td>
                        <td><?php echo $autor->phone; ?></td>
                        <td><?php echo $autor->getPerson()->name." ".$autor->getPerson()->lastname; ?></td>
                        <td><?php echo $autor->msg; ?></td>
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