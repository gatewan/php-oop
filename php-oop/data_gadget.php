<?php
/**
*gatewan.com
*Wawan Beneran
*OOP PHP - Cara menggunakan class
*/
	include "Gadget.php";
	
	$tahun= 2013;
	$harga= 17777777;
	//$dataku = Gadget(); -- Sebelumnya, penyebab error, karena tidak ada instance dan parameter.
	$dataku = new Gadget($harga, $tahun); //-- Sesudahnya, fix.
	
	echo "<h1>Jenis Gadget</h1>";
	echo "Jenis : " . $dataku->data_jenis();
	echo "<br />";
	echo "Merek : " . $dataku->data_merek();
	echo "<br />";
	echo "Feature : " . $dataku->data_feature();
	echo "<br />";
	echo "Harga : " . $harga;
	echo "<br />";
	echo "Tahun : " . $tahun;

?>