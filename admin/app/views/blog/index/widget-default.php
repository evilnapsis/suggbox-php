<div class="container">
	<div class="row">
	<div class="col-md-12">
	<h2>BLOG</h2>
<ul class="nav nav-pills">
  <li class="active"><a href="./?r=blog/newpost">Nuevo articulo</a></li>
</ul>
<br>

<?php if(count($cntrllr->posts)>0):?>
	<table class="table table-bordered table-condensed">
	<thead>
		<th></th>
		<th>Titulo</th>
		<th>Fecha</th>
		<th></th>
	</thead>
	<?php foreach($cntrllr->posts as $post):?>
		<tr>
			<td></td>
			<td><?php echo $post->title; ?></td>
			<td><?php echo $post->created_at; ?></td>
			<td>
				<a href="./?r=blog/edit&id=<?=$post->id;?>" class="btn btn-warning">Editar</a>
				<a href="./?r=blog/delete&id=<?=$post->id;?>" class="btn btn-danger">Eliminar</a>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif;?>

	</div>
	</div>
</div>