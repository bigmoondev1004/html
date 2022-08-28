<?php
  session_start();
?>
<!DOCTYPE html>
<html>

<head>
  <title>광성고등학교</title>
  <meta charset="UTF-8">
  <meta author="Lee Ki Joon & Son jung Min">
  <meta Description="This is a KwangSung HighSchool Website Script">
  <meta name="viewport" content="width-device-width, initial-scale = 1.0">
  <meta http-equiv="X-UA-Compatible" content="ie = edge">
  <!--Font-->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@500&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Jua&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Do+Hyeon&display=swap" rel="stylesheet">
  <!--Favicon-->
  <link rel=icon href="images/favicon.png">
  <!--StyleSheet-->
  <link rel="stylesheet" type="text/css" href="CSS/style.css">
  <!--JavaScript-->
  <script type="text/javascript" src="JS/main.js" defer></script>
  <script type="text/javascript" src="JS/slide.js"></script>
  <script src="https://kit.fontawesome.com/d46260fedf.js" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.6.1.min.js"
    integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
  <script type="text/javascript" src="JS/weather.js"></script>

</head>

<body>
  <nav class="navbar">
    <div class="navbar__logo">
      <a href="index.php">
        <img src="images/kwangsung_logo.png" alt="광성고등학교 로고" height="60" width="230">
      </a>
    </div>

    <ul class="navbar__menu">
      <li><i class="fas fa-info-circle"></i><a href="#">학교 소개</a></li>
      <li><i class="fas fa-newspaper"></i><a href="#">소식</a></li>
      <li><i class="fas fa-box"></i><a href="#">자료란</a></li>
      <li><i class="fas fa-user"></i><a href="#">동아리 소개</a></li>
    </ul>

    <?php
      if(isset($_SESSION["userid"])) {
        echo '<li class="nr_li dd_main">';
        echo '<button class="btn"></button>';
        echo '<div class="dd_menu">';
        echo '<div class="dd_left">';
        echo '</div>';
        echo '<div class="dd_right">';
        echo '<span style=" padding-top: 10px; padding-left: 20px; font-size: 20px;">' . $_SESSION['userid'] .  '</span>';
        echo '<br>';
        echo '<br>';
        echo '<hr width="220px;>';
        echo '<a href="#"><button class="dd_mypage"><i class="fa fa-user" style="font-size:20px;color:black; padding-right:5px; "></i>마이페이지</button></a>';
        echo '<br>';
        echo '<a href="#"><button class="dd_mypage"><i class="fas fa-map-marker" style="font-size:20px;color:black; padding-right:5px;"></i>북마크</button></a>';
        echo '<br>';
        echo '<a href="#"><button class="dd_mypage"><i class="fas fa-file" style="font-size:20px;color:black; padding-right:5px;"></i>작성글</button></a>';
        echo '<br>';
        echo '<a href="../includes/logout.inc.php"><button class="dd_logout"><i class="fas fa-sign-out-alt" style="font-size:20px;color:black; padding-right:5px; text-align:center;"></i>로그아웃</button></a>';
        echo '</div>';
        echo '</div>';
        echo '</li>';
      }
      else {
        echo '<ul class = "navbar__icons">';
        echo '<div class="popup" id="popup-1">';
        echo '<div class="overlay"></div>';
        echo '<div class="content">';
        echo '<div class="close-btn" onclick="togglePopup()">&times;</div>';
        echo '<h1 class = "popup-h1-title">로그인</h1>';
        echo '<hr>';
        echo '<br>';
        echo '<form action="includes/login.inc.php" method = "POST" >';
        echo '<label for="ID" class="popup-h1">아이디</label>';
        echo ' <input type="text"  name="login-id" placeholder="아이디" onkeypress="return block1(event)">';
        echo '<label for="Password" class="popup-h1">비밀번호</label>';
        echo '<input type="password"  class = "loginPlaceHolder" name="login-password" placeholder="비밀번호">';
        echo '<a class = "popup-find-id-pw" href="#">ID/PW 찾기</a>';
        echo '<input type="submit" name = "submit" class="popup-login-button" value="로그인">';
        echo '<p>아직 회원이 아니신가요?<a href="register.php" class="popup-register-button">회원가입 하기</a></p>';
        echo '</form>';
        echo '</div>';
        echo '</div>';
        <!-- echo '<li><button onclick="togglePopup()">로그인</button></li>';
        if(isset($_GET["error"])) {
          if($_GET["error"] == "LoginEmptyInput") {
            echo "<script>alert('모든 칸에 입력해주시기 바랍니다!')</script>";
          }
          else if($_GET["error"] == "wronglogin")
          {
            echo "<script>alert('로그인 정보가 정확하지 않습니다!')</script>";
          }
          else if($_GET["error"] == "WrongUid")
          {
            echo "<script>alert('사용자 이름이 정확하지 않습니다!')</script>";
          }
        }
      }
        echo '</ul>';
      ?> -->

    <a href="#" class="navbar__toggleBtn">
      <i class="fas fa-bars"></i>
    </a>
  </nav>


  <div class="banner">
    <!-- 슬라이더 제작 시작 -->
    <div class="slider">
      <div class="slides">

        <input type="radio" name="radio-btn" id="radio1">
        <input type="radio" name="radio-btn" id="radio2">
        <input type="radio" name="radio-btn" id="radio3">

        <div class="slide first">
          <img src="images/slide1.png" alt="">
        </div>
        <div class="slide">
          <img src="images/slide2.jpg" alt="">
        </div>
        <div class="slide">
          <img src="images/slide3.jpg" alt="">
        </div>

        <div class="navigation-auto">
          <div class="auto-btn1"></div>
          <div class="auto-btn2"></div>
          <div class="auto-btn3"></div>
        </div>

      </div>

      <div class="navigation-manual">
        <label for="radio1" class="manual-btn"></label>
        <label for="radio2" class="manual-btn"></label>
        <label for="radio3" class="manual-btn"></label>
      </div>

    </div>

  </div>
  <section class="maincontents">
    <section id="m1" class="m">
      <div id="notice" class="mb">
        <h3>공지사항</h4>
          <hr>
      </div>
      <div id="weather" class="mb">
        <!-- https://www.youtube.com/watch?v=QxEZCSfUrzs
        참고 해서 날씨기능 추가 완료 추후 보여지는 디자인 기능적인 부분 변경-->
        <div class="cw">
          <h3>현재 온도:</h3>

        </div>
        <hr>
        <div class="icon"></div>
      </div>
    </section>
    <section id="m2" class="m">
      <div id="food" class="mb">
        <h3>급식 정보</h3>
        <hr>
      </div>
      <div id="event" class="mb">
        <h3>이벤트</h3>
        <hr>
      </div>
    </section>
  </section>
  375px에서 5px은 user agent stylesheet CSS 기본 규칙에서 display가 block으로 되어
  있어서 flex로 바꿔서 해결이 되었고 다른 탭들은 글꼴, border radius 정도 바꿔놓았
  습니다. 일단 배너 사진 꽉차게 하는거랑, 다른 게시판 디자인 정도만 제가 더 하면 될
  것 같고, 온도 나오는 거는 hr 적용해서 하려고 하는데 잘 안되네요.. index.php 164번줄
  입니당
  <footer>

  </footer>
  <!--footer>
      <img src="images/Logos/LogoWhite.png" alt="DevPortal Logo" class="logo_img">
      <p>© 2020 Devportal Forum.</P>
    </footer-->


</body>

</html>