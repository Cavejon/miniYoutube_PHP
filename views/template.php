<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Youtube</title>
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="<?php echo BASE_URL; ?>/assets/css/template.css">
	</head>
	<body>
		<div class="topo">
		Youtube <a href="<?php echo BASE_URL;?>/sobre">Sobre</a>
		</div>
		<?php
			$this->loadViewInTemplate($viewName, $viewData);
		?>
	</body>
</html>