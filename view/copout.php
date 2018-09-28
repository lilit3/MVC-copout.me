<!DOCTYPE html>
    <meta charset="UTF-8">
    <title>Отмазка-запаска copout</title>
    <link rel="stylesheet" type="text/css" href="css/style.css" />
</head>
<body>
	<div class = "div_cont">
		<center>
		    <h3 class = "uppercase"><?php echo $copout; ?></h3>
			<span class = "button_generate" >
				<a class= "yellow_link" href = "/copout">Cгенерировать отмазку</a>
			</span>
		</center>
	</div>  

	<?php $this->render('view/footerMenu.php'); //include 'footerMenu.php';?>  
</body></html>