<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>soal no1 Try Out MDD</title>
</head>
<body>
	<form action="" method="get">
		<label for="angka">Angka :</label>
		<input type="number" name="angka" id="angka"><br>
		<button type="submit" name="submit">Submit</button>
	</form>
</body>
</html>
<?php

// validasi / pengecekan angka yang telah di kirimkan ke variabel angka

if (isset($_GET["submit"])) {
	
	$angka = $_GET["angka"];

	if ($angka == 90) {
		echo '<h1><b>A</b></h1>';
	}else if($angka < 90 && $angka >= 80){
		echo '<h1><b>B</b></h1>';
	}else if($angka < 80 && $angka >= 70){
		echo '<h1><b>C</b></h1>';
	}else if($angka < 70 && $angka >= 60){
		echo '<h1><b>D</b></h1>';
	}else if($angka < 59){
		echo '<h1><b>E</b></h1>';
	}else{
		echo '<h1><b>Tidak ada angka yang di masukan</b></h1>';
	}
}

?>