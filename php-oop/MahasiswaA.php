<?php
/*
*gatewan.com
*Wawan Beneran
*Mengenal Enkapsulasi - OOP - PHP
*/
class Mahasiswa{
	public $nim;
	public $nama;
	private $nilai;
	
	public function __construct($nim, $nama, $nilai)
	{
		$this->nim = $nim;
		$this->nama = $nama;
		$this->nilai = $nilai;
	}
	
	public function NamaMhs() //method untuk mengakses properti $nama yang terproteksi
	{
		return $this->nama;
	}

	public function NilaiMhsPrivate() //method untuk mengakses properti $nilai yang terproteksi
	{
		return $this->nilai;
	}

	public function StatusNilai()
	{
		$status = ($this->nilai >= 60)? "Lulus" : "Gagal";
		return $status;
	}

}
?>