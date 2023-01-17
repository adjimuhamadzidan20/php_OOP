<?php
	// overriding : melakukan overwrite / menimpa method baru dari class parent
	  
	class Handphone1 {
		public $merk;
		public $type;

		function __construct($merk, $type) {
			$this->merk = $merk;
			$this->type = $type;
		}

		function info() {
			echo "HP brand {$this->merk} mengeluarkan type {$this->type}";
		}
	}

	class Handphone2 extends Handphone1 {
		public $fitur;

		// set ulang method construct dari class induk (handphone)
		function __construct($merk, $type, $fitur) {
			parent::__construct($merk, $type);
			$this->fitur = $fitur;
		}

		function info() {
			echo parent::info() . " dengan fitur {$this->fitur}";
		}
	}

	$hp1 = new Handphone1("Samsung", "A11");
	$hp2 = new Handphone2("Xiaomi", "Note12", "Camera Canggih"); 
	$hp1->info(); echo "<br>";
	$hp2->info();

?>