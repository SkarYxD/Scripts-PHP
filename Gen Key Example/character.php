<?php
	if(ISSET($_POST['create'])){
		$length = $_POST['length'];
		echo '<center><h3 class="text-secondary">'.GeneratePass($length).'</h3></center>';
	}
	
	function GeneratePass($length) {
		$strings = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!@#$%^&*()_+';
		$stringLength = strlen($strings);
		$random_string = '';
		for ($i = 0; $i < $length; $i++) {
			$random_string .= $strings[mt_rand(0, $stringLength - 1)];
		}
		return $random_string;
	}
	
?>
		
