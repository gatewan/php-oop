<?php
/*
*gatewan.com
*Wawan Beneran
*Mengenal Output - Inheritance - Enkapsulasi - OOP - PHP
*/
	include "MatakuliahA.php";

	$datanya = new MataKuliah(54321, "Mr.Bean", 88);
	
	//echo "<h1>Matukuliahnya</h1>";
	echo "NIM : " .$datanya->nim;
	echo "<br />";
	echo "Nama : " .$datanya->nama;
	echo "<br />";
	
	$datanya->Matkul("Pemrograman Web Dinamis", "Wahyu Widodo");
	echo "Matakuliah : " .$datanya->matakuliah;
	echo "<br />";
	echo "Dosen : " .$datanya->dosen;
	echo "<br />";
  //echo "Nilai : " .$datanya->NilaiMhs();  <--- Sebelum
	echo "Nilai : " .$datanya->NilaiMhsPrivate(); // <-- Sesudah
	echo "<br />";
  //echo "Grade : " .$datanya->Grade(); <--- Disable Output Grade
	echo "<br />";
	echo "Status : " .$datanya->StatusNilai();
	echo "<br />";

?>