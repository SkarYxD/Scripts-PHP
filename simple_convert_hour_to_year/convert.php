<?php
	if(ISSET($_POST['convert'])){
		$hour = $_POST['hour'];
		$cal = $hour*3600;
		$toYear = $cal/(365*24*3600);
		$year = round($toYear, 2);
		
		echo "<center><label style='font-size:20px;'>There are <span class='text-primary' style='font-size:27px;'>".$hour."hr</span> in <span class='text-primary' style='font-size:27px;'>".$year." year</span></label></center>";
	}
?>