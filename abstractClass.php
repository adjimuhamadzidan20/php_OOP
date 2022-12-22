<?php 
	// Kelas dan metode abstrak adalah ketika kelas induk memiliki metode bernama, 
	// tetapi membutuhkan / mengambil metode dari kelas anaknya untuk mengisi / menjalankan tugas.
	abstract class great {
		public $text;

		public function __construct($text) {
			$this->text = $text;
		}

		abstract function printText() : string;
	}

	class printGreeting extends great {
		function printText() : string {
			return $this->text;
		}	
	}

	$tulisan = new printGreeting("Unindra PGRI Informatika");
	for ($i=0; $i < 15; $i++) { 
		echo $tulisan->printText();
		echo "<br>";
	}

?>