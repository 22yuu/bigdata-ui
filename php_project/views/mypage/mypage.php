<?
	session_start()
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<script src="http://code.jquery.com/jquery-1.12.3.min.js"></script>
	<link rel="stylesheet" type="text/css" href="/project/res/css/common.css">
	<link rel="stylesheet" type="text/css" href="/project/res/css/mypage.css">
	<script type="text/javascript" src="/project/res/js/script.js"></script>
</head>
<body>

<div id="header">
	<div class="logo">
		<a href="/project/index.php">TRAVEL</a>
	</div>
	<div class="menu-wrap">
		<ul class="menu">
			<li ><a href="../domestic.php">DOMESTIC</a></li>
			<li><a href="../oversea.php">OVERSEAS</a></li>
			<li><a href="../member/logout.php">LOGOUT</a></li>
			<li><a style="border-bottom:1px solid #ddd; color: #222; height: 70px;" href="#">MYPAGE</a></li>		
			<li><a href="../qna/qna.php">QnA</a></li>
		</ul>
	</div>
</div>
<div id="mypage-wrap">
	<div class="mypage-title">
		<a href="#">MYPAGE</a>
	</div>
	<div class="mypage-icon">
		<ul>
			<li class="on">
				<a href="reservation.php">
					<img src="/project/res/images/mypage/ico_mypage_06.png">
					<span class="on">예약 조회</span>
				</a>
			</li>
			<li>
				<a href="memberEdit.php">
					<img src="/project/res/images/mypage/ico_my_m.gif">
					<span>회원 수정</span>
				</a>
			</li>
			<li>
				<a href="point.php">
					<img src="/project/res/images/mypage/ico_mypage_02.png">
					<br>
					<span>포인트</span>
				</a>
			</li>
			<li>
				<a href="coupon.php">
					<img src="/project/res/images/mypage/ico_mypage_03.png">
					<br>
					<span>쿠폰</span>
				</a>
			</li>
			<li>
				<a href="faq.php">
					<img src="/project/res/images/mypage/ico_mypage_05.png">
					<br>
					<span>FAQ</span>
				</a>
			</li>
		</ul>
	</div>

	<div>
		예약하신 상품이 없습니다.
	</div>
</div>

<footer>
	푸터
</footer>
</body>
</html>