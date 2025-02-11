<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Lecture 1</title>
</head>
<body>
	<h1>Lecture 1</h1>
	
	<?php	
	$full_info = [
		'name' => "john",
		'age' => 23,
		'city' => "new York",
		'country' => "United States",
		'education' => ['unit', "unit2", "unit3"]
	];


	foreach ($full_info as $index1 => $data) {
		echo "<h1> $index1 </h1>";
		echo "<div>";
		print_r ($data);
		echo "<div>";
	}


	echo "<hr><hr>";
		echo "hello, world!";
		$name = 25;
		$age = 18;
		$gpa = 3.7;
		echo "<div> my name is $name and i am $age years old. my GPA = $gpa</div>";
		$info = ["sandro", 18, 3.7, true, "computer science"];
		echo "<div> my name is $info[0] and i am $info[1]</div>";
		echo "<hr>";
		for ($i = 0; $i < count($info); $i++) {
			echo "<h2> . $info[$i]  </h2>";
		}

		echo "<hr>";
		foreach ($info as $value) {
		echo "<h2> $value </h2>";
		}

		echo "<hr>";
		$i=0;
		while ($i < count($info)){
		echo "<h2> $value </h2>";
		$i++;
		}
	?>
	<h2>End Of Site</h2>
</body>
</html>