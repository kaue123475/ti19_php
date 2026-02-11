<?php
session_name('chuletaaaaa');
session_start();

session_destroy();

$destino =  "../index.php";
header("Location: $destino");
exit;
?>