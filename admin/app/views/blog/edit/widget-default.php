<?php
?>
<div class="container">
	<div class="row">
	<div class="col-md-12">
	<h2>EDITAR POST</h2>
<ul class="nav nav-pills">
  <li><a href="./?r=blog/index">Articulos</a></li>
  <li><a href="./?r=blog/newpost">Nuevo articulo</a></li>
</ul>
<br>

<form role="form" method="post" action="./?r=blog/update">
  <div class="form-group">
    <label for="exampleInputEmail1">Titulo</label>
    <input type="text" name="title" class="form-control" value="<?php echo $cntrllr->post->title; ?>" id="exampleInputEmail1" placeholder="Titulo">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Contenido</label>
    <textarea name="content" class="form-control" id="exampleInputPassword1" placeholder="Contenido"><?php echo $cntrllr->post->content; ?></textarea>
  </div>
  <div class="checkbox">
    <label>
      <input type="checkbox" name="is_public" <?php if($cntrllr->post->is_public){ echo "checked";}?>> Publicar
    </label>
  </div>
  <input type="hidden" name="id" value="<?=$cntrllr->post->id;?>">
  <button type="submit" class="btn btn-default">Actualizar</button>
</form>

	</div>
	</div>
</div>


