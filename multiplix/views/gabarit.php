<?php
/**
 * User: Jeremy.JUNGO
 * Date: 27.02.2020
 * gabarit.php :
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
		<div class="Container">
        	<a href="#"><img src="style/pictures/Logo.png"></a>
			<!--__________CONTENT__________-->
			<div>
				<?=$contenu; //All views will be displayed here?>
			</div>
			<!--________END OF CONTENT________-->
        </div>
    </body>
</html>