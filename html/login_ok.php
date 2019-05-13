<?php 
SESSION_START(); 
include("db.php");  
if(isset($_POST['username']) && isset($_POST['pass']))
{  
$user_id=addslashes($_POST['username']);  
$user_pass=md5($_POST['pass']);  
$check_user="select * from userinfo WHERE binary(id)='$user_id' AND binary(pass)='$user_pass'";
$run=mysqli_query($db,$check_user);
$row=mysqli_fetch_array($run);
if($row != NULL)  
{
$_SESSION['id']=strtolower($user_id);
$_SESSION['loggedin']='true';
	if($_SESSION['id'] == 'slowwave')
	{$_SESSION['loggedin']='admin';}
echo "<script>window.open('/index.php','_self')</script>";

}  
else  
{  
echo "<script>alert('계정정보가 올바르지 않습니다. ')</script>";  
echo "<script>window.open('/login.html','_self')</script>";
}  
}  
?>
