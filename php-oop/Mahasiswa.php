<?php

/* SOAL
Buat sebuah class mahasiswa dengan construct nim
properti lain terdiri dari :
- nama
- jurusan
- matakuliah favorit

panggil class untuk menampilkan biodata
*/

	class Mahasiswa{
		public $nama;
		public $nim;
		public $jurusan;
		public $matkul_favorit;
	
	public function __construct($a){
		$this->nama = "Mr. Bean";
		$this->nim = $a;
		$this->jurusan = "Teknik Pantomim";
		$this->matkul_favorit = "Lip Synch";
	}
	
	public function data_nama(){
		return $this->nama;		
	}
	
	public function data_jurusan(){
		return $this->jurusan;		
	}

	public function data_matkul(){
		return $this->matkul_favorit;		
	}	
	
	}
?>