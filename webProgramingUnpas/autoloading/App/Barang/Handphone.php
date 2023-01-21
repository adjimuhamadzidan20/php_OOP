<?php
	class Handphone extends barang implements informasi {
		private $fitur;

		// set ulang method construct dari class induk (handphone)
		function __construct($merk = "merk", $type = "type", $harga = 0, $fitur = "fitur") {
			parent::__construct($merk, $type, $harga);
			$this->fitur = $fitur;
		}

		function printInfo() {
			echo "HP brand {$this->merk} mengeluarkan type {$this->type} harga {$this->harga}";
		}

		function getInfo() {
			echo $this->printInfo() . " dengan fitur {$this->fitur}";
		}
	}