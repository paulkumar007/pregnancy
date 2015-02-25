<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Image-1</title>
<link href="css/global.css" rel="stylesheet" type="text/css" />
<link href="css/print.css" rel="stylesheet" type="text/css" />
<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
<link href="css/responsive.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="js/main.js"></script>
</head>
<body>
<div id="wrapper">
  <div id="container">
    <div class="container">
      	<div class="about-baby">
				<img style="display:block;width:500px;" id="dataImage" src="" />
            </div>
      	</div>
     </div>
	<div id="footer_buttons" style="bottom: -152px; margin-bottom: 19%; position: fixed; width: 100%;">
      <div style="float:left;"><button onclick="takePhoto();" style="height:30px;">Take a Photo</button></div>
      <div style="float:right;"><button onclick="getPhoto(pictureSource.PHOTOLIBRARY);" style="height:30px;">Get Photo</button></div>
      <div class="clear"></div>
  </div>
<?php include('footer.php'); ?>
</div>
</body>
</html>
