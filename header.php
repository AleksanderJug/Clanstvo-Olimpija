<?php
error_reporting(-1); // we don't want to see errors on screen
// Start a session
session_start();

require_once(dirname(__FILE__) . '/include/db_connect.inc.php');
require_once(dirname(__FILE__) . '/include/functions.inc.php');

//require_once ("/include/db_connect.inc.php"); // include the database connection
//require_once ("/include/functions.inc.php"); // include all the functions
$seed="0dAfghRqSTgx"; // the seed for the passwords
$domain =  "rugby-olimpija.si/clani"; // the domain name without http://www.
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Complete Member Login / System tutorial - <?php echo $domain; ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<body>
