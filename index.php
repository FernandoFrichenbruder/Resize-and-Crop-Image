<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Crop and Resize Images</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<h3>Faça o upload da imagem</h3>
		<form name="form" action="php/upload.php" enctype="multipart/form-data" method="post">
			<input type="hidden" name="MAX_FILE_SIZE" value="300000" />
			<input type="file" name="image" class="form-control">
			<input type="submit" class="btn btn-default" value="Upload" name="upload"/>
		</form>
	</div><!-- /contianer -->


 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>

<script src="js/crop.scripts.js"></script>
</body>
</html>