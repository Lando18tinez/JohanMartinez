<main class="container">
<main class="container">
	<section class="col-md-12 text-center">
		<div class="mt-3">
			<h1>Gestión de Estado</h1>
		</div>

		<div class="col-md-12 m-4 d-flex justify-content-between">
			<h2>Lista de Estados</h2>
			<a href="?controller=Status&method=add" class="btn btn-primary">Agregar</a>
		</div>

		<section class="col-md-12 flex-nowrap table-responsive">
			<table class="table table-striped table-hover">
				<thead>
					<tr>
						<th>Id</th>
						<th>Nombres</th>
						<th>Tipo Estado</th>
						<th>Acciones</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach($Statuses as $Status): ?>
						<tr>
							<td><?php echo $Status->id ?></td>
							<td><?php echo $Status->name ?></td>
							<td><?php echo $Status->type ?></td>
							<td>
								<a href="?controller=Status&method=edit&id=<?php echo $Status->id?>" class="btn btn-warning" title="Editar Estado">Editar</a>
								<a href="?controller=Status&method=delete&id=<?php echo $Status->id?>" class="btn btn-danger" title="Eliminar Estado">Eliminar</a>

							</td>
						</tr>
					<?php endforeach ?>
				</tbody>
			</table>
		</section>
	</section>
</main>
