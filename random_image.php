<?php
	session_start();
	function create_image()
	{
		$chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
		$size = strlen( $chars );
		$security_code = "";
		for( $i = 0; $i < 6; $i++ ) 
		{
			$security_code .= $chars[ rand( 0, $size - 1 ) ];
		}
		//return $str;

		//$my_string = rand_string(6);
		//echo $my_string;

		//$md5_hash = md5(rand(0,9));
		//$security_code = substr($md5_hash, 20, 6);
		$_SESSION["security_code"] = $security_code;
		$width = 75;
		$height = 25;
		$image = ImageCreate($width, $height);
		$white = ImageColorAllocate($image, 255, 255, 255);
		$black = ImageColorAllocate($image, 158, 203, 59);
		ImageFill($image, 0, 0, $black);
		ImageString($image, 5, 10, 5, $security_code, $white);
		header("Content-Type: image/jpeg");
		ImageJpeg($image);
		ImageDestroy($image);
	}
	create_image() ;
	
?>