<?php  
	class barang {
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
		function getHarga() {
			return $this->harga - ($this->harga * $this->diskon / 100);
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

		function info() {
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

		function info() {
			echo parent::info() . " dengan fitur {$this->fitur}";
		}
	}

	$barang1 = new Handphone("Xiaomi", "Note12", 3000000, "Camera Canggih"); 
	$barang1->info();

	echo "<br>";
	
	$barang2 = new Handphone("Sony", "Xperia Z4", 4000000, "Tahan Air");
	$barang2->info();

	echo "<hr>";

	$barang1->setDiskon(50);
	echo $barang1->getMerk() . " diskon 50% menjadi Rp. " . $barang1->getHarga();
	echo "<br>";

	$barang2->setDiskon(70);
	echo $barang2->getMerk() . " diskon 70% menjadi Rp. " . $barang2->getHarga();
	echo "<br>";


?>