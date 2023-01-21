<?php
	// memanggil semua class / file pada folder barang   
	spl_autoload_register(function($class) {
		require_once 'Barang/'. $class .'.php';
	});