<?php
session_start();
session_destroy();

unset($_SESSION['lo']);
header('location:index.php');
exit();

?>