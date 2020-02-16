<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8"><head>
	<title>Project</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<form method="post" action="php/project1.php">
		<p>Input the figthers "a", "b", "g"</p> <input type="text" name="input_data_oponents" placeholder="a,b,g,">
		<p>Master(Healt(1-20), Atack(6-10), Resistance(1-5))</p> <input type="text" name="input_data" placeholder="15,6,3,">
		<input type="submit" name="">
	</form>

</body>
</html>


<?php 
include('includes/footer.php');
 ?>