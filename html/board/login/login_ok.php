<?php
session_start(); // ����
include ("config.php"); // DB����

$id = $_POST['id']; // ���̵� 
$pwd = $_POST['pwd']; // �н�����
   
$query = "select * from account where id='$id' and pwd='$pwd'";
$result = mysqli_query($con, $query); 
$row = mysqli_fetch_array($result);

if($id==$row['id'] && $pwd==$row['pwd']){ // id�� pw�� �´ٸ� login
   $_SESSION['id']=$row['id'];
   echo "<script>location.href='../Main2.php';</script>";
}else{ // id �Ǵ� pw�� �ٸ��ٸ� login ������
   echo "<script>window.alert('invalid username or password');</script>"; // �߸��� ���̵� �Ǵ� �����ȣ �Դϴ�
   echo "<script>location.href='../login.php';</script>";
}
?>