<?php
	header("Content-Type: image/png");
	require "vendor/autoload.php";
	
	use Endroid\QrCode\QrCode;
	
	$qrCode = new QrCode($_GET['code']);
	echo $qrCode->writeString();
?>