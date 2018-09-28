<!DOCTYPE html>
<html><head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <title>Отмазка-запаска topTEN</title>
</head>
<body>
	<div class = "div_cont">
		<center>
		     <h1><?php echo $title; ?></h1>
		</center>
		<?php
		foreach ($all as $key => $value) {
			?>
			    <p> <a class = "top" href = "?action=copout&id=<?php echo $key ?>">
			    	<b><?php echo $key; ?></b> <?php echo $value; ?></a>
			    </p>
			<?php
		}
		?>
	</div>  
	<?php $this->render('view/footerMenu.php'); //include 'footerMenu.php';?>
</body></html>