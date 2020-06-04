<?php

$data = ["Jakarta", "Aceh", "Malang", "Medan", "Bontang", "Jogja", "Jakarta", "Bandung", "Malang", "Solo", "Palembang", "Bandung"];

function findDuplicates($count){
	return $count > 1;
}

$duplicates = array_filter(array_count_values($data), "findDuplicates");

$data_ganda = json_encode($duplicates);
echo "<br>Data yang Ganda : $data_ganda";


$clear_array = array_unique($data);
$data_telah_di_hapus = json_encode($clear_array);
echo "<br>Data yang Ganda Telah di hapus : $data_telah_di_hapus";

?>