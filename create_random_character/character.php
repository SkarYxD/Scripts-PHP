<?php
	if(ISSET($_POST['create'])){
		$length = $_POST['length'];
		echo '<center><h3 class="text-primary">'.GenerateChar($length).'</h3></center>';
	}
	
	function GenerateChar($length) {
		$strings = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!@#$%^&*()_+';
		$stringLength = strlen($strings);
		$newStrings = '';
		for ($i = 0; $i < $length; $i++) {
			$newStrings .= $strings[rand(0, $stringLength - 1)];
		}
		return $newStrings;
	}
	
?>
		
