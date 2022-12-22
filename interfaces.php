<?php  
	// Antarmuka memungkinkan Anda untuk menentukan metode apa yang harus diterapkan / yang ingin dipakai dikelas.
	// Antarmuka memudahkan untuk menggunakan berbagai kelas yang berbeda dengan cara yang sama.
	interface tulisan {

		public function printText($text) : string;
	}

	class printTulisan1 implements tulisan {
		public function printText($text) : string {
			return $text;
		}	
	}

	class printTulisan2 implements tulisan {
		public function printText($text) : string {
			return $text;
		}	
	}

	class printTulisan3 implements tulisan {
		public function printText($text) : string {
			return $text;
		}	
	}

	$tulisan1 = new printTulisan1();
	for ($i=0; $i < 5; $i++) { 
		echo $tulisan1->printText("Unindra PGRI!");
		echo "<br>";
	}

	$tulisan2 = new printTulisan2();
	for ($i=0; $i < 5; $i++) { 
		echo $tulisan2->printText("Informatics 2022!");
		echo "<br>";
	}

	$tulisan3 = new printTulisan3();
	for ($i=0; $i < 5; $i++) { 
		echo $tulisan3->printText("Condet - Jakarta Timur");
		echo "<br>";
	}
	

?>