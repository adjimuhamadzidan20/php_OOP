<?php  
	class buah {
		public $namaBuah;
		private $warna;
		protected $harga;

		private function setWarna($e) {
			$this->warna = $e;
		}

		protected function setHarga($e) {
			$this->harga = $e;
		}
	}	

	$buah = new buah();
	echo $buah->namaBuah = 'apel'; // OK
	echo $buah->setWarna('merah'); // not OK (error)
	echo $buah->setHarga('10000'); // not OK (error)

?>