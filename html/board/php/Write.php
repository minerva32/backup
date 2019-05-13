
</htm="http://www.w3.org/1999/html">
<head >
    <meta charset="UTF-8">
    　<title>어린이 탐정단의 수다</title>
    <link rel="stylesheet" href="../../css/bootstrap.css">
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
            width:1300px;
            height:500px;
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

                <form name="Write" action="Update.php" method="post" ectype="multipart/form-data">
                    <table>
                        <tr>
                            <td>TITLE</td>
                            <td><input type="text" name="Title" size="100"></td>
                        </tr>
                        <tr>
                            <td>NAME</td>
                            <td><input type="text" name="Writer" size="100"></td>
                        </tr>
                        <tr>
                            <td>PASSWORD</td>
                            <td><input type="password" name="Password" size="100"></td>
                        </tr>
                        <tr>
                            <td>TEXT</td>
                            <td><textarea cols="103" rows="8" name="Text"></textarea></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                   <input type="file" name="Image" class="btn btn-outline-dark">
                            </td>
                        </tr>
                    </table>
                    <p><p>
                    <INPUT type = 'reset' class="btn btn-outline-info" value="다시 작성">
                    <input type="submit" name='sumit' class="btn btn-outline-info" value="작성">
    </div>
</form>
    　 <div id="footer"><br><p><p>@manager: 괴도키드 @telephone 010-7345-2140 @address 충청남도 논산시 은지면 와야리 274-16 더하임</div>
</center>
<script scr="https://ajax.googlepis.com/ajax/libs/jquery.min.js"></script>cs
<script type="text/javascript" scr="js/bootstrap.js"></script>
</body>
</html>
