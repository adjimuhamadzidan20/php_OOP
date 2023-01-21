<?php
	require_once 'App/init.php';

	$barang1 = new Handphone("Xiaomi", "Note12", 3000000, "Camera Canggih"); 
	$barang2 = new Handphone("Sony", "Xperia Z4", 4000000, "Tahan Air");
	$barang3 = new Handphone("Samsung", "A11", 2000000, "Tahan Air");

	// $barang1->setDiskon(50);	
	// $barang2->setDiskon(70);

	$cetakbarang = new cetakInfo();
	$cetakbarang->tambahBarang($barang1);
	$cetakbarang->tambahBarang($barang2);
	$cetakbarang->tambahBarang($barang3);
	echo $cetakbarang->infoBarang();