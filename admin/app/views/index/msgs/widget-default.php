<?php
$persons = ItemData::getAll();
?>
      <div class="page-content">

        <!-- Header Bar -->
<?php Action::load("header");?>
        <!-- End Header Bar -->

          <div class="row">
            <div class="col-lg-12">
            <h1>Mensajes</h1>
<?php if(count($persons)==0):?>
  <p class="alert alert-danger">No hay Mensajes</p>
<?php endif; ?>
              <div class="widget">
                <div class="widget-title">
                  <i class="fa fa-th-list"></i> Mensajes
                </div>
                <div class="widget-body no-padding">

                  <div class="table-responsive">
<?php if(count($persons)>0):?>
                    <table class="table">
                    <thead>
                    <th></th>
                      <th>Mensaje</th>
                      <th>Nombre</th>
                      <th>Tipo</th>
                      <th>Direccion</th>
                      <th>Telefono</th>
                      <th>Departamento</th>
                      <th>Fecha</th>
                    </thead>
                      <tbody>
                      <?php foreach($persons as $autor):?>
                        <tr>
                        <td style="width:30px;">
                        
                        </td>
                        <td><?php echo $autor->msg; ?></td>
                        <td><?php echo $autor->fullname; ?></td>
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

                        <td><?php echo $autor->address; ?></td>
                        <td><?php echo $autor->phone; ?></td>
                        <td><?php echo $autor->getTeam()->name; ?></td>
                        <td><?php echo $autor->created_at;?></td>
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