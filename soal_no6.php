<?php 

function faktorial($n){
	if($n > 2){
		return $n * faktorial($n - 1);
	}else{
		return $n;
	}
}

$hasil = faktorial(5);
echo $hasil;
?>