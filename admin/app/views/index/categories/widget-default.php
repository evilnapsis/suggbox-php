<?php

$persons = CategoryData::getAll();

?>
      <div class="page-content">

        <!-- Header Bar -->
<?php Action::load("header");?>
        <!-- End Header Bar -->

          <div class="row">
            <div class="col-lg-12">
<a href="./?r=team/newcat" class="btn btn-default pull-right">Agregar Categoria</a>
            <h1>Categorias</h1>
<?php if(count($persons)==0):?>
  <p class="alert alert-danger">No hay Categorias</p>
<?php endif; ?>
              <div class="widget">
                <div class="widget-title">
                  <i class="fa fa-th-list"></i> Categorias
                </div>
                <div class="widget-body no-padding">

                  <div class="table-responsive">
<?php if(count($persons)>0):?>
                    <table class="table">
                    <thead>
                    <th></th>
                      <th>Nombre</th>
                      <th></th>
                    </thead>
                      <tbody>
                      <?php foreach($persons as $autor):?>
                        <tr>
                        <td style="width:30px;">
                        </td>
                        <td><?php echo $autor->name; ?></td>
                        <td style="width:180px;">
                        <a href="./?r=team/editcat&id=<?php echo $autor->id; ?>" class="btn btn-warning btn-xs">Editar</a>
<!--                        <a href="./index.php?action=delcategoria&id=<?php echo $autor->id; ?>" class="btn btn-danger btn-xs">Eliminar</a> -->
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