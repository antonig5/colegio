<?php
session_start();
unset($_SESSION['id']);
$_SESSION = array();
session_destroy();
session_write_close();
header("Location: ../login.php");
