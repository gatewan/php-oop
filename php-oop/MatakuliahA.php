<?php
/*
*gatewan.com
*Wawan Beneran
*Mengenal Inheritance - Enkapsulasi - OOP - PHP
*/
include "MahasiswaA.php";
class MataKuliah extends Mahasiswa{
	public $matakuliah;
	public $dosen;
	public $status;
	
	public function Matkul($matkul, $dosen){
		$this->matakuliah = $matkul;
		$this->dosen = $dosen;		
	}
	
	// Mengambil properti dari class turunan
	public function NilaiMhs(){
		return $this->nilai;	
	}
	
	public function Grade()
	{
		
		if ($this->nilai >= 70){
			$grade = "A";
		} elseif ($this->nilai >= 60){
			$grade = "B";
		} elseif ($this->nilai >= 50){
			$grade = "C";
		} elseif ($this->nilai >= 40){
			$grade = "D";
		} else{
			$grade = "E";
		}
		return $grade;
		
	}
	
	public function StatusNilaiMhs()
	{
		$this->status = $this->StatusNilai();
		$this->status;
	}
}
?>