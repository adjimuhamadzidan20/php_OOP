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

		public function get_data() {
			return "$this->merk, $this->type, $this->warna, $this->tahun";
		}
	}

	$mobil1 = new kendaraan("Nissan","Skyline R34","Hitam","1999");
	$mobil2 = new kendaraan("Honda","Civic TypeR","Biru","1997");
	echo $mobil1->get_data();
	echo "<br>";
	echo $mobil2->get_data();

?>