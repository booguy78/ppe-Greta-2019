<?php
session_start();
$_SESSION = array();
session_destroy();
header("Location: index.php");


var_dump($_GET);
