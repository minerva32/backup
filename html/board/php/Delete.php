<?php
     $Password=$_POST['Password'];
     $Number=$_GET['number'];
     $db=mysqli_connect('localhost','root','qwer1234','lockey');
     $sql="select Password from blogs where Number='$Number'";
     $result=mysqli_query($db,$sql);
     $row=mysqli_fetch_array($result);
?>
<html>
  <head>
     <title></title>
  </head>
  <body>
     <center>
          <script> var name = prompt("패스워드를 입력해주세요.","");
          if (name =='<?=$row['Password']?>'){
<?php
     $Del="delete from blogs where Number='$Number'";
     $result=mysqli_query($db,$Del);
?>
          alert("정상적으로 삭제되었습니다.");
          history.go(-2); 
          }
          else {
             alert('비밀번호가 틀렸습니다');
             history.go(-1);
          }
         </script>
     </center>  
  </body>
</html> 
