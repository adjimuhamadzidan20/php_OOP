<?php  
	class contohStatic {
		public static $text = "adji";

		public static function salam() {
			return "selamat pagi " . self::$text;
		} 
	}

	// echo contohStatic::$text;
	// echo "<br>";
	echo contohStatic::salam();

	echo "<br>";

	class mahasiswa {
		public static $no = 1;

		public function printInfo() {
			return "mahasiswa ". self::$no++ . "<br>";
		}
	}

	$mhs = new mahasiswa;
	echo $mhs->printInfo();
	echo $mhs->printInfo();
	echo $mhs->printInfo();
	echo $mhs->printInfo();

	echo "<br>";

	$mhs2 = new mahasiswa;
	echo $mhs2->printInfo();
	echo $mhs2->printInfo();
	echo $mhs2->printInfo();
	echo $mhs2->printInfo();

?>