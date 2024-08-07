<?php
session_start();


session_unset();
session_destroy();

// Redirige a index
header("Location: index.php");
exit;
?>