<main class="container">
	<section class="col-md-12 text-center">
		<div class="mt-3">
			<h1>Gestión de Tipos de estado</h1>
		</div>

		<div class="col-md-12 m-4 d-flex justify-content-between">
			<h2>Lista de tipos de estado</h2>
			<a href="?controller=TypeStatus&method=add" class="btn btn-primary">Agregar</a>
		</div>

		<section class="col-md-12 flex-nowrap table-responsive">
			<table class="table table-striped table-hover">
				<thead>
					<tr>
						<th>Id</th>
						<th>Nombre</th>
						
					</tr>
				</thead>
				<tbody>
					<?php foreach($TypeStatuses as $TypeStatus): ?>
						<tr>
							<td><?php echo $TypeStatus->id ?></td>
							<td><?php echo $TypeStatus->name ?></td>
							
							<td>
								<a href="?controller=TypeStatus&method=edit&id=<?php echo $TypeStatus->id?>" class="btn btn-warning" title="Editar Tipo Estado">Editar</a>
								<a href="?controller=TypeStatus&method=delete&id=<?php echo $TypeStatus->id?>" class="btn btn-danger" title="Eliminar Tipo Estado">Eliminar</a>

							</td>
						</tr>
					<?php endforeach ?>
				</tbody>
			</table>
		</section>
	</section>
</main>
