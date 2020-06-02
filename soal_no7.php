<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Soal no 7</title>
</head>
<body>
	<form action="" method="get">
		<tr>
			<td><label for="string">Kalimat</label></td>
			<td><input type="text" name="string" id="string"></td>
		</tr>
		<tr>
			<td><button type="submit" name="submit">Submit</button></td>
		</tr>
	</form>
</body>
</html>
<?php 	

if (isset($_GET["submit"])) {
	$input = $_GET["string"];

// mulai memproses input / kata

$count = strlen($input);

for($i = $count; $i >= 0; $i--){
	$output = substr($input, $i, 1);
	echo $output;
}
}
?>