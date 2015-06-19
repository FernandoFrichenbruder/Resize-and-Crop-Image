<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
	if(isset($_POST['path'])){
		$path = $_POST['path'];
		$targ_w = 613;
		$targ_h = 325;
		$jpeg_quality = 100;

		$src = $path;
		$img_r = imagecreatefromjpeg($src);
		$dst_r = ImageCreateTrueColor( $targ_w, $targ_h );

		imagecopyresampled($dst_r,$img_r,0,0,$_POST['x'],$_POST['y'],
		$targ_w,$targ_h,$_POST['w'],$_POST['h']);

		header('Content-type: image/jpeg');
		imagejpeg($dst_r,null,$jpeg_quality);

		exit;
	} else {
		echo 'erro';
	}
}
?>