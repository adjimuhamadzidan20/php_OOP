<?php  
	class Handphone1 {
		public $merk;
		public $type;
		private $harga;
		protected $diskon = 0;

		function __construct($merk, $type, $harga) {
			$this->merk = $merk;
			$this->type = $type;
			$this->harga = $harga;
		}

		function getHarga() {
			return $this->harga - ($this->harga * $this->diskon / 100);
		}

		function info() {
			echo "HP brand {$this->merk} mengeluarkan type {$this->type} harga {$this->harga}";
		}
	}

	class Handphone2 extends Handphone1 {
		public $fitur;

		// set ulang method construct dari class induk (handphone)
		function __construct($merk, $type, $harga, $fitur) {
			parent::__construct($merk, $type, $harga);
			$this->fitur = $fitur;
		}

		function setDiskon($diskon) {
			$this->diskon = $diskon;
		}

		function info() {
			echo parent::info() . " dengan fitur {$this->fitur}";
		}
	}

	$hp1 = new Handphone1("Samsung", "A11", 2000000);
	$hp2 = new Handphone2("Xiaomi", "Note12", 3000000, "Camera Canggih"); 
	$hp1->info(); echo "<br>";
	$hp2->info();
	echo "<hr>";

	$hp2->setDiskon(20);
	echo $hp2->type . " diskon 50% menjadi Rp. " . $hp2->getHarga();


?>