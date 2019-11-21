
<!-- OUR PHP CODE -->
<?php 

	$fond = "#FFF";
	$text = "#000";

	if ( $_SERVER['REQUEST_METHOD'] == "POST" ) { // CHECK IF "POST"_SUBMIT
		$fond = $_POST['fond'];
		$text = $_POST['text'];
		setcookie("fond",$fond,time()+3600,"/");
		setcookie("text",$text,time()+3600,"/");
	}

	if (isset($_COOKIE['fond'])) { // CHECK IF COOKIE_EXIST
		$fond = $_COOKIE['fond'];
	}
	if (isset($_COOKIE['text'])) { // CHECK IF COOKIE_EXIST
		$text = $_COOKIE['text'];
	}

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>COOKIES</title>
</head>

<!-- OUR BODY -->
<body style="background-color:<?php echo $fond; ?>;color:<?php echo $text; ?>">
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
		Couleur De Text : <input type="color" name="text"><br>
		Couleur De Fond : <input type="color" name="fond"><br>
		Envoyer <input type="submit" value="Send">
		<div style="border: 1PX solid #000;padding: 3px;margin: 5px">
			<h3>Preview</h3>
			<p>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			</p>
		</div>
	</form>
</body>
</html>