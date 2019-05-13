<?php
     $Number=$_GET['number'];
     $Title=$_POST['Title'];
     $Writer=$_POST['Writer'];
     $Text=$_POST['Text'];
//     $Number=$_POST['Number'];`

     $db = mysqli_connect('localhost','root','qwer1234','lockey');
     $sql = "update blogs set Title='$Title',Writer='$Writer',Text='$Text' Where Number='$Number'";

     $result=mysqli_query($db,$sql);
  
     mysqli_close($db);
    
    echo '<script>alert("수정되었습다.");</script>'; 
    echo ("<script>location.replace('List.php');</script>");
?>
