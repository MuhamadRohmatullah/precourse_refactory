<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>soal_no4</title>
</head>
<body>
	<form action="" method="get">
		<tr>
			<label for="kata">Kata :</label>
			<input type="text" name="kalimat" id="kata">
		</tr>
		<tr>
			<td><button type="submit" name="submit">Submit</button></td>
		</tr>
	</form>
</body>
</html>
<?php 

if (isset($_GET["submit"])) {
	$input = $_GET['kalimat'];

	if($input == strrev($input)){
		echo $input;
	}else{
		echo $input." bukan palindrom";
	}	
	}

?>