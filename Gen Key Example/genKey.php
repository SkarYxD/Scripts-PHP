<?php
	$permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
	 
	function generate_string($input, $strength = 6) {
	    $input_length = strlen($input);
	    $random_string = '';
	    for($i = 0; $i < $strength; $i++) {
	        $random_character = $input[mt_rand(0, $input_length - 1)];
	        $random_string .= $random_character;
	    }
	 
	    return $random_string;
	}
	 
	// Output: iNCHNGzByPjhApvn7XBD
	$genStr_R = generate_string($permitted_chars, 6);
	 
	// Output: 70Fmr9mOlGID7OhtTbyj
	$genStr_L = generate_string($permitted_chars, 6);
	 
	echo 'GENERADO 1: '.$genStr_L;
	echo "<br>";
	echo 'GENERADO 2: '.$genStr_R;

?>