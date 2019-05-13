<?php
    $db=mysqli_connect('localhost','root','qwer1234','lockey');
    $Number = $_GET['number'];
    $sql="select Number,Title,Writer,Date,Look,Text,Image from blogs Where Number='$Number'";
    $result= mysqli_query($db,$sql);
 ?>
<!doctype html>
<html xmlns="http://www.w3.org/1999/html">
<head >
    <meta charset="UTF-8">
    　<title>어린이 탐정단의 수다</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <style type="text/css">
        #header{
            width:1300px;
            height:100px;
            float:header;
        }
        #menu{
            width:1300px;
            height:40px;
            float:menu;
        }
        #main {
            width:1050px;
            height:600px;
            float:main;
        }
        #menu ul{margin:0 ;padding: 0; }
        #menu li{display:inline;}
        #footer{
            width:1300px;
            height:100px;
            clear:both;
        }
        　　</style>
    　</head>
<body style="background-image:url('five.png');">
<center>
    　 <div id="header" style="background-image:url('../image/header.png');" ></div>
    　     <div id="menu">
    <ul>
        <li><a href="dpgp.html">home&nbsp;</a></li>
        <li><a href="staff.html">공지방&nbsp;</a></li>
        <li><a href="free.html">자유게시판&nbsp;</a></li>
        <li><a href="konan.html">오시는 길&nbsp;</a><li>
        <li><a href="goods.html">코난 굳즈 판매방&nbsp;</a></li>
    </ul>
</div>
    <div id="main">
        <center>
            <h1><font color="#f08080">이 곳은 추리게시판 입니다</font></h1>
            <h4><font color="#f08080">자, 이제 명탐정 코난이 되어 봅시다</font></h4><br>
        <form name="ReWirte" action= "ReWriteUpdate.php?number=<?=$Number?>" method="POST">
            <table class="table table-bordered" width="800">
                <tr>
<?php
     $row=mysqli_fetch_array($result);
         
?>
                    <td>TITLE</td>
                    <td><input type="text" name='Title' size="100" value="<?=$row[Title]?>"></td>
                </tr>
                <tr>
                    <td>WRITER</td>
                    <td><input type="text" name="Writer" size="100" value="<?=$row['Writer']?>"></td>
                </tr>
                <tr>
                    <td>TEXT</td>
                    <td><textarea cols="103" rows="8" name="Text"><?=$row['Text']?></textarea></td>
               </tr>
            </table>
<?php 
     mysqli_close($db);
?>
            <a href="List.php"> <INPUT type="button" class="btn btn-outline-info" value="목록으로"></a>
            <INPUT type="submit" class="btn btn-outline-info" value="수정">
       </form>
       </div>
    　 <div id="footer"></div>
</center>
<script><scr="https://ajax.googlepis.com/ajax/libs/jquery.min.js"></script>
<script type="text/javascript" scr="js/bootstrap.js"></script>
</body>
</html>
