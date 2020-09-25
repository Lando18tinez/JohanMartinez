<main class="container">
	<div class="row">
		<h1 class="col-md-12 d-flex justify-content-center">Editar Estado</h1>
	</div>

	<section class="row mt-3">
		<div class="card w-50 m-auto">
			<div class="card-header container">
				<h2 class="m-auto">Información del Estado</h2>
			</div>

			<div class="card-body w-100">
				<form action="?controller=Status&method=update" method="post">

					<input type="hidden" name="id" value="<?php echo $status[0]->id ?>">
					
					<div class="form-group">
						<label>Nombre</label>
						<input type="text" name="name" class="form-control" value="<?php echo $status[0]->name ?>">
					</div>
					<div class="form-group">
						<label>Estado</label>
						<select name="type_statuses_id" class="form-control">
							<option value="">Seleccione...</option>
							<?php 
								foreach($TypeStatuses as $TypeStatus) {
									if($TypeStatus->id===$status[0]->type_statuses_id){
							?>
										<option selected value="<?php echo $TypeStatus->id ?>"><?php echo $TypeStatus->name ?></option>
							<?php
									}else{
							?> 
										<option value="<?php echo $TypeStatus->id ?>"><?php echo $TypeStatus->name ?></option>
							<?php 
									}
								}
							?> 
						</select>
					</div>
					<div class="form-group">
						<button class="btn btn-primary">Actualizar</button>
					</div>
				</form>
			</div>
		</div>
	</section>
</main>