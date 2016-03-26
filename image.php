<?php 
if ($_GET['url'])
{
	$showfile = $_GET['url'];
	$width = isset($_GET['w']) ? (int)$_GET['w'] : 0;
	$height = isset($_GET['h']) ? (int)$_GET['h'] : 0;
	
	if(getimagesize($showfile) == false)
		$showfile = 'themes/images/empty.jpg';
	
	create_thumb($showfile,$width,$height);
}
function create_thumb($image_url, $width, $height,$zoom_crop='1'){
// GET ORIGINAL IMAGE DIMENSIONS
$array = getimagesize($image_url);
$mime = $array['mime'];
$new_width = $width;
$new_height = $height;
if($width == 0)
	$new_width = $array[0];
if($height == 0)
	$new_height = $array[1];
	
 if ($new_width && !$new_height) {
        $new_height = floor ($height * ($new_width / $width));
    } else if ($new_height && !$new_width) {
        $new_width = floor ($width * ($new_height / $height));
    }
$origin_x = 0;
$origin_y = 0;
if ($array)
{
    list($image_w, $image_h) = $array;
}
$width=$image_w;
$height=$image_h;
// ACQUIRE THE ORIGINAL IMAGE
$array = explode('.', $image_url);
$image_ext = $array[count($array)-1];
switch(strtoupper($image_ext))
{
     case 'JPG' :
     case 'JPEG' :
         $image = imagecreatefromjpeg($image_url);
		 $func='imagejpeg';
         break;
     case 'PNG' :
         $image = imagecreatefrompng($image_url);
		 $func='imagepng';
         break;
	 case 'GIF' :
	 	 $image = imagecreatefromgif($image_url);
		 $func='imagegif';
		 break;
     default : die("UNKNOWN IMAGE TYPE: $image_url");
}
// scale down and add borders
	if ($zoom_crop == 3) {
		$final_height = $height * ($new_width / $width);
		if ($final_height > $new_height) {
			$new_width = $width * ($new_height / $height);
		} else {
			$new_height = $final_height;
		}
	}
	// create a new true color image
	$canvas = imagecreatetruecolor ($new_width, $new_height);
	imagealphablending ($canvas, false);
	// Create a new transparent color for image
	$color = imagecolorallocatealpha ($canvas, 255, 255, 255, 127);
	// Completely fill the background of the new image with allocated color.
	imagefill ($canvas, 0, 0, $color);
	// scale down and add borders
	if ($zoom_crop == 2) {
		$final_height = $height * ($new_width / $width);	
		if ($final_height > $new_height) {
			$origin_x = $new_width / 2;
			$new_width = $width * ($new_height / $height);
			$origin_x = round ($origin_x - ($new_width / 2));
		} else {
			$origin_y = $new_height / 2;			
			$new_height = $final_height;
			$origin_y = round ($origin_y - ($new_height / 2));
		}
	}
	// Restore transparency blending
	imagesavealpha ($canvas, true);
	if ($zoom_crop > 0) {
		$src_x = $src_y = 0;		
		$src_w = $width;
		$src_h = $height;
		$cmp_x = $width / $new_width;
		$cmp_y = $height / $new_height;
		// calculate x or y coordinate and width or height of source
		if ($cmp_x > $cmp_y) {
			$src_w = round ($width / $cmp_x * $cmp_y);
			$src_x = round (($width - ($width / $cmp_x * $cmp_y)) / 2);
		} else if ($cmp_y > $cmp_x) {
			$src_h = round ($height / $cmp_y * $cmp_x);
			$src_y = round (($height - ($height / $cmp_y * $cmp_x)) / 2);
		}
		imagecopyresampled ($canvas, $image, $origin_x, $origin_y, $src_x, $src_y, $new_width, $new_height, $src_w, $src_h);
    } else {
        // copy and resize part of an image with resampling
        imagecopyresampled ($canvas, $image, 0, 0, 0, 0, $new_width, $new_height, $width, $height);
    }    
	header("content-type: $mime");
	$func($canvas,null,100);
}
?>