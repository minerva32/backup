<?php
session_start();
?>
<!DOCTYPE html>
<html lang="zxx">
<head>

	<title>GRAFFITI</title>
	<meta charset="UTF-8">
	<meta name="description" content="EndGam Gaming Magazine Template">
	<meta name="keywords" content="endGam,gGaming, magazine, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->
	<link href="img/graffitiicon.png" rel="shortcut icon"/>

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500,500i,700,700i,900,900i" rel="stylesheet">


	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/slicknav.min.css"/>
	<link rel="stylesheet" href="css/owl.carousel.min.css"/>
	<link rel="stylesheet" href="css/magnific-popup.css"/>
	<link rel="stylesheet" href="css/animate.css"/>

	<!-- Main Stylesheets -->
	<link rel="stylesheet" href="css/style.css"/>


	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>


	<!--Header section -->
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
				<a href="index.php" class="site-logo">
				</a>
				<nav class="top-nav-area w-100">
				
					<?php if ($_SESSION['loggedin'] == "true") {
					echo '<div class="user-panel">'; echo '&nbsp&nbsp&nbsp<'; echo'<a href="logout.php">Logout</a>'; echo '>'; echo'</div>';
					echo '<div class="user-panel">';echo $_SESSION["id"]; echo'님 환영합니다.'; echo'</div>';}
					elseif($_SESSION['loggedin'] == "slowwave" || $_SESSION['loggedin'] == "sooosy0324"){
					echo '<div class="user-panel">'; echo '&nbsp&nbsp&nbsp<'; echo'<a href="logout.php">Logout</a>'; echo '>'; echo'</div>';
					echo '<div class="user-panel">'; echo '&nbsp&nbsp&nbsp<'; echo'<a href="/gettingready.html">Administrator</a>'; echo '>'; echo'</div>';
					echo '<div class="user-panel">';echo '관리자'; echo'님 환영합니다.'; echo'</div>';}
					else {
					echo '<div class="user-panel"><a href="login.html"> Login</a> / <a href="register.html">Register</a></div>'; }
					?>	
				
					<!-- Menu -->
					<ul class="main-menu primary-menu">
						<li><a href="index.php">메인</a></li>
						<li><a href="gettingready.html">게임</a>
							<ul class="sub-menu">
								<li><a href="gettingready.html">홀짝사다리</a></li>
							</ul>
						</li>
						<li><a href="/board/index.php">게시판</a>
							<ul class="sub-menu">
							 <li><a href="/board/index.php">게시판</a></li>
                                                         <li><a href="./rank/index.php">랭킹</a></li>
							</ul>
						</li>
						<li><a href="gettingready.html">공지사항</a></li>
						<li><a href="contact.php">고객센터</a></li>
						<li><a href="gettingready.html"> 환전센터 </a></li>
					</ul>
				</nav>
			</div>
		</div>
	</header>
	<!-- Header section end -->






	<!--====== Javascripts & Jquery ======-->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.slicknav.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.sticky-sidebar.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/main.js"></script>

	</body>
</html>
