<?php  
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