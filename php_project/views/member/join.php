<?
	session_start();
	if(isset($_GET['prevPage'])) {
		$prevPage = $_GET['prevPage'];
	} else {
		$prevPage = $_SERVER['HTTP_REFERER'];
	}
	if(isset($_SESSION['memberId'])) {
		header('Location: /project/index.php');
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<script src="http://code.jquery.com/jquery-1.12.3.min.js"></script>
	<!-- css -->
	<link rel="stylesheet" type="text/css" href="/project/res/css/common.css">
	<link rel="stylesheet" type="text/css" href="/project/res/css/joinForm.css">
	
	<!-- js -->
	<script type="text/javascript" src="/project/res/js/join.js"></script>
</head>
<body>
<div id="header">
	<div class="logo">
		<a href="/project/index.php">TRAVEL</a>
	</div>
	<div class="menu-wrap">
		<ul class="menu">
			<li ><a href="../domestic.php">DOMESTIC</a></li>
			<li><a href="../oversea.php">OVERSEA</a></li>
			<li><a href="login.php">LOGIN</a></li>
			<li><a style="border-bottom:1px solid #ddd; color: #222; height: 70px;" href="#">JOIN</a></li>		
			<li><a href="../qna/qna.php">QnA</a></li>
		</ul>
	</div>
</div>
<div id="joinForm">
	<div class="title">
		<a href="/project/index.php">TRAVEL</a>
		<br>
		<span style="font-size: 1.5rem;">JOIN</span>
	</div>

	<form action="join_ok.php" method="post" name="join_form"> <!-- 로그인하는 것은 Select 하는 것 -->
	  <div class="form-group">
	  	<input type="hidden" name="prevPage" value="<?=$prevPage?>">
	    <input type="text" name="username" class="form-control" placeholder="이름을 입력해주세요." id="username">
	    <div id="nameCheck"></div>
	  </div>
	  <div class="form-group" style="display: flex">
	  	<input type="text" name="memberId" class="form-control" placeholder="아이디를 입력해주세요." id="memberId">
	  	<input type="button" name="btn_idCheck" class="btn btn-primary" value="중복검사" onclick="idCheck()">
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
	    <input type="tel" name="phoneNum" class="form-control" maxlength="11" placeholder="휴대폰 번호를 '-'빼고 입력해주세요." id="phoneNum">
	    <input type="button" class="btn-phone" onclick="request_phone()" value="인증요청">
	  </div>
	  <div class="form-group" style="display: flex">
	    <input type="email" name="email" class="form-control" placeholder="이메일을 입력해주세요" id="email">
	    <input type="button" class="btn-phone" onclick="request_phone()" value="인증요청">
	  </div>

	  <div class="form-group" style="display: flex">
	    <input type="text" name="yyyy" class="born-date" maxlength="4" placeholder="태어난 년도" id="yyyy">
	    <input type="text" name="mm" class="born-date" maxlength="2" placeholder="월" id="mm">
	    <input type="text" name="dd" class="born-date" maxlength="2" placeholder="일" id="dd">  
	  </div>
	  <div class="form-group">
	  	<button id="btn-login" class="btn btn-primary" onclick="join_check()">회원가입</button>
	  </div>
	</form>
</div>
<footer></footer>
</body>
</html>
<script type="text/javascript">
	
	function request_phone() {
		alert("준비중");
	}
</script>