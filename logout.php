<?php
session_start();
if (!isset($_SESSION['loginid']) && isset($_SESSION['username'])) {
	session_destroy();
	header('Location: index.php');
  } else {
   unset($_SESSION['loginid']);
   unset($_SESSION['username']);
   session_destroy();
   header('Location: index.php');
}
?>
