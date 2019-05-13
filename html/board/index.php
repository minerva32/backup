<?php
session_start();

echo"<html xmlns='http://www.w3.org/1999/html'>";
echo"<head>";
echo"<meta charset='UTF-8'>";
echo"<title> GRAFFITI BOARD </title>";

	
echo"<meta name='viewport' content='width=device-width, initial-scale=1'>";
echo"<link rel='stylesheet' href='https://www.w3schools.com/w3css/4/w3.css'>";
echo"<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Lato'>";
echo"<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>";
echo"</head>";
echo"<body oncontextmenu='return false' topmargin='0' ondragstart='return false' onselectstart='return false' style='background-image:url('image/background.png');'>";

echo"<!-- Navbar -->";

if(!isset($_SESSION['id']))
{
echo"<div class='w3-top'>";
echo"<a href='regist.php' class='w3-bar-item w3-button w3-padding-large w3-hide-small w3-right'><i class='fa fa-user-plus'></i> 가입</a>";
echo"<a href='login.php' class='w3-bar-item w3-button w3-padding-large w3-hide-small w3-right'><i class='fa fa-sign-in'></i> 로그인</a>";
echo"</div>";

} else {
$uid=$_SESSION['id'];
echo"<div class='w3-top'>";
echo"<a href='#' class='w3-bar-item w3-button w3-padding-large w3-hide-small w3-right'><i class='fa fa-user-plus'></i> 마이페이지</a>";
echo"<a href='#' class='w3-bar-item w3-button w3-padding-large w3-hide-small w3-right'><i class='fa fa-sign-in'></i> 로그아웃</a>";
echo"</div>";
}
?>
<!doctype html>
<html>
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
                                        echo '<div class="user-panel">'; echo '&nbsp&nbsp&nbsp<'; echo'<a href="/gettingready.html">Administrator</a>'; echo '>'; $
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


















	<div class="w3-panel w3-center">
		<div class="w3-bar w3-border ">
				<a href="#" class="w3-bar-item w3-button w3-light-grey"><i class="fa fa-home"></i> 메인</a>
			<div class="w3-dropdown-hover">
			  <a href="#" class="w3-button w3-light-grey"><i class="fa fa-users"></i> 코난토론장 <i class="fa fa-caret-down"></i></a>     
			  <div class="w3-dropdown-content w3-bar-block w3-card-4">
				<a href="./php/List.php" class="w3-bar-item w3-button">자유게시판</a>
			  </div>
			</div>
		  <a href="#" class="w3-bar-item w3-button w3-light-grey"><i class="fa fa-map-o"></i> 오시는 길</a>
		  <a href="#" class="w3-bar-item w3-button w3-light-grey"><i class="fa fa-shopping-bag"></i> 코난 굳즈 판매방</a>
		</div>
	</div>

</body>
        <!--====== Javascripts & Jquery ======-->
        <script src="js2/jquery-3.2.1.min.js"></script>
        <script src="js2/bootstrap.min.js"></script>
        <script src="js2/jquery.slicknav.min.js"></script>
        <script src="js2/owl.carousel.min.js"></script>
        <script src="js2/jquery.sticky-sidebar.min.js"></script>
        <script src="js2/jquery.magnific-popup.min.js"></script>
        <script src="js2/main.js"></script>
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

</html>
