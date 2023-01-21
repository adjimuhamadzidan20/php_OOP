<?php 
	abstract class barang {
		protected $merk;
		protected $type;
		protected $harga;
		protected $diskon = 0;

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

		abstract public function printInfo();

	}	