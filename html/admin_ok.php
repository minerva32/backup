<?php
session_start();
if($_SESSION['loggedin']=='admin')
{
 echo "<script>window.open('/nalika/index.php','_self')</script>";
}
else
{
echo "<script>window.open('/index.php','_self')</script>";
}
?>
