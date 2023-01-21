<?php
	// require_once 'Barang/informasi.php';
	// require_once 'Barang/barang.php';
	// require_once 'Barang/Handphone.php';
	// require_once 'Barang/cetakInfo.php';
	// require_once 'Barang/User.php';

	// require_once 'Service/User.php';

	// memanggil semua class / file pada folder barang   
	spl_autoload_register(function($class) {
		$class = explode('\\', $class);
		$class = end($class);

		require_once 'Barang/'. $class .'.php';
	});

	spl_autoload_register(function($class) {
		$class = explode('\\', $class);
		$class = end($class);
		
		require_once 'Service/'. $class .'.php';
	});

	