<?php
	// Iterable adalah nilai apa pun yang dapat di-loop melalui foreach()loop.  
	function printProdi(iterable $jurusan) {
		foreach ($jurusan as $item) {
			echo $item;
		}
	}

	$jurusan = ["Informatika ", "Biologi ", "Industri"];
	printProdi($jurusan);

	echo "<br>";

	function getFakultas():iterable {
		return ["FTIK ", "FMIPA ", "FIPPS"];
	}

	$fakultas = getFakultas();
	foreach ($fakultas as $item) {
		echo $item;
	}

?>