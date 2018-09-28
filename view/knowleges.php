<!DOCTYPE html>
<html><head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <title>Knowleges</title>
</head>
<body>
	<div class = "div_cont">
		<?php
		foreach ($knowleges as $id => $value) {
			?>
			    <p> <a class = "top" href = "?page=know&id=<?php echo $id ?>">
			    	<b><?php echo $include; ?></b> <?php echo $value; ?></a>
			    </p>
			<?php
		}
		?>
	</div>  
	<?php $this->render('view/footerMenu.php'); //include 'footerMenu.php';?>
</body></html>