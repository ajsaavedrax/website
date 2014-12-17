<?php

if ( !empty($_GET) ) {

	$firstname = $_GET['first_name'];
	$lastname = $_GET['last_name'];
	$error = "<ul>";
	$error_flag = '';

	if ( empty($firstname) ) {
		$error .= "<li>Please enter your first name</li>";
		$error_flag = TRUE;
	}
	if ( empty($lastname) ) {
		$error .= "<li>Please enter your last name</li>";
		$error_flag = TRUE;
	}
	if ($error_flag) $error .= "</ul>";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="UTF-8">
	<title>Tony Tony Tony</title>
	<link rel="stylesheet" href="styles.css">
	<link href='http://fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>

</head>

<body>

	<h1> So... you want to know all about Tony?</h1>

	<div class="hello-form">
		<?php 
			if ( isset($error_flag) ) {
				echo '<div class="errors">' . $error . '</div>';
			}
			if ( !empty($_GET) && empty($error_flag) ) {
				echo 'Welcome ' . $firstname . '!';
			} else {
		?>

		<form action="" method="GET">
			<p>Enter your name:</p>
			<input type="text" name="first_name">
			<input type="text" name="last_name">
			<input type="submit" name="submit" value="Click this bitch">
		</form>

		<?php } ?>
	</div>

	<img src="images/SAM_0060.jpg" class="center">

</body>
</html>

