<?php
# db.php
$user = "root";
$pass = "";
try {
	$dbh = new PDO('mysql:host=localhost;dbname=te16', $user, $pass);
} catch (PDOException $e) {
	print "Error!: " . $e->getMessage() . "<br/>";
	die();
}


/*
$pdo = new PDO('mysql:localhost;dbname=te16', 'root', '');

echo "<pre>" . print_r($pdo,1) . "</pre>";


$statement = $pdo->query("SELECT some_field FROM some_table");
$row = $statement->fetch(PDO::FETCH_ASSOC);
echo htmlentities($row['some_field']);
*/
?>