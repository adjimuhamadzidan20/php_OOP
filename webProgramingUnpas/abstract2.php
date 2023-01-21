<?php  
	abstract class barang {
		private $merk;
		private $type;
		private $harga;
		private $diskon = 0;

		function __construct($merk = "merk", $type = "type", $harga = 0) {
			$this->merk = $merk;
			$this->type = $type;
			$this->harga = $harga;
		}

		function setDiskon($diskon) {
			$this->diskon = $diskon;
		}
		function setHarga($harga) {
			$this->harga = $harga;
		}
		function setMerk($brand) {
			$this->merk = $brand;
		}
		function setType($type) {
			$this->type = $type;
		}

		function getMerk() {
			return $this->merk;
		}
		function getType() {
			return $this->type;
		}
		function getHarga() {
			return $this->harga - ($this->harga * $this->diskon / 100);
		}

		abstract function getInfo(); // interfaces method

		function printInfo() {
			echo "HP brand {$this->merk} mengeluarkan type {$this->type} harga {$this->harga}";
		}

	}	

	class Handphone extends barang {
		private $fitur;

		// set ulang method construct dari class induk (handphone)
		function __construct($merk = "merk", $type = "type", $harga = 0, $fitur = "fitur") {
			parent::__construct($merk, $type, $harga);
			$this->fitur = $fitur;
		}

		function getInfo() {
			echo $this->printInfo() . " dengan fitur {$this->fitur}";
		}
	}

	class cetakInfo {
		public $daftar = array();

		function tambahBarang($barang) {
			$this->daftar[] = $barang;
		}

		function infoBarang() {
			echo "List Handphone : <br>";

			foreach ($this->daftar as $b) {
				echo "{$b->printInfo()} <br>";
			}

		}
	}

	$barang1 = new Handphone("Xiaomi", "Note12", 3000000, "Camera Canggih"); 
	$barang2 = new Handphone("Sony", "Xperia Z4", 4000000, "Tahan Air");
	$barang3 = new Handphone("Samsung", "A11", 2000000, "Tahan Air");

	// $barang1->setDiskon(50);	
	// $barang2->setDiskon(70);

	$cetakbarang = new cetakInfo();
	$cetakbarang->tambahBarang($barang1);
	$cetakbarang->tambahBarang($barang2);
	$cetakbarang->tambahBarang($barang3);
	echo $cetakbarang->infoBarang();


?>