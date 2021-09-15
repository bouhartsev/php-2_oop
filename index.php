<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP example</title>
	<style>
		body {
			text-align: center;
		}
		pre {
			margin: auto;
			text-align: left;
			background-color: whitesmoke;
			width: 70%;
			min-width: 500px;
			overflow-x: scroll;
		}
	</style>
</head>
<body>
	<h1>Object-oriented programming</h1>
	<h2>Encapsulation in PHP</h2>
	<pre>
		<?php 
			echo highlight_string(file_get_contents("./program.php"));
		?>
	</pre>
	<b>Вывод:</b>
	<?php
		echo '<pre>';
		require "./program.php";
		echo '</pre>';
	?>
</body>
</html>