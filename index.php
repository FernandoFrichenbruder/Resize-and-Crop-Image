<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Crop and Resize Images</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<!-- <link rel="stylesheet" type="text/css" href="css/main.css"> -->
	<link rel="stylesheet" type="text/css" href="css/demos.css">
	<link rel="stylesheet" href="css/jquery.Jcrop.css" type="text/css" />
	<style type="text/css">
	.crop-area {
		display: none;
	}
	#target {
		background-color: #ccc;
		width: 500px;
		height: 330px;
		font-size: 24px;
		display: block;
	}
	</style>
</head>
<body>
	<div class="container">
		<div class="col-md-6">
			<h3>Faça o upload da imagem</h3>
			<form name="form" action="php/upload.php" enctype="multipart/form-data" method="post" id="upload">
				<input type="file" name="image" class="form-control">
				<input type="submit" class="btn btn-default" value="Upload" name="upload"/>
			</form>
		</div>
		<div class="col-md-6">
			<h3 class="alert"></h3>
		</div>

		<div class="col-md-12 crop-area">
			<h3>Faça a seleção da area para cortar</h3>
			<img src="" id="cropbox" />
			<form action="crop.php" method="post" onsubmit="return checkCoords();">
				<input type="hidden" id="x" name="x" />
				<input type="hidden" id="y" name="y" />
				<input type="hidden" id="w" name="w" />
				<input type="hidden" id="h" name="h" />
				<input type="hidden" id="path" name="path" />
				<input type="submit" value="Crop Image" class="btn btn-large btn-inverse" />
			</form>
		</div>
	</div><!-- /contianer -->


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.Jcrop.js"></script>

<script src="js/crop.scripts.js"></script>
</body>
</html>