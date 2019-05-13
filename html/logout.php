<?php
session_start();
session_destroy();
session_unset();
unset ($_SESSION['loggedin']);
echo "<script>window.open('./index.php','_self')</script>";
?>
