<?php
/**
 * User: Jeremy.JUNGO
 * Date: 27.02.2020
 * layout.php : it's the default layout for the web app
 */
?>
<!DOCTYPE HTML>
<html>
	<head>
        <meta charset="utf-8">
		<title><?=$titre;?></title>
		<link href="style/multiplix.css" rel="stylesheet">
    </head>
    <body>
		<div class="container">
        	<a href="index.php?action=goHome"><img src="style/pictures/Logo.png" class="logo"></a>
			<!--__________CONTENT__________-->
			<div>
				<?=$content; //All views will be displayed here?>
			</div>
			<!--________END OF CONTENT________-->
        </div>
    </body>
</html>