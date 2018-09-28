<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Отмазка-запаска aboutProject</title>
    <link rel="stylesheet" type="text/css" href="css/style.css" />
</head>
<body>
	<div class = "div_cont">
	<center>
		<h1><?php echo $title; ?></h1>
		<p class = "p1"><?php echo $txt; ?></p>
	</center>
	</div>  

	<?php $this->render('view/footerMenu.php'); //include 'footerMenu.php';?>
</body></html>