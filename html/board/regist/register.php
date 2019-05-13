<?php

 $host = 'localhost';
 $user = 'root';
 $pw = 'qwer1234';
 $dbName = 'lockey';
 $mysqli = new mysqli($host, $user, $pw, $dbName);

 $id=$_POST['ID'];
 $password=$_POST['password'];
 $password2=$_POST['passwordcheck'];
 $gender=$_POST['gender'];
 $birthYear=$_POST['year'];
 $birthMonth=$_POST['month'];
 $birthDay=$_POST['day'];
 $phonefir=$_POST['phone1'];
 $phonemid=$_POST['phone2'];
 $phonelow=$_POST['phone3'];
 $addrh=$_POST['addr1'];
 $addr=$_POST['addr2'];
 $email=$_POST['mail'];
 $bmail=$_POST['bmail'];

$asd = "select * from account where id = '$id'";
$res = $mysqli->query($asd);

if($id==root){
echo "<script>window.alert('Nope');</script>";
echo "<script>location.href='../regist.php';</script>";
exit;
}
else if($id==""){
echo "<script>window.alert('Input your ID');</script>";
echo "<script>location.href='../regist.php';</script>";
exit;
}
else if($res->num_rows >= 1){

echo "<script>window.alert('already user.');</script>";
echo "<script>location.href='../regist.php';</script>";
exit;
}
else if($password==""){
echo "<script>window.alert('Input your password');</script>";
echo "<script>location.href='../regist.php';</script>";
exit;
}
else if($password2==""){
echo "<script>window.alert('Check your password');</script>";
echo "<script>location.href='../regist.php';</script>";
exit;
}
else if($password!=$password2){
echo "<script>window.alert('password is not correct');</script>";
echo "<script>location.href='../regist.php';</script>";
exit;
}
else if($gender!=male && $gender!=female && $gender!=middle){
echo "<script>window.alert('select your gender');</script>";
echo "<script>location.href='../regist.php';</script>";
exit;
}
else if($birthYear=="" || $birthMonth=="" || $birthDay==""){
echo "<script>window.alert('select your birthday');</script>";
echo "<script>location.href='../regist.php';</script>";
exit;
}
else if($phonefir == "" || $phonemid == "" || $phonelow == ""){
echo "<script>window.alert('input your phone number');</script>";
echo "<script>location.href='../regist.php';</script>";
exit;
}
else if($addrh == "" || $addr ==""){
echo "<script>window.alert('input your address');</script>";
echo "<script>location.href='../regist.php';</script>";
exit;
}
else if($email == "" || $bmail == "" ){
echo "<script>window.alert('input your email');</script>";
echo "<script>location.href='../regist.php';</script>";
exit;
}
 
 $sql = "insert into account (id, pwd, gender, birthYear, birthMonth, birthDay, phonemid, addr, email, bmail)";
 $sql = $sql. "values('$id','$password','$gender','$birthYear','$birthMonth','$birthDay','$phonemid','$addr','$email','$bmail')";

 if($mysqli->query($sql)){
echo "<script>window.alert('Success');</script>";
echo "<script>location.href='../Main2.php';</script>";
 }else{
echo "<script>window.alert('Fail');</script>";
echo "<script>location.href='../regist.php';</script>";
 }
?>
