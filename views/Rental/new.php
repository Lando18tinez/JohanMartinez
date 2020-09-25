<main class="container">
	<div class="row">
		<h1 class="col-md-12 d-flex justify-content-center">Nueva Renta</h1>
	</div>

	<section class="row mt-3">
		<div class="card w-50 m-auto">
			<div class="card-header container">
				<h2 class="m-auto">Información de la Renta</h2>
			</div>

			<div class="card-body w-100">
				<!--<form action="?controller=Rental&method=save" method="post">-->
					<div class="form-group">
						<label>Fecha inicio</label>
						<input type="date" id="start_date" class="form-control">
					</div>
					<div class="form-group">
						<label>Fecha fin</label>
						<input type="date" id="end_date" class="form-control">
                    </div>
                    <div class="form-group">
						<label>Total</label>
						<input type="text" id="total" class="form-control">
					</div>
					<div class="form-group">
						<label>Usuario</label>
						<select id="user_id" class="form-control">
							<option value="">Seleccione...</option>
							<?php foreach($users as $user): ?> 
								<option value="<?php echo $user->id ?>"><?php echo $user->name ?></option>
							<?php endforeach ?> 
						</select>
					</div>
					<div class="form-group">
						<label>Estado</label>
						<select id="statuses_id" class="form-control">
							<option value="">Seleccione...</option>
							<?php foreach($statuses as $status): ?> 
								<option value="<?php echo $status->id ?>"><?php echo $status->name ?></option>
							<?php endforeach ?> 
						</select>
					</div>

					<div class="form-group row">
                    <div class="col-md-8">                            
                        <label>Peliculas</label>
                        <select id="movie" class="form-control">
                            <option value="">Seleccione...</option>
                            <?php foreach($movies as $movie): ?>
                                <option value="<?php echo $movie->id ?>"><?php echo $movie->name ?></option>
                            <?php endforeach ?>
                        </select>
                    </div>
                    <div class="col-md-4 mt-4">
                        <a href="#" class="btn btn-success" id="addElement">+</a>
                    </div>
                	</div>                    

				<div id="list-movies" class="form-group"></div>

					<div class="form-group">
						<button class="btn btn-primary" id="save">Guardar</button>
					</div>
				<!--</form>-->
			</div>
		</div>
	</section>
</main>
<script src="assets/js/rentals.js"></script>