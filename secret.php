<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>TP PHP</title>
</head>
<body>

	<?php
	if ($_POST['password'] == "kangourou")
	{
		echo 'Bienvenue ' . $_POST['idlogin'] . '<br>';
		echo '<br> La liste de course de MACRON:   T4SF-AZFG-QS34-AZFI';
		echo '<br> Les amis de POUTINE:   Fichier inexistant.';
		echo '<br> Les photos de TRUMP sans perruque:   LOL4-XDXD-PTDR-1337';
	}
	else 
	{
		echo 'On appelle la police hahah!!';
	}

		?>
</body>
</html>