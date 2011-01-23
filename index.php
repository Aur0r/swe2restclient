<?php
/**
 * Setting Base Path for includes later on.
 */
//include_once(__DIR__.'/includes/php/util/Util.php');
//Util::setBaseDir(__DIR__);
$BASE_DIR = str_replace('/index.php','',$_SERVER['SCRIPT_FILENAME']);///= Util::getBaseDir();
$exploded_uri = explode('?', $_SERVER['REQUEST_URI']);
$FILE_URL = $exploded_uri[0];
?>

<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="utf-8" />
  <title>swe2RESTclient</title>
  <link href="./css/reset.css" rel="stylesheet" media="screen" type="text/css" />
  <link href="./css/screen.css" rel="stylesheet" media="screen" type="text/css" />
  <link href="./css/jquery.fancybox-1.3.4.css" rel="stylesheet"media="screen" type="text/css" />
  <link href="./css/print.css" rel="stylesheet" media="print" type="text/css" />
  <meta name="./description" content="" />
  <meta name="./keywords" content="" />
  <meta name="./robots" content="index, follow" />
  <script src="./js/html5.js"></script>
  <script>document.documentElement.className += " js";</script>
</head>

<!--[if lt IE 7]><body class="ie7 ie6"><![endif]-->
<!--[if IE 7]><body class="ie7"><![endif]-->
<!--[if gt IE 7]><body><![endif]-->
<!--[if !IE]><!--><body><!-- <![endif]-->
<?php /*============================================================*/ ?>

<div id="content">
<?php 
  switch($_GET['bereich']) {
    case 'profilsuche':
      ?>
      <h1>Artikelsuche</h1>
      <div id="mainmenulink"><a href="<?php print $FILE_URL; ?>">zurück zum Hauptmenü</a></div>
      <?php 
      include_once($BASE_DIR.'/includes/php/profilsuche.php');
      break;
    case 'artikelsuche':
      ?>
      <h1>Profilsuche</h1>
      <div id="mainmenulink"><a href="<?php print $FILE_URL; ?>">zurück zum Hauptmenü</a></div>
      <?php 
      include_once($BASE_DIR.'/includes/php/artikelsuche.php');
      break;
    default:
      include_once($BASE_DIR.'/includes/php/views/MainView.php');
      break;
  }
?>
</div>
<?php /*============================================================*/ ?>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
    <script>
        !window.jQuery && document.write('<script src="./js/jquery-1.4.4.min.js"><\/script>');
    </script>
  <script src="./js/jquery.easing-1.3.pack.js"></script>
  <script src="./js/jquery.mousewheel-3.0.4.pack.js"></script>
  <script src="./js/jquery.fancybox-1.3.4.pack.js"></script>
  <script src="./js/domscript.js"></script>
  <script>jQuery(dom_init);</script>
</body>
</html>