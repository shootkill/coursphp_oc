<!DOCTYPE html>
<html>
<head>
	<title>Ceci est une page de test et il est <?php echo date('h:i:s'); ?></title>
	<meta charset="utf-8" />
	<meta name="description" content="un chiffre aleatoire entre 1 et 10 grâce à php : <?php echo rand(1,10); ?>"/>
</head>
<body>
	<?php echo "Cette ligne a été écrite \"uniquement\" en PHP." ?>
	<?php phpinfo(); ?>
</body>
</html>