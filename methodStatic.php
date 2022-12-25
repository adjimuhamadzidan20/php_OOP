<?php 
	// Metode statis dapat dipanggil secara langsung - tanpa membuat instance kelas terlebih dahulu.
	// metode statis dapat public atau protected 
	class salam {
		protected static function menyapa() {
			echo "Good Afternoon - Selamat Siang - Sunday";
		}
	}

	class printInfo extends salam {
		public $tulisan;

		public function __construct() {
			$this->tulisan = parent::menyapa();
		}
	}

	$text = new printInfo();
	echo $text->tulisan;

?>