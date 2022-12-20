<?php  
	class kendaraan {
		public $merk, $type, $warna, $tahun;

		// Konstruktor memungkinkan menginisialisasi properti 
		// objek setelah objek dibuat.
		public function __construct($merk = "merk", $type = "type", $warna = "warna", $tahun = "tahun") {
			$this->merk = $merk;
			$this->type = $type;
			$this->warna = $warna;
			$this->tahun = $tahun;
		}

		public function get_data() {
			return "$this->merk, $this->type, $this->warna, $this->tahun";
		}
	}

	class infoKendaraan {
		public function printInfo(Kendaraan $mobil) {
			$data = "Nama Merk : {$mobil->merk} Jenis Type : {$mobil->type} Warna : {$mobil->warna} Tahun : {$mobil->tahun}";	
			return $data;
		}
	}

	$mobil1 = new kendaraan("Nissan","Skyline R34","Hitam","1999");
	$mobil2 = new kendaraan("Honda","Civic TypeR","Biru","1997");
	$mobil3 = new kendaraan("Toyota","Supra MK4","Biru","2000");

	echo "Daftar Kendaraan Sport :";
	echo "<br>";
	// echo $mobil1->get_data();
	// echo "<br>";
	// echo $mobil2->get_data();
	// echo "<br>";
	// echo $mobil3->get_data();
	$infoKendaraan = new infoKendaraan();
	echo $infoKendaraan->printInfo($mobil1);
	echo "<br>";
	echo $infoKendaraan->printInfo($mobil2);

?>