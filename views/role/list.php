<main class="container">
	<section class="col-md-12 text-center">
		<div class="mt-3">
			<h1>Gestión de Roles</h1>
		</div>

		<div class="col-md-12 m-4 d-flex justify-content-between">
			<h2>Lista de Roles</h2>
			<a href="?controller=role&method=add" class="btn btn-primary">Agregar</a>
		</div>

		<section class="col-md-12 flex-nowrap table-responsive">
			<table class="table table-striped table-hover">
				<thead>
					<tr>
						<th>Id</th>
						<th>Nombre</th>
						<th>Estado</th>
						<th>Acciones</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach($roles as $role): ?>
						<tr>
							<td><?php echo $role->id ?></td>
							<td><?php echo $role->name ?></td>
							<td><?php echo $role->status ?></td>
							<td>
								<a href="?controller=role&method=edit&id=<?php echo $role->id?>" class="btn btn-warning" title="Editar Rol">Editar</a>
								<a href="?controller=role&method=delete&id=<?php echo $role->id?>" class="btn btn-danger" title="Eliminar Rol">Eliminar</a>
							</td>
						</tr>
					<?php endforeach ?>
				</tbody>
			</table>
		</section>
	</section>
</main>
