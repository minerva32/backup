<?php
     $Password=$_POST['Password'];
     $Number=$_GET['number'];
     $db=mysqli_connect('localhost','root','qwer1234','lockey');
     $sql="Select Number,Password from blogs Where Number=$Number";
     $result=mysqli_query($db,$sql);
     $row=mysqli_fetch_array($result);
?>
<html>
  <head>
     <title></title>
  </head>
  <body>
     <center>
          <script> var Password = prompt("패스워드를 입력해주세요.","");
          if (Password == '<?=$row['Password']?>'){
              location.replace("ReWrite.php?number=<?=$row['Number']?>");
          }
          else {
             alert('비밀번호가 틀렸습니다');
             history.go(-1);
          }
         </script>
     </center>  
  </body>
</html> 
