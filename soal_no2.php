<?php 

// function CekAngka menampung parameter angka dan menghasilkan output angka genap / ganjil

function CekAngka($angka){
	if($angka % 2 == 0){
		echo "$angka adalah Bilangan Genap";
	}else{
		echo "$angka adalah Bilangan Ganjil";
	}
}


CekAngka(2);


?>
