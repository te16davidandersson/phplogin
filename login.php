<?php
session_start();
if(isset($_POST['submit'])) { // kollar om post[submit] har ett värde

	$loginCredentials = ["username" => "David", "password" => "pw"];

	if(isset($_POST['username']) && isset($_POST['password'])) {
		$username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_STRING);
		$password = md5($_POST['password']);

		echo $password;
		if($username == $loginCredentials['username'] && $password == md5($loginCredentials['password'])) {
			echo "<h1>Du är egentligen inte välkommen här, men jag kan göra ett undantag</h1>";
		} elseif ($username != $loginCredentials['username'] || $password != $loginCredentials['password']) {
			echo "<h1>Fel uppgifter</h1>";
		}
	}


	// echo "<pre>" . var_dump($_POST,1) . "</pre>";

} else {
	echo "<h1>Jaha</h1>";
}
?>