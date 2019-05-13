<CTYPE html>
<!doctype>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../../css/bootstrap.css">
    　<title>GRAFFITTI</title>
    <style type="text/css">
        #header{
            width:1300px;
            height:100px;
            float:start;
        }
        #menu{
            width:1300px;
            height:40px;
            float:top;
        }
        #main {
            width:1000px;
            height:500px;
            float:bottom;
        }
        #menu ul{margin:0 ;padding: 0; }
        #menu li{display:inline;}
        #footer{
            width:1300px;
            height:60px;
            clear:both;
        }
        　　</style>
    　</head>
<body style="background-image:url('kid.png');" >
<center>
    　 <div id="header" style="background-image:url('../image/header.png');" ></div>

    　     <div id="menu">
    <ul>
        <li><a href="../index.php">home</a></li>
        <li><a href="#">공지방</a></li>
        <li><a href="#">자유게시판</a></li>
    </ul>
</div>
    　     <center id="main">
    <h1><font color="#f08080"> 이 곳은 추리게시판 입니다.</font></h1>
    <h4><font color="#f08080">자, 이제 명탐정 코난이 되어 봅시다.</font></h4><br>
    <table class="table table-hover">

        <tread>
            <tr>
                <th>번호</th>
                <th>제목</th>
                <th>작성자</th>
                <th>날짜</th>
                <th>조회수</th>
            </tr>
        </tread>
        <tbody>
<?php 
   $db = mysqli_connect('localhost','slowwave','tndustkfkd12','graffiti_db') or die("db");
   $sql = "select * from board" or die("sql");
   $result = mysqli_query($db,$sql) or die("result");

   while( $row = mysqli_fetch_array($result))
   {
?>
       
                 <tr>
                     <td><?=$row[0]?></td>
                     <td><a href="Read.php?number=<?=$row['Number']?>"><?=$row[1]?></a></td>
                     <td class="text-right"><?=$row[2]?></td>
                     <td><?=$row[3]?></td>
                     <td><?=$row[4]?></td>
                 </tr>
<?php
   }
   mysqli_close($db);
?>
       
    </table>
    <hr/>
    <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-end">
            <li class="page-item disabled">
                <a class="page-link" href="#" tabindex="-1">Previous</a>
            </li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
                <a class="page-link" href="#">Next</a>
            </li>
        </ul>
    </nav>

    <script scr="https://ajax.googlepis.com/ajax/libs/jquery.min.js"></script>
    <script type="text/javascript" scr="js/bootstrap.js"></script>
    <a href="Write.php"  input type="button" class="btn btn-outline-info">글쓰기</a>
</center>
</body>
</html>
