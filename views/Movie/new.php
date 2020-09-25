<main class="container">
	<div class="row">
		<h1 class="col-md-12 d-flex justify-content-center">Nuevo Pelicula</h1>
	</div>

	<section class="row mt-3">
		<div class="card w-50 m-auto">
			<div class="card-header container">
				<h2 class="m-auto">Información de la pelicula</h2>
			</div>

			<div class="card-body w-100">
				<!--<form action="?controller=Movie&method=save" method="post">-->
					<div class="form-group">
						<label>Nombre</label>
						<input type="text" id="name" class="form-control" placeholder="Ej. Capitana Marvel">
					</div>
					<div class="form-group">
						<label>Descripción</label>
						<input type="text" id="description" class="form-control" placeholder="Ej. Se trata de...">
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
						<select id="status_id" class="form-control">
							<option value="">Seleccione...</option>
							<?php foreach($statuses as $status): ?> 
								<option value="<?php echo $status->id ?>"><?php echo $status->name ?></option>
							<?php endforeach ?> 
						</select>
					</div>

					<div class="form-group row">
                    <div class="col-md-8">                            
                        <label>Categorías</label>
                        <select id="category" class="form-control">
                            <option value="">Seleccione...</option>
                            <?php foreach($categories as $category): ?>
                                <option value="<?php echo $category->id ?>"><?php echo $category->name ?></option>
                            <?php endforeach ?>
                        </select>
                    </div>
                    <div class="col-md-4 mt-4">
                        <a href="#" class="btn btn-success" id="addElement">+</a>
                    </div>
                	</div>                    

				<div id="list-categories" class="form-group"></div>
				
					<div class="form-group">
						<button class="btn btn-primary" id="save">Guardar</button>
					</div>
				<!--</form>-->
			</div>
		</div>
	</section>
</main>
<script src="assets/js/movie.js"></script>