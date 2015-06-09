
<div class="container">
	<div class="row">
	<div class="col-md-12">
	<h2>BLOG</h2>
<ul class="nav nav-pills">
  <li><a href="./?r=blog/index">Articulos</a></li>
  <li><a href="./?r=blog/newpost">Nuevo articulo</a></li>
</ul>
<br>

<form role="form" method="post" action="./?r=blog/add">
  <div class="form-group">
    <label for="exampleInputEmail1">Titulo</label>
    <input type="text" name="title" class="form-control"  id="exampleInputEmail1" placeholder="Titulo">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Contenido</label>
    <textarea name="content" class="form-control" id="exampleInputPassword1" placeholder="Contenido"></textarea>
  </div>
  <div class="checkbox">
    <label>
      <input type="checkbox" name="is_public"> Publicar
    </label>
  </div>
  <button type="submit" class="btn btn-default">Agregar</button>
</form>

	</div>
	</div>
</div>


