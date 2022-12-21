<?php 
	// kelas induk
	class Hanphone {
		public $merk;
		public $type;

		function __construct($merk, $type) {
			$this->merk = $merk;
			$this->type = $type;
		}

		protected function info() {
			echo "HP brand {$this->merk} mengeluarkan type {$this->type}";
		}
	}

	// kelas anak / turunan
	class Description extends Hanphone {
		// set ulang method construct dari class induk (handphone)
		function __construct($merk, $type, $harga = 0) {
			$this->merk = $merk;
			$this->type = $type;
			$this->harga = $harga;
		}

		protected function info() {
			echo "HP brand {$this->merk} mengeluarkan type {$this->type} dengan harga {$this->harga}";
		}

		function message() {
			$this->info();
		}
	}

	$hp = new Description("Samsung", "A11", 2000000);
	$hp->message();

?>