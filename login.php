<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Inloggad</title>
</head>
<body>


<?php
if(isset($_POST['submit'])) 
{ // kollar om post[submit] har ett värde
	include 'db.php';
/*
	
	echo htmlentities($row['some_field']);
*/
	if(isset($_POST['username']) && isset($_POST['password']))
	{
		$username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_STRING);
		$password = $_POST['password'];

		$statement = $dbh->query("SELECT * FROM login");
		$row = $statement->fetch(PDO::FETCH_ASSOC);


		if($username == $row['username'] && password_verify($password, $row['password'])) 
		{
			echo "<h1>Välkommen till the halls of shadows, du är en äkta rogue, håhå!</h1>";
		}
		else
		{
			echo "<h1>Fel som en bit kamel i en falafel eller när Kevin kopplar el medan han spelar spel, då är han inte hel utan han är endast en del</h1>";
		} 
	}


	// echo "<pre>" . var_dump($_POST,1) . "</pre>";

} else {
	echo "<h1>Jaha</h1>";
}
?>
</body>
</html>