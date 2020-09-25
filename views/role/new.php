<main class="container">
	<div class="row">
		<h1 class="col-md-12 d-flex justify-content-center">Nuevo Rol</h1>
	</div>

	<section class="row mt-3">
		<div class="card w-50 m-auto">
			<div class="card-header container">
				<h2 class="m-auto">Información del Rol</h2>
			</div>

			<div class="card-body w-100">
				<form action="?controller=role&method=save" method="post">
					<div class="form-group">
						<label>Nombre</label>
						<input type="text" name="name" class="form-control" placeholder="Ej. Aprendiz">
					</div>
					<div class="form-group">
						<label>Estado</label>
						<select name="statuses_id" class="form-control">
							<option value="">Seleccione...</option>
							<?php foreach($statuses as $status): ?> 
								<option value="<?php echo $status->id ?>"><?php echo $status->name ?></option>
							<?php endforeach ?> 
						</select>
					</div>
					<div class="form-group">
						<button class="btn btn-primary">Guardar</button>
					</div>
				</form>
			</div>
		</div>
	</section>
</main>