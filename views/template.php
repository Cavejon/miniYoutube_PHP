<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8" />
	<title>Youtube</title>
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="stylesheet" href="<?php echo BASE_URL; ?>/assets/css/template.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	<script type="text/javascript" src="<?php echo BASE_URL; ?>/assets/js/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo BASE_URL; ?>/assets/js/script.js"></script>
</head>

<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-dark">
		<div class="collapse navbar-collapse topo" id="navbarNav">
			<ul class="navbar-nav ">
				<li class="nav-item active text-light">
					<a class="nav-link text-light" href="<?php echo BASE_URL; ?>">Home</a>
				</li>
				<li class="nav-item text-light">
					<a class="nav-link text-light" href="<?php echo BASE_URL; ?>/sobre">Sobre</a>
				</li>
				<li class="nav-item text-light">
					<a class="nav-link text-light" href="<?php echo BASE_URL; ?>/contato">Contato</a>
				</li>
			</ul>
		</div>
	</nav>



	<?php
	$this->loadViewInTemplate($viewName, $viewData);
	?>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</body>

</html>