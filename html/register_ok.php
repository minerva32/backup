<?php
 include ("db.php"); 
 $id=$_POST['id'];
 $password=md5($_POST['password']);
 $password2=$_POST['passwordRepeat'];
 $name=$_POST['username'];
 $sex=$_POST['rdoSex'];
 $phone=$_POST['phone'];
 $age=$_POST['age'];
 $sqll = "SELECT * FROM userinfo WHERE id = '{$id}'";
 $ress = $db->query($sqll);
    if($ress->num_rows >= 1){
        echo "<script>alert('이미 존재하는 아이디가 있습니다.')</script>";
	echo "<script>window.open('/register.html','_self')</script>";
        exit;
    }

 $sql = "insert into userinfo (id, pass, name, sex, phone, age)";
 $sql = $sql. "values('$id','$password','$name','$sex','$phone','$age')";
 if(mysqli_query($db, $sql)){
  echo 'success inserting'; 
  echo "<script>window.open('/login.html','_self')</script>";
}else{
  echo 'fail to insert sql';
 }
?>
