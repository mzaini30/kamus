<?php 
$db = new PDO('sqlite:data.db');
header('Content-Type: application/json');
$routes = explode('/', $_SERVER['PATH_INFO']);
if ($routes[1] == 'cek'){
	// cek/:kata
	$respons = $db->query('select * from kamus where inggris like "%' . $routes[2] . '%" order by inggris');
	$hasil = [];
	while($row = $respons->fetch()){
		$hasil[] = [
			'indonesia' => $row['indonesia'],
			'inggris' => $row['inggris']
		];
	}
	echo json_encode($hasil);
} elseif ($routes[1] == 'tambah') {
	// tambah
	$db->query('insert into kamus (inggris, indonesia) values ("' . $_POST['inggris'] . '", "' . $_POST['indonesia'] . '")');
}