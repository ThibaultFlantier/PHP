<?php include('include/infopage.php');?>
<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

	<title><?php echo('$PAGE_TITLE') ?></title>


</head>
<body>
	<header>
<?php include('include/header.php');?>
		</header>
<div class="container">
			
<h1>BIENVENUE SUR LE MEILLEUR SITE PHP DU MONDE</h1>
<?php echo $PAGE_TITLE; ?> 
		<p>Voici un module qui vous donnera l'heure</p>

<?php include ('include/boucles.php');?>

	</div>
	<?php include('include/footer.php');?>
</body>
</html>