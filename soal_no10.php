<?php 
$data = '[
	{"id":1, "name": "udin", "age":12},
	{"id":2, "name": "reane", "age":51},
	{"id":3, "name": "Budi", "age":34},
	{"id":4, "name": "Agus", "age":16},
	{"id":5, "name": "Sari", "age":19},
	{"id":6, "name": "Ririn", "age":20},
	{"id":7, "name": "Dessy", "age":23}
]';

$arr = json_decode($data);
echo "<b>Nama Orang Yang berumur kurang dari 21 :</b>";
foreach($arr as $key => $el){
	$umur = $el->age;
	if($umur < 21){
		echo "<br>Nama : ".$el->name;
		echo ", umur : ".$el->age;
	}
}

?>