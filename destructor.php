<?php  
	class kendaraan {
		public $merk, $type, $warna, $tahun;

		// Konstruktor memungkinkan menginisialisasi properti 
		// objek setelah objek dibuat.
		public function __construct($merk, $type, $warna, $tahun) {
			$this->merk = $merk;
			$this->type = $type;
			$this->warna = $warna;
			$this->tahun = $tahun;
		}

		public function __destruct() {
			echo "Merk {$this->merk} type {$this->type} warna {$this->warna} tahun {$this->tahun}";
		}
	}

	$mobil1 = new kendaraan("Nissan","Skyline R34","Hitam","1999");

?>