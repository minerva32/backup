<?php 
session_start();
include ("db.php");
$question=$_POST['question'];
$id=$_SESSION['id'];	
	if($_SESSION['loggedin'] == 'admin')
	{echo"<script>alert('관리자는 문의를 할 수 없습니다.')</script>";
	echo "<script>window.open('/contact.php','_self')</script>";}

	elseif($_SESSION['loggedin']!='true'){
	echo"<script>alert('로그인후에 이용해 주세요!')</script>";
	echo"<script>window.open('/contact.php','_self')</script>";
	}
else{
$sql ="insert into userq (question, id)";
$sql = $sql. "values('$question','$id' )";
}
if(mysqli_query($db, $sql)){
echo "<script>alert('문의가 접수되었습니다.')</script>";
echo "<script>window.open('/contact.php', '_self')</script>";
}
else{
 echo '문의접수에 실패하였습니다. 다시 시도해주세요.';
 }
?>
