<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>cek tahun kabisat</title>
</head>
<body>
	<form action="" method="get">
		<tr>
			<td><label for="tahun1">Tahun Awal :</label></td>
			<td><input type="number" name="tahun1" id="tahun1"></td>
		</tr>
		<tr>
			<td><label for="tahun2">Tahun Akhir</label></td>
			<td><input type="number" name="tahun2" id="tahun2"></td>
		</tr>
		<tr>
			<td><button type="submit" name="submit">Submit</button></td>
		</tr>
	</form>
</body>
</html>
<?php 

if (isset($_GET["submit"])) {
	$tahun1 = $_GET['tahun1'];
	$tahun2 = $_GET['tahun2'];

	for($tahun = $tahun1; $tahun <= $tahun2; $tahun++ ){
		if ($tahun %  4 == 0) {
			if($tahun % 100 == 0){
				if($tahun % 400 == 0){
					echo "$tahun Tahun kabisat";
				}
			}
		}else{
			echo "$tahun bukan tahun kabisat";
		}	
}
}



?>