<?
	session_start();
	$memberId = $_SESSION["memberId"];

	$conn = mysqli_connect("localhost","yuubug","dlwlsdb11##","yuubug");
	$sql = "select * from member where memberId ='$memberId'";
	$rs = mysqli_query($conn, $sql);
	$row = mysqli_fetch_array($rs);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<script src="http://code.jquery.com/jquery-1.12.3.min.js"></script>
	<link rel="stylesheet" type="text/css" href="/res/css/common.css">
	<link rel="stylesheet" type="text/css" href="/res/css/joinForm.css">
	<link rel="stylesheet" type="text/css" href="/res/css/mypage.css">
	<script type="text/javascript" src="/res/js/script.js"></script>
	<script type="text/javascript" src="/res/js/join.js"></script>
</head>
<body>

<div id="header">
	<div class="logo">
		<a href="/index.php">TRAVEL</a>
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
			<li>
				<a href="reservation.php">
					<img src="/res/images/mypage/ico_mypage_06.png">
					<span>예약 조회</span>
				</a>
			</li>
			<li class="on">
				<a href="memberEdit.php">
					<img src="/res/images/mypage/ico_my_m.gif">
					<span  class="on">회원 수정</span>
				</a>
			</li>
			<li>
				<a href="point.php">
					<img src="/res/images/mypage/ico_mypage_02.png">
					<br>
					<span>포인트</span>
				</a>
			</li>
			<li>
				<a href="coupon.php">
					<img src="/res/images/mypage/ico_mypage_03.png">
					<br>
					<span>쿠폰</span>
				</a>
			</li>
			<li>
				<a href="faq.php">
					<img src="/res/images/mypage/ico_mypage_05.png">
					<br>
					<span>FAQ</span>
				</a>
			</li>
		</ul>
	</div>
	<form action="memberEdit_ok.php" method="post" name="join_form"> <!-- 로그인하는 것은 Select 하는 것 -->
	  <div class="form-group">
	  	<input type="hidden" name="no" value="<?=$row['no']?>">
	    <input type="text" name="username" class="form-control" placeholder="이름을 입력해주세요." id="username" value="<?=$row['name']?>"readonly>
	    <div id="nameCheck"></div>
	  </div>
	  <div class="form-group">
	  	<input type="text" name="memberId" class="form-control" placeholder="아이디를 입력해주세요." id="memberId" value="<?=$row['memberId']?>" readonly>
	    <div id="idCheck"></div>
	  </div>
	  
	  <div class="form-group">
	    <input type="password" name="pw" class="form-control" placeholder="비밀번호를 입력해주세요." id="pw">
	    <div id="pwCheck"></div>
	  </div>
	  <div class="form-group">
	    <input type="password" name="pwConfirm" class="form-control" placeholder="비밀번호 확인" id="pwConfirm">
	    <div id="pwConfirm_Check"></div>
	  </div>
	  <div class="form-group" style="display: flex">
	    <input type="tel" name="phoneNum" class="form-control" maxlength="11" placeholder="휴대폰 번호를 '-'빼고 입력해주세요." id="phoneNum" value="<?=$row['phone']?>">
	    <input type="button" class="btn-phone" onclick="request_phone()" value="인증요청">
	  </div>
	  <div class="form-group" style="display: flex">
	    <input type="email" name="email" class="form-control" placeholder="이메일을 입력해주세요" id="email" value="<?=$row['email']?>">
	    <input type="button" class="btn-phone" onclick="request_phone()" value="인증요청">
	  </div>
	  <div class="form-group" style="display: flex">
	    <input type="text" name="yyyy" class="born-date" placeholder="태어난 년도" id="yyyy">
	    <input type="text" name="mm" class="born-date" placeholder="월" id="mm">
	    <input type="text" name="dd" class="born-date" placeholder="일" id="dd">  
	  </div>
	  <div class="form-group" style="display: flex;">
	  	<button id="btn-login" class="btn btn-primary" onclick="edit_check()" style="margin-right:20px;">수정하기</button>
	  	<input type="button" class="btn btn-primary" value="회원 탈퇴하기" onclick="withdrawal()">
	  </div>
	</form>
</div>

<footer>
	푸터
</footer>
</body>
</html>
<script type="text/javascript" charset="utf-8">
	
	function withdrawal() {
		if(confirm("정말로 탈퇴하시겠습니까?")){
			location.href="withdrawal_ok.php?no=<?=$row['no']?>";
		}
	}
</script>