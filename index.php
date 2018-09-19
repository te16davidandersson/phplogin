<!DOCTYPE html>
<html lang="se">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="widht=device-width, initial-scale=1.0">
	<link href="https://fonts.googleapis.com/css?family=Merriweather" rel="stylesheet">
	<title>Jaha</title>
	<style type="text/css">
		body {
			background-color: #eedfcc;
		}
		main {
			width: 80%;
			margin: 0px auto;
		}
		p, h1, head {
			font-family: 'Merriweather', serif;
		}
		fieldset{
			background-color: white;
		}
		legend {
			background-color: white;
			border: 1px solid grey;
		}

	</style>
</head>
<body>
<main>
	<h1>Du är ej välkommen här</h1>
	<form action="login.php" method="POST">
		<fieldset>
			<legend>Logga in</legend>
			<p>
				<label for="username">Användarnamn: </label>
				<input type="text" name="username" id="username">
			</p>
			<p>
				<label for="password">Lösenord: </label>
				<input type="password" name="password" id="password">
			</p>
			<p>
				<input type="submit" name="submit" id="submit" value="Logga in">
			</p>
		</fieldset>
	</form>
</main>
</body>
</html>