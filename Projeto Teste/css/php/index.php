<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
	</head>
<body>
	<nav class="navbar navbar-default">
	</nav>
	<div class="col-md-3"></div>
	<div class="col-md-6 well">
		<h3 class="text-primary">Marmita R$ 17,00</h3>
		<hr style="border-top:1px dotted #ccc;"/>
		<div class="col-md-4">
			<form method="POST" action="save.php">
				<div class="form-group">
					<label>Nome:</label>
					<input type="text" name="firstname" class="form-control" required="required"/>
				</div>

				<label>Opções:</label>
				<br />
				<input type="checkbox" name="subject[]" value="Feijão"/>Feijão
				<br />
				<input type="checkbox" name="subject[]" value="Arroz"/>Arroz
				<br />
				<input type="checkbox" name="subject[]" value="Massa"/>Massa
				<br />
				<input type="checkbox" name="subject[]" value="Aipim"/>Aipim
				<br />
				<input type="checkbox" name="subject[]" value="Batata"/>Batata
				<br />
				<input type="checkbox" name="subject[]" value="Frango"/>Frango
				<br />
				<input type="checkbox" name="subject[]" value="Peixe"/>Peixe
				<br />
				<input type="checkbox" name="subject[]" value="Polenta"/>Polenta
				<button name="save" class="btn btn-primary form-control">Concluir</button>
			</form>
		</div>
 
		
	</div>
</body>
</html>