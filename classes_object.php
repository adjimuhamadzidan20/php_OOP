<?php  
	class dataPribadi {
		// properti 
		public $namaLengkap;
		public $alamat;
		public $umur;
		public $email;

		// methods
		// meng set var properti 
		function set_name($namaLengkap) {
			$this->namaLengkap = $namaLengkap;
		}

		function set_alamat($alamat) {
			$this->alamat = $alamat;
		}

		function set_umur($umur) {
			$this->umur = $umur;
		}

		function set_email($email) {
			$this->email = $email;
		}

		// mengambil data dari var properti
		function get_name() {
			return $this->namaLengkap;
		}

		function get_alamat() {
			return $this->alamat;
		}

		function get_umur() {
			return $this->umur;
		}

		function get_email() {
			return $this->email;
		}
	}

	$nama = new dataPribadi();
	$alamat = new dataPribadi();
	$umur = new dataPribadi();
	$email = new dataPribadi();

	$nama->set_name('Adji Muhamad Zidan');
	$alamat->set_alamat('Kota Bekasi');
	$umur->set_umur('22');
	$email->set_email('adjimuhamadzidan@gmail.com');

	echo $nama->get_name() ."<br>". $alamat->get_alamat() ."<br>". $umur->get_umur() ."<br>". $email->get_email() ."<br>";

	var_dump($nama instanceof data); // mengecek kepemilikan objek dari class tertentu
	
?>