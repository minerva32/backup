<?php

      $Number = $_POST['Number'] ;
      $Title=$_POST['Title'] ;
      $Writer = $_POST['Writer'];
      $Date=$_POST['Date'];
      $Look=$_POST['Look'];
      $Text=$_POST['Text'];
      $Password=$_POST['Password'];
      $db=mysqli_connect('localhost','root','qwer1234','lockey');
 
      $sql= "insert into blogs (Number,Title,Writer,Date,Look,Text,Password) values (null,'$Title','$Writer',now(),0,'$Text','$Password')"; 
      $result= mysqli_query($db,$sql);

mysqli_close($db);

echo '<script>alert("정상적으로 등록되었습니다.");</script>';
echo ("<script>location.replace('List.php');</script>");
?>
