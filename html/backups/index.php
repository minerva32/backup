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


	<!-- Hero section -->
	<section class="hero-section overflow-hidden">
		<div class="hero-slider owl-carousel">
			<div class="hero-item set-bg d-flex align-items-center justify-content-center text-center" data-setbg="img/slider-bg-1.jpg">
				<div class="container">
					<h2>GRAFFITI</h2>
					<p>GAMBLE LEADING SITE</p>
					<a href="gettingready.html" class="site-btn">GET STARTED  <img src="img/icons/double-arrow.png" alt="#"/></a>
				</div>
			</div>
			<div class="hero-item set-bg d-flex align-items-center justify-content-center text-center" data-setbg="img/slider-bg-2.jpg">
				<div class="container">
					<h2><font color=gray>Follow The Rules!</font></h2>
					<h1> <font color=red>&lt; CAUTION &gt;</font> </h1>
					<p>You are not allowed to hack the game.</p>
					<a href="#" class="site-btn">Contact Us!!  <img src="img/icons/double-arrow.png" alt="contact.php"/></a>
				</div>
			</div>
		</div>
	</section>
	<!-- Hero section end-->


	<!-- Intro section -->
	<section class="intro-section">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<div class="intro-text-box text-box text-white">
						<div class="top-meta">Graffiti in <a href="">Webhacking</a></div>
						<h2>Announcement</h2>
						<p>Announcement</p>
						<a href="blog.html" class="read-more">Details  <img src="img/icons/double-arrow.png" alt="#"/></a>
					</div>
				</div>
				<div class="col-md-4">
					<div class="intro-text-box text-box text-white">
						<div class="top-meta">Vulnerability check date <a href="">Schedule</a></div>
						<h3>Schedules</h3>
						<p>If you checked Vulnerability please visit here.</p>
						<a href="#" class="read-more">Overview  <img src="img/icons/double-arrow.png" alt="#"/></a>
					</div>
				</div>
				<div class="col-md-4">
					<div class="intro-text-box text-box text-white">
						<div class="top-meta">Board for  <a href="">Requestment</a></div>
						<h3>Questions, Requestments</h3>
						<p> if you have any requestments, questions or problems please ask us!</p>
						<a href="#" class="read-more">DETAILS  <img src="img/icons/double-arrow.png" alt="#"/></a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Intro section end -->



	<!-- Intro section -->
	<section class="intro-video-section set-bg d-flex align-items-end" data-setbg="./img/promo-bg.jpg">
		<a href="http://www.youtube.com/watch?v=wwR13Q_ApQY" class="video-play-btn video-popup"><img src="img/icons/solid-right-arrow.png" alt="#"></a>
		<div class="container">
			<div class="video-text">
				<h2>How to play the game</h2>
				<p><font color="yellow">To know how to play graph games please watch the video before playing.</font></p>
			</div>
		</div>
	</section>
	<!-- Intro section end -->


	<!-- Featured section -->
	<section class="featured-section">
		<div class="featured-bg set-bg" data-setbg="img/you.jpg"></div>
		<div class="featured-box">
			<div class="text-box">
				<div class="top-meta">19.03.13 <a href="">GRAFFITI</a></div>
				<h3>당신이 기다리던 사다리게임이 드디어 출시되었습니다!</h3>
				<p>동시간대 접속자수 400명 이상의 그래프게임을 즐겨보세요!!</p>
				<a href="#" class="read-more">Let's play! <img src="img/icons/double-arrow.png" alt="#"/></a>
			</div>
		</div>
	</section>
	<!-- Featured section end-->





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
