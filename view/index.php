<!DOCTYPE html>
<html><head>
    <meta charset="UTF-8">
    <title>Отмазка-запаска</title>
    <link rel="stylesheet" type="text/css" href="css/style.css" />
</head>
<body>
	<div class = "div_cont">
		<div style = "width:65%; float:left; margin-left: 100px;">
		<h1 id= "h1_title">
			<b><?php echo $title; ?></b>
		</h1>
		
		<p class = "p1 merg-b40" ><?php echo $description; ?></p>
			<span class = "button_generate">
				<a class= "yellow_link" href = "?page=copout"><?php echo $buttonTitle; ?></a>
			</span>
		</div>
		<div style = " float:right; margin-right: 50px;">
			<img style = "float:right" src="images/face.png">
		</div>
	</div>  

	<?php $this->render('view/footerMenu.php'); //include 'footerMenu.php';?>
</body></html>