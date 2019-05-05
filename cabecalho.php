<!DOCTYPE html>
<html>
<head>
	<title>AgroUrban</title>
	<!-- Usado para o navegador interpretar os caracteres especiais -->
	<meta charset="utf-8">
	<!-- importando os arquivos css -->
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="assets/css/boot.css">
	<link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
	<!--<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/style_common.css">
	<link rel="stylesheet" type="text/css" href="assets/css/style1.css">
	<link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:700,300,300italic'>
	<!-- Importando os javascripts dos estilos -->
	<script src="assets/js/modernizr.custom.69142.js"></script>
	<script src="assets/js/jquery-1.10.1.min.js"></script>
	<script src="assets/js/bootstrap.min.js" ></script>
	<style>
		.bgBranco {
			color: #000000;
		}
		.img_logo{
			height: 50px;
		}
	</style>
</head>
<body>
	<div id="page-top" class="index">
		
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
		 	<a class="navbar-brand" href="#">
				<img class="img_logo" src="assets/img/logo.png">
			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
		    	<span class="navbar-toggler-icon"></span>
			</button>
			
			<div class="collapse navbar-collapse" id="navbarNavDropdown">
				<ul class="navbar-nav">
					<li class="nav-item active">
						<a class="nav-link" href="#">Início <span class="sr-only">(current)</span></a>
					</li>
					<!--<li class="nav-item">
						<a class="nav-link" href="#">Features</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Pricing</a>
					</li>-->
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Login
						</a>
						<div class="dropdown-menu">
  							<form class="px-4 py-3">
    							<div class="form-group">
      								<label for="exampleDropdownFormEmail1">Email</label>
      								<input type="email" class="form-control" id="exampleDropdownFormEmail1" placeholder="email@example.com">
								</div>
						    	<div class="form-group">
      								<label for="exampleDropdownFormPassword1">Senha</label>
      								<input type="password" class="form-control" id="exampleDropdownFormPassword1" placeholder="Password">
   								</div>
    							<div class="form-group">
      								<div class="form-check">
        								<input type="checkbox" class="form-check-input" id="dropdownCheck">
        								<label class="form-check-label" for="dropdownCheck">
          									Lembrar-me
        								</label>
      								</div>
    							</div>
    							<button type="submit" class="btn btn-primary">Enviar</button>
 							</form>
  							<div class="dropdown-divider"></div>
  								<a class="dropdown-item" href="cad_vendedor.php">Cadastro de novo vendedor</a>
  								<a class="dropdown-item" href="cad_agricultor.php">Cadastro de novo produtor</a>
  								<a class="dropdown-item" href="#">Esqueceu a senha?</a>
							</div>
					</li>
				</ul>
			</div>
		</nav>

	</div>
