<!DOCTYPE html>
	<html lang="pt-br">
	<head>
		<meta charset="utf-8">
	</head>
	<body>
		<?php
			date_default_timezone_set('America/Sao_Paulo');
			$hora = date('H');
			if(($hora >= 0) && ($hora <= 12)){
				echo "<font color='red'>bom dia</font>";
			}else if(($hora >= 12) && ($hora <= 18)){
				echo "<font color='green'>boa tarde<font>";
			}else{
				echo "<font color='blue'>boa noite<font>";
			}
		?>
	</body>
</html>
