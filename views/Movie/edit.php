<main class="container">
	<div class="row">
		<h1 class="col-md-12 d-flex justify-content-center">Editar Pelicula</h1>
	</div>

	<section class="row mt-3">
		<div class="card w-50 m-auto">
			<div class="card-header container">
				<h2 class="m-auto">Información de la Pelicula</h2>
			</div>

			<div class="card-body w-100">
				<form action="?controller=Movie&method=update" method="post">

					<input type="hidden" name="id" value="<?php echo $Movie[0]->id ?>">
					
					<div class="form-group">
						<label>Nombre</label>
						<input type="text" name="name" class="form-control" value="<?php echo $Movie[0]->name ?>">
					</div>
					<div class="form-group">
						<label>Descripcion</label>
						<input type="text" name="description" class="form-control"value="<?php echo $Movie[0]->description ?>">
					</div>
					<div class="form-group">
						<label>Usuario</label>
						<select name="user_id" class="form-control">
							<option value="">Seleccione...</option>
							<?php 
								foreach($users as $user) {
									if($user->id===$Movie[0]->user_id){
							?>
										<option selected value="<?php echo $user->id ?>"><?php echo $user->name ?></option>
							<?php
									}else{
							?> 
										<option value="<?php echo $user->id ?>"><?php echo $user->name ?></option>
							<?php 
									}
								}
							?> 
						</select>
					</div>
					<div class="form-group">
						<label>Estado</label>
						<select name="status_id" class="form-control">
							<option value="">Seleccione...</option>
							<?php 
								foreach($statuses as $status) {
									if($status->id===$Movie[0]->status_id){
							?>
										<option selected value="<?php echo $status->id ?>"><?php echo $status->name ?></option>
							<?php
									}else{
							?> 
										<option value="<?php echo $status->id ?>"><?php echo $status->name ?></option>
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