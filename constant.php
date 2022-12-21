<?php  
	class greeting {

		const GREETING = "Hello World!";
		
		function text() {
			echo self::GREETING;
		}
	}

	$greet = new greeting();
	for ($i=0; $i < 10; $i++) { 
		$greet->text();
		echo "<br>";
	};	

?>