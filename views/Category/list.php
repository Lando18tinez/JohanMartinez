<main class="container">
<main class="container">
	<section class="col-md-12 text-center">
		<div class="mt-3">
			<h1>Gestión de Categorias</h1>
		</div>

		<div class="col-md-12 m-4 d-flex justify-content-between">
			<h2>Lista de Categorias</h2>
			<a href="?controller=Category&method=add" class="btn btn-primary">Agregar</a>
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
					<?php foreach($Categories as $Category): ?>
						<tr>
							<td><?php echo $Category->id ?></td>
							<td><?php echo $Category->name ?></td>
							<td><?php echo $Category->status ?></td>
							<td>
								<a href="?controller=Category&method=edit&id=<?php echo $Category->id?>" class="btn btn-warning" title="Editar Categoria">Editar</a>
								<a href="?controller=Category&method=delete&id=<?php echo $Category->id?>" class="btn btn-danger" title="Eliminar Categoria">Eliminar</a>

							</td>
						</tr>
					<?php endforeach ?>
				</tbody>
			</table>
		</section>
	</section>
</main>
