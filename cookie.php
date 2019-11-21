<!-- OUR PHP CODE -->
<?php 
	$fond = "#FFF";
	$text = "#000";
	if ( $_SERVER['REQUEST_METHOD'] == 'POST' ) // CHECK IF "POST"_SUBMIT
		{
			$fond = $_POST['fond'];
			$text = $_POST['text'];
			setcookie("fond",$_POST['fond'],time()+3600,"/");
			setcookie("text",$_POST['text'],time()+3600,"/");
		}elseif( isset($_COOKIE['fond']) AND isset($_COOKIE['text']) ) // CHECK IF COOKIE_EXIST
			{
				$fond = $_COOKIE['fond'];
				$text = $_COOKIE['text'];
			}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>COOKIES TEST</title>
</head>

<!-- OUR BODY -->
<body style="background-color:<?php echo $fond; ?>;color:<?php echo $text; ?>">
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
		fond : <input type="color" name="fond"><br>
		text : <input type="color" name="text"><br>
		<input type="submit" value="Choose">
		<h3>Preview</h3>
		<p>
			Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
		</p>
	</form>
</body>
</html>
