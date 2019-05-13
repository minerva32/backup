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

	<!-- Header section -->
	<header class="header-section">
		<div class="header-warp">
			<div class="header-social d-flex justify-content-end">
				<p>Follow us:</p>
				<a href="http://www.facebook.com/slowwave25"><i class="fa fa-facebook"></i></a>
                                <a href="http://www.facebook.com/profile.php?id=100006190476260"><i class="fa fa-facebook"></i></a>
                                <a href="http://www.facebook.com/profile.php?id=100004780453119"><i class="fa fa-facebook"></i></a>
                                <a href="http://www.facebook.com/profile.php?id=susan.ha.14"><i class="fa fa-facebook"></i></a>


			</div>
			<div class="header-bar-warp d-flex">
				<!-- site logo -->
				<a href="index.php" class="site-logo">
				</a>
				<nav class="top-nav-area w-100">
					
					<?php if($_SESSION['loggedin'] == "true"){
					echo '<div class="user-panel">'; echo'&nbsp&nbsp&nbsp<'; echo'<a href="logout.php">Logout</a>'; echo'>'; echo'</div>';
                                        echo '<div class="user-panel">'; echo $_SESSION['id']; echo'님 환영합니다.'; echo '</div>';}
                                        elseif($_SESSION['loggedin'] == "admin"){
                                        echo '<div class="user-panel">'; echo '&nbsp&nbsp&nbsp<'; echo'<a href="logout.php">Logout</a>'; echo '>'; echo'</div>';
                                        echo '<div class="user-panel">'; echo '&nbsp&nbsp&nbsp<'; echo'<a href="/admin_ok.php">Administrator</a>'; echo '>'; echo'</div>';
                                        echo '<div class="user-panel">';echo '관리자'; echo'님 환영합니다.'; echo'</div>';}

					else{
					echo '<div class="user-panel"><a href="./login.html">Login</a> / <a href="register.html">Register</a></div>';}?>
					<!-- Menu -->
					<ul class="main-menu primary-menu">
						<li><a href="index.php">메인</a></li>
						<li><a href="gettingready.html">게임</a>
							<ul class="sub-menu">
								<li><a href="gettingready.html">홀짝사다리게임</a></li>
							</ul>
						</li>
						<li><a href="gettingready.html">게시판</a>
							<ul class="sub-menu">
								<li><a href="gettingready.html">게시판</a></li>
							
								<li><a href="./rank/index.php">랭킹</a></li>
							</ul>
						</li>
						<li><a href="gettingready.html">공지사항</a></li>
						<li><a href="contact.html">고객센터</a>
                                                        <ul class="sub-menu">
                                                                <li><a href="gettingready.html">고객문의</a></li>
							</ul>
						</li>
						<li><a href="gettingready.html">환전센터</a></li>
					</ul>
				</nav>
			</div>
		</div>
	</header>
	<!-- Header section end -->


	<!-- Page top section -->
	<section class="page-top-section set-bg" data-setbg="img/page-top-bg/4.jpg">
		<div class="page-info">
			<h2>Contact</h2>
			<div class="site-breadcrumb">
				<a href="index.php">Main</a>  /
				<span>Contact</span>
			</div>
		</div>
	</section>
	<!-- Page top end-->


	<!-- Contact page -->
	<section class="contact-page">
		<div class="container">
			<div class="map"><iframe src="https://maps.google.com/maps?q=%EA%B1%B4%EC%96%91%EB%8C%80%ED%95%99%EA%B5%90%20%EC%9D%98%EA%B3%B5%ED%95%99%EA%B4%80&t=&z=13&ie=UTF8&iwloc=&output=embed" style="border:0" allowfullscreen></iframe></div>
			<div class="row">
				<div class="col-lg-5 order-1 order-lg-2 contact-text text-white">
					<h3>HELLO WE ARE TEAM No.8 </h3>
					<p>We are the officially approved graph site from Republic of Korea. If you have any problem with the law related to gambling, PLEASE CONTACT US. </p>
					<div class="cont-info">
						<div class="ci-icon"><img src="img/icons/location.png" alt=""></div>
						<div class="ci-text">충청남도 논산시 대학로 121 의공학관 305호</div>
					</div>
					<div class="cont-info">
						<div class="ci-icon"><img src="img/icons/phone.png" alt=""></div>
						<div class="ci-text">+82 010-4075-6604</div>
					</div>
					<div class="cont-info">
						<div class="ci-icon"><img src="img/icons/mail.png" alt=""></div>
						<div class="ci-text">wjsdlftls25@gmail.com</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Contact page end-->
	<!-- Footer section end -->
	<section class="newsletter-section">
		<div class="container">
			<h2>문의를 작성하여 전송해주세요!</h2>
			<form class="newsletter-form" method="POST" action="Q.php">
				<input type="text" name="question" placeholder="문의를 작성해주세요">
				<button class="site-btn">전송 <img src="img/icons/double-arrow.png" alt="#"/></button>
			</form>
		</div>
	</section>
	                        <div class="copyright"><a href="slowwave.html">Slowwave</a></div>


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
