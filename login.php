<div class="col-md-3">
	<div class="panel panel-success" id="panel-margin">
		<div class="panel-heading">
			<center><h1 class="panel-title">Login Estudiantes</h1></center>
		</div>
		<div class="panel-body">
			<form method="POST">
				<div class="form-group">
					<label for="username">Cuenta Estudiantil</label>
					<input class="form-control" name="stud_no" placeholder="No. Cuenta" type="number" required="required" >
				</div>
				<div class="form-group">
					<label for="password">Contraseña</label>
					<input class="form-control" name="password" placeholder="Contraseña" type="password" required="required" >
				</div>
				<?php include 'login_query.php'?>
				<div class="form-group">
					<button class="btn btn-block btn-primary"  name="login"><span class="glyphicon glyphicon-log-in"></span> Acceder</button>
				</div>
			</form>
		</div>
	</div>
</div>	