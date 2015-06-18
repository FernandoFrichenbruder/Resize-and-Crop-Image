<?php
if (isset($_POST["upload"])) { 
	require_once('resize.php');
	$max_file_size = 21000000; // 20MB
	$valid_exts = array('jpeg', 'jpg', 'png', 'gif');
	// thumbnail sizes
	$w = 980;

	if ($_SERVER['REQUEST_METHOD'] == 'POST' AND isset($_FILES['image'])) {
	  if( $_FILES['image']['size'] < $max_file_size  ){
	    // pega a extensão
	    $ext = strtolower(pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION));
	    if (in_array($ext, $valid_exts)) {
	      /* da o resize nela */
	        $files = resize($w);

	    } else {
	      $msg = 'Unsupported file';
	    }
	  } else{
	    $msg = 'Please upload image smaller than 200KB';
	  }
	}
} else {
	echo "erro";
}
?>