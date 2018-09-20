<?php
	include 'db.php';

	//SELECT * FROM `login` WHERE username = 'david'
	foreach($dbh->query('SELECT * FROM login') as $row) {
	print_r($row);
	}
?>