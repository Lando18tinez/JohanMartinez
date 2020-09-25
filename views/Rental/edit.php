<main class="container">
	<div class="row">
		<h1 class="col-md-12 d-flex justify-content-center">Editar Renta</h1>
	</div>

	<section class="row mt-3">
		<div class="card w-50 m-auto">
			<div class="card-header container">
				<h2 class="m-auto">Información de la Renta</h2>
			</div>

			<div class="card-body w-100">
				<form action="?controller=Rental&method=update" method="post">

					<input type="hidden" name="id" value="<?php echo $Rental[0]->id ?>">
					
					<div class="form-group">
						<label>Fecha inicio</label>
						<input type="date" name="start_date" class="form-control"  value="<?php echo $Rental[0]->start_date ?>">
                    </div>
                    <div class="form-group">
						<label>Fecha fin</label>
						<input type="date" name="end_date" class="form-control"  value="<?php echo $Rental[0]->end_date ?>">
					</div>
					<div class="form-group">
						<label>Total</label>
						<input type="number" name="total" class="form-control" value="<?php echo $Rental[0]->total ?>">
					</div>
					<div class="form-group">
						<label>Usuario</label>
						<select name="user_id" class="form-control">
							<option value="">Seleccione...</option>
							<?php 
								foreach($users as $user) {
									if($user->id===$Rental[0]->user_id){
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
						<select name="statuses_id" class="form-control">
							<option value="">Seleccione...</option>
							<?php 
								foreach($statuses as $status) {
									if($status->id===$Rental[0]->statuses_id){
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