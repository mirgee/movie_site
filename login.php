<?php
session_unset();
?>
<html>
<head>
<title>Please Log In</title>
</head>
<body>
<?php include 'header.php'; ?>
<form method="post" action="moviel.php">
<p>Enter your username:
	<input type="text" name="user"/>
</p>
<p>Enter your password
	<input type="password" name="pass"/>
</p>
<p>
<input type="submit" name="submit" value="Submit"/>
</p>
</form>
<?php include 'footnote.php'; ?>
</body>
</html>
