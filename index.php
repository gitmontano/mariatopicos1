<!doctype html>
<html lang="es">


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Topicos Registro">
    <meta name="author" content="">
    <title>Topicos Registro</title>
    <link href="./bootstrap.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
</head>

<body>
    
    
    <main role="main" class="container">
<div class="row">
	<div class="col-12">
		<h1>Registar</h1>
		<form action="guardar.php" method="POST">
			<div class="form-group">
				<label for="nombre">Nombre</label>
				<input required name="nombre" type="text" id="nombre" placeholder="Nombre" class="form-control">
			</div>
			<div class="form-group">
				<label for="correo">Correo</label>
				<input required name="correo" type="mail" id="correo" placeholder="Correo" class="form-control">
			</div>
			<div class="form-group">
				<label for="contrasena">Contrasena</label>
				<input required name="contrasena" type="password" id="contrasena" placeholder="Contrasena" class="form-control">
			</div>
			<div class="form-group">
				<label for="celular">Celular</label>
				<input required name="celular" type="number" id="celular" placeholder="Nro de celular" class="form-control">
			</div>
			<div class="form-group">
				<label for="edad">Edad</label>
				<input required name="edad" type="number" id="edad" placeholder="Edad" class="form-control">
			</div>
			<button type="submit" class="btn btn-success">Guardar</button>
			<a href="./listar.php" class="btn btn-warning">Listar</a>
		</form>
	</div>
</div>
</main>
</body>
</html>