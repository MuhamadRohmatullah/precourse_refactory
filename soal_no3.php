<?php 

$deret = [2, 3, 4, 6, 9, 8];

// mencari nilai maksimum
// menggunakakn methode max() array pada php
echo "<br>Nilai Maksimum : ".max($deret);

// menggunakan methode min() array pada php
echo "<br>Nilai Minimum : ".min($deret);

// rata - rata
// menggunakan looping for
$result = 0;
for($i = 0; $i < count($deret); $i++){
	$result += $deret[$i];
	$hasil = $result/count($deret);
}
// output di bulatkan ke atas dengan methode ceil();
echo "<br>Rata - rata : ".ceil($hasil);
?>