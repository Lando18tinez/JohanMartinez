<main class="container">
<main class="container">
	<section class="col-md-12 text-center">
		<div class="mt-3">
			<h1>Gestión de Peliculas</h1>
		</div>

		<div class="col-md-12 m-4 d-flex justify-content-between">
			<h2>Lista de Peliculas</h2>
			<a href="?controller=Movie&method=add" class="btn btn-primary">Agregar</a>
		</div>

		<section class="col-md-12 flex-nowrap table-responsive">
			<table class="table table-striped table-hover">
				<thead>
					<tr>
						<th>Id</th>
						<th>Nombres</th>
						<th>Descripción</th>
						<th>Usuario</th>
						<th>Estado</th>
						<th>Acciones</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach($Movies as $Movie): ?>
						<tr>
							<td><?php echo $Movie->id ?></td>
							<td><?php echo $Movie->name ?></td>
							<td><?php echo $Movie->description ?></td>
							<td><?php echo $Movie->user ?></td>
							<td><?php echo $Movie->status ?></td>
							<td>
								<a href="?controller=Movie&method=edit&id=<?php echo $Movie->id?>" class="btn btn-warning" title="Editar Usuario">Editar</a>
								<a href="?controller=Movie&method=delete&id=<?php echo $Movie->id?>" class="btn btn-danger" title="Eliminar Usuario">Eliminar</a>

							</td>
						</tr>
					<?php endforeach ?>
				</tbody>
			</table>
		</section>
	</section>
</main>
