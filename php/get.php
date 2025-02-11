<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<div style="margin-left: 300px;">
		<h1>
		<?php
		if (isset($_GET['age']))
		echo "asaki aris:".$_GET['age'];
		echo "<br>";
		if (isset($_GET['name']))
		echo "name aris: ".$_GET['name'];
		echo "<br>";
		if (isset($_GET['gpa']))
		echo "gpa aris:".$_GET['gpa'];
		echo "<br>";

		// echo "<pre>";
		// print_r($_GET);
		// echo "</pre>";
	?>
	</h1>
	<h2>End Of Site</h2>
	</div>
</body>
</html>