<?php  
	namespace Html;
	
	class tabel {
		public $judul = "";
		public $jmlBaris = 0;

		public function pesan() {
			echo "<p><Tabel {$this->judul} memiliki jumlah baris {$this->jmlBaris}</p>";
		}
	}	

	$tabel = new tabel();
	$tabel->judul = "Daftar Mahasiswa";
	$tabel->jmlBaris = 20;

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Namespaces</title>
</head>
<body>
	<?php  
		echo $tabel->pesan();
	?>
</body>
</html>