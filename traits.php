<?php
	// PHP hanya mendukung pewarisan tunggal: kelas anak hanya dapat mewarisi dari satu orangtua tunggal.
	// Ciri-ciri digunakan untuk mendeklarasikan metode yang dapat digunakan di banyak kelas. Ciri-ciri 
	// dapat memiliki metode dan metode abstrak yang dapat digunakan di banyak kelas, dan metode tersebut 
	// dapat memiliki pengubah akses apa pun (publik, pribadi, atau dilindungi).
	trait tulisan1 {
		function kalimatPertama() {
			echo "Selamat Siang";
		}
	}  

	trait tulisan2 {
		function kalimatKedua() {
			echo "Sekarang adalah hari minggu";
		}
	}

	class printText {
		use tulisan1;
		use tulisan2;
	}

	$text = new printText();
	$text->kalimatPertama();
	echo "<br>";
	$text->kalimatKedua();

?>