<?php  
	// Properti statis dapat membuat dan dipanggil secara langsung - tanpa membuat instance kelas atau property fungsi.

	// class Kampus {
	// 	public static $namaKampus = "Unindra";
	// }

	// echo Kampus::$namaKampus;

	// class Kampus {
	// 	public static $namaKampus = "Universitas Indraprasta PGRI";
	// 	function cetakTulisan() {
	// 		return self::$namaKampus;
	// 	}
	// }

	// $text = new Kampus();
	// echo $text->cetakTulisan();

	class Kampus {
		public static $namaKampus = "Universitas Indraprasta PGRI";
	}

	class Info extends Kampus {
		function cetakTulisan() {
			return parent::$namaKampus;
		}
	}

	echo Info::$namaKampus;
	echo "<br>";

	$text = new Info();
	echo $text->cetakTulisan();


?>