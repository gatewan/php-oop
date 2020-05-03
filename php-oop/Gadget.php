<?php
/**
*gatewan.com
*Wawan Beneran
*OOP PHP - Cara menggunakan class
*/
	class Gadget{
		public $jenis;
		public $merek;
		public $harga;
		public $feature;
		public $tahun_prod;
	/* } <-- [ A ] sintak penutup class yang saya taruh di sini,
			 adalah salah satu yang menyebabkan error dengan notifikasi:
			 Parse error: syntax error, unexpected 'public' (T_Public) in... */
	
	public function __construct($a, $b){
		$this->harga = $a;
		$this->tahun_prod = $b;
		$this->jenis = "Magictronic";
		$this->merek = "Bimsalabim";
		$this->feature = "Melipat gandakan uang";
	}

	public function data_merek() {
		return $this->merek;		
	}
	
	public function data_feature() {
		return $this->feature;
	}

	/*[ B ] public function data_jenis{ <-- sebelumnya, deklarasi fungsi tanpa "()"
											ini juga menyebabkan error dengan notifikasi:
						Parse error: syntax error, unexpected 'public' (T_Public) in... */
						
	public function data_jenis() { //[ B ] <-- yang benar seperti ini.
	return $this->jenis;
	}

} // <-- [ A ] yang benar, sintak penutup class di sini.
	
?>