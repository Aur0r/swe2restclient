<?php
/**
 * Setting Base Path for includes later on.
 */
include_once(__DIR__.'/includes/php/util/Util.php');
Util::setBaseDir(__DIR__);
$BASE_DIR = Util::getBaseDir();
$exploded_uri = explode('?', $_SERVER['REQUEST_URI']);
$FILE_URL = $exploded_uri[0];
?>

<html>
	<head>
	</head>
	<body>
<?php /*============================================================*/ ?>

<?php 

switch($_GET['bereich']) {
	case 'profilsuche':
		?>
		<div id="mainmenulink"><a href="<?php print $FILE_URL; ?>">Zum Hauptmenü</a></div>
		<?php 
		include_once($BASE_DIR.'/includes/php/profilsuche.php');
		break;
	case 'artikelsuche':
		?>
		<div id="mainmenulink"><a href="<?php print $FILE_URL; ?>">Zum Hauptmenü</a></div>
		<?php 
		include_once($BASE_DIR.'/includes/php/artikelsuche.php');
		break;
	default:
		include_once($BASE_DIR.'/includes/php/views/MainView.php');
		break;
}

?>

<?php /*============================================================*/ ?>
	</body>
</html>