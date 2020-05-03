<?php

	include "Mahasiswa.php";
	
	$nim = 111111;
	$datanya = new Mahasiswa($nim);
	
	echo "<h1>Mahasiswa</h1>";
	echo "Nama : " .$datanya->data_nama();
	echo "<br />";
	echo "NIM : " .$nim;
	echo "<br />";
	echo "Jurusan : " .$datanya->data_jurusan();
	echo "<br />";
	echo "Matakuliah Favorit : " .$datanya->data_matkul();

?>