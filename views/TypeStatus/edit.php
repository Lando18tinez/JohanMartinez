<main class="container">
	<div class="row">
		<h1 class="col-md-12 d-flex justify-content-center">Editar tipo estado</h1>
	</div>

	<section class="row mt-3">
		<div class="card w-50 m-auto">
			<div class="card-header container">
				<h2 class="m-auto">Información del tipo estado</h2>
			</div>

			<div class="card-body w-100">
				<form action="?controller=TypeStatus&method=update" method="post">

					<input type="hidden" name="id" value="<?php echo $TypeStatus[0]->id ?>">
					
					<div class="form-group">
						<label>Nombre</label>
						<input type="text" name="name" class="form-control" value="<?php echo $TypeStatus[0]->name ?>">
					</div>					
					<div class="form-group">
						<button class="btn btn-primary">Actualizar</button>
					</div>
				</form>
			</div>
		</div>
	</section>
</main>