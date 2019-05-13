
<?php
session_start();

$servername = "localhost";
$username = "slowwave";
$password = "tndustkfkd12";
$dbname = "graffiti_db";
if ($id=NULL)
echo "<script>window.open('../login.html','_self')</script>";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "SELECT id, score FROM userinfo ORDER BY score DESC";
$result = $conn->query($sql);


?>



	<title> RANKING </title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/graffitiicon.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/snow.css">

<!--===============================================================================================-->

</head>
<body>
        <div id="preloder">
                <div class="loader"></div>
        </div>
        <div class="snow" count="7000"></div>
        <header class="header-section">
                <div class="header-warp">
                        <div class="header-social d-flex justify-content-end">
                                <div class="user-panel"><h10> DEVELOPERS  : </h10></div>
                                <a href="http://www.facebook.com/slowwave25"><i class="fa fa-facebook"></i></a>
                                <a href="http://www.facebook.com/profile.php?id=100006190476260"><i class="fa fa-facebook"></i></a>
                                <a href="http://www.facebook.com/profile.php?id=100004780453119"><i class="fa fa-facebook"></i></a>
                                <a href="http://www.facebook.com/susan.ha.14"><i class="fa fa-facebook"></i></a>

                        </div>
                        <div class="header-bar-warp d-flex">
                                <!-- site logo -->
                                <a href="../index.php" class="site-logo">
                                </a>
                                <nav class="top-nav-area w-100">

                                        <?php if ($_SESSION['loggedin'] == "true") {
                                        echo '<div class="user-panel">'; echo '&nbsp&nbsp&nbsp<'; echo'<a href="../logout.php">Logout</a>'; echo '>'; echo'</div>';
                                        echo '<div class="user-panel">';echo $_SESSION["id"]; echo'님 환영합니다.'; echo'</div>';}
                                        elseif($_SESSION['loggedin'] == "slowwave"){
                                        echo '<div class="user-panel">'; echo '&nbsp&nbsp&nbsp<'; echo'<a href="../logout.php">Logout</a>'; echo '>'; echo'</div>';
                                        echo '<div class="user-panel">'; echo '&nbsp&nbsp&nbsp<'; echo'<a href="../gettingready.html">Administrator</a>'; echo '>'; echo'</div>';
                                        echo '<div class="user-panel">';echo '관리자'; echo'님 환영합니다.'; echo'</div>';}
                                        else {
                                        echo '<div class="user-panel"><a href="../login.html"> Login</a> / <a href="../register.html">Register</a></div>'; }
                                        ?>

                                        <!-- Menu -->
                                        <ul class="main-menu primary-menu">
                                                <li><a href="../index.php">메인</a></li>
                                                <li><a href="../gettingready.html">게임</a>
                                                        <ul class="sub-menu">
                                                                <li><a href="../gettingready.html">홀짝사다리</a></li>
                                                        </ul>
                                                </li>
                                                <li><a href="../gettingready.html">게시판</a>
                                                        <ul class="sub-menu">
                                                         <li><a href="../gettingready.html">게시판</a></li>
                                                         <li><a href="../rank/index.php">랭킹</a></li>
                                                        </ul>
                                                </li>
                                                <li><a href="../gettingready.html">공지사항</a></li>
                                                <li><a href="../contact.php">고객센터</a></li>
                                                <li><a href="../gettingready.html"> 환전센터 </a></li>
                                        </ul>
                                </nav>
                        </div>
                </div>
        </header>

<br>
<br>
<br>
	<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
				<div class="table100 ver3 m-b-110">
					<div class="table100-head">
						<table>
							<thead>
								<tr class="row100 head">
									<th class="cell100 column1">RANKING</th>
									<th class="cell100 column2">ID</th>
									<th class="cell100 column3">SCORE</th>
								</tr>
							</thead>
						</table>
					</div>

					<div class="table100-body js-pscroll">
						<table>
							<tbody>
								<?php $i = 1; ?>
								<?php while($row = $result->fetch_assoc()){ ?>
								<tr class="row100 body">
									<td class="cell100 column1"><?php echo"$i" ?></td>
									<td class="cell100 column2"><?=$row['id'] ?></td>
									<td class="cell100 column3"><?=$row['score'] ?></td>
								</tr>
									
									<?php $i++;  } ?>
								</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>


<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
	<script>
		$('.js-pscroll').each(function(){
			var ps = new PerfectScrollbar(this);

			$(window).on('resize', function(){
				ps.update();
			})
		});
			
		
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>
	<script src="js/snow.js"></script>

</body>
</html>

