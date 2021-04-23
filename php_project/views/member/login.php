<?
	$prevPage = $_SERVER['HTTP_REFERER'];
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<script src="http://code.jquery.com/jquery-1.12.3.min.js"></script>
	<!-- css -->
	<link rel="stylesheet" type="text/css" href="/res/css/common.css">
	<link rel="stylesheet" type="text/css" href="/res/css/loginForm.css">
	
	<!-- js -->
	<script type="text/javascript" charset="utf-8" src="/res/js/script.js"></script>

	<script>
		function login_check() {
			if(login_form.memberId.value == "") {
				alert("아이디를 입력해주세요...!");
				login_form.memberId.focus();
				return false;
			} else if (login_form.pw.value =="") {
				alert("패스워드를 입력해주세요...!");
				login_form.pw.focus();
				return false;
			}
			document.login_form.submit();
		}
	</script>
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
			<li><a style="border-bottom:1px solid #ddd; color: #222; height: 70px;" href="login.php">LOGIN</a></li>
			<li><a href="join.php">JOIN</a></li>		
			<li><a href="../qna/qna.php">QnA</a></li>
		</ul>
	</div>
</div>
<div id="loginForm">
	<div class="title">
		<a href="/index.php">TRAVEL</a>
		<br>
		<span style="font-size: 1.5rem;">LOGIN</span>
	</div>

	<form action="login_ok.php" method="post" name="login_form"> <!-- 로그인하는 것은 Select 하는 것 -->

	  <div class="form-group">
	  	<input type="hidden" name="prevPage" value="<?=$prevPage?>">
	    <input type="text" name="memberId" class="form-control" placeholder="아이디를 입력해주세요." id="memberId">
	  </div>
	  
	  <div class="form-group">
	    <input type="password" name="pw" class="form-control" placeholder="비밀번호를 입력해주세요." id="pw">
	  </div>
	  	<div class="form-group">
	  		<input type="button" class="btn btn-primary" onclick="login_check()" value="로그인">
		  	<!-- <button id="btn-login" class="btn btn-primary" onclick="login_check()">로그인</button> -->
		</div>
	</form>

	<div class="find-info">
		<a href="searchId.php">아이디 찾기</a>
		<a href="searchPw.php">비밀번호 찾기</a>
		<a href="join.php?prevPage=<?=$prevPage?>">회원가입</a>
	</div>
	<div data-8 class="social-login">
        <h2><span class="social-login-text">SNS 로그인 / 가입</span></h2>
    </div>
    <div class="social-login-frame">
		<a class="kakao-login-btn" href="#"></a>
		<a class="naver-login-btn" href="#"></a>
		<a class="google-login-btn" href="#"></a>
		<a class="facebook-login-btn" href="#"></a>
	</div>
</div> 
<footer></footer>
			
</div>
</body>
</html>