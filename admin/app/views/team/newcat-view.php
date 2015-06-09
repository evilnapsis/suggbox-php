      <div class="page-content">

        <!-- Header Bar -->
<?php Action::load("header");?>
        <!-- End Header Bar -->


          <div class="row">
            <div class="col-lg-12">
            <h2>Nueva Categoria</h2>
              <div class="widget">
                <div class="widget-title">
                  <i class="fa fa-male"></i> Categoria
                </div>
                <div class="widget-body">
<form class="form-horizontal" role="form" method="post" action="./?r=team/addcat">
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Nombre</label>
    <div class="col-lg-10">
      <input type="text" name="name"  required class="form-control" id="inputEmail1" placeholder="Nombre">
    </div>
  </div>
  <div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
      <button type="submit" class="btn btn-default">Agregar Categoria</button>
    </div>
  </div>
</form>
                </div>
              </div>
            </div>

          </div>

        <!-- End Main Content -->

      </div><!-- End Page Content -->