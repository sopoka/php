<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">


		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>


		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
			<title>
			<?php 
				if (isset($_GET['page']))
				{

					echo 'ტექჰაბი - '.$_GET['page'];
				}
				else 
				{
					echo 'ტექჰაბი - მთავარი';
				}
 			?>

			</title> 
		<link rel="stylesheet" href="style.css" media="all" />

	</head>
<body>

<?php


require './vendor/autoload.php';


use app\Database;
use app\Menu;
use app\Header;
use app\Footer;

$db= new Database;
$db->connect();


$header= new Header;
$header->setHeader();


$menu= new Menu;
$menu->drowMenu();


$footer= new Footer;
$footer->setFooter();	
?>



	</body>
</html>